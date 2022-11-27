<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/********************************************************************
* @(#)Mmanifests.php
* Copyright � 2017-2021 by Richard T. Salamone, Jr. All rights reserved.
*
* Model for dynamic page content in UBOW web sites.
*
* @author Rick Salamone
* @version 20211127
* 20211127 rts created
* 20220911 rts added get_list
*******************************************************/

class Mmanifests extends MY_Model {
	protected $table_name = 'manifests';

	public function __construct() {
		parent::__construct();
		}

	public function get($id) {
		if (!$id) return null; //return $this->blank();
		$mani = $this->db
			->select('manifests.*,media.type_id as mtype'
				.',own.nickname as owner_name'
				.',mod.nickname as modifier_name'
				.',GROUP_CONCAT(t2o.tid ORDER BY t2o.tid) AS tag_ids')
			->join('tags2objs t2o', 't2o.oid = manifests.id AND t2o.otype=manifests.otype','left outer')
			->join('media', 'manifests.mid = media.id','left outer')
			->join('users own', 'own.id = owner','left outer') // 
			->join('users mod', 'mod.id = uid_lmod','left outer')
			->where('manifests.id', $id)
			->get($this->table_name)
			->row_array();

	//	if (!$mani) return null;

	//	$this->load->model(['mmedia','musers']);
	//	$mani['profile'] = $this->musers->get_profile($mani['uid']);
	//	$mani['media'] = $this->mmedia->get_object_media(mani['otype'], $mani['id']);
		return $mani;
		}

	public function get_list($where='', $order_by = 'm.ord DESC') {
		$this->table_name = 'manifests m';

		if ($where) $this->db->where($where);
		return $this->db
			->select('m.*'
				.',u.nickname'
				.',media.type_id as mtype'
	//			.',GROUP_CONCAT(t2o.tid ORDER BY t2o.tid) AS tags'
				)
			->join('tags2objs t2o', 't2o.oid = m.id AND t2o.otype=m.otype','left outer')
			->join('users u', 'u.id = m.owner','left outer')
			->join('media', 'm.mid = media.id','left outer')
	//		->group_by('m.id')
			->order_by($order_by)
			->get('manifests m')   // , $paging['per_page'], $first)
			->result_array();
		}

	public function paginated_meta($base_url, $first, $per_page = 10, $num_links = 5, $where='', $order_by = 'm.ord DESC') {
		$this->table_name = 'manifests m';
		$paging = $this->init_pagination($base_url, $first, $where, $per_page, $num_links);

		if ($where) $this->db->where($where);
		return $this->db
			->select('m.id,m.otype,m.title,m.ord,m.flags,m.mid'
				.',m.owner,u.nickname'
				.',media.type_id as mtype'
				.',GROUP_CONCAT(t2o.tid ORDER BY t2o.tid) AS tags'
				)
			->join('tags2objs t2o', 't2o.oid = m.id AND t2o.otype=m.otype','left outer')
			->join('users u', 'u.id = m.owner','left outer')
			->join('media', 'm.mid = media.id','left outer')
			->group_by('m.id')
			->order_by($order_by)
			->get('manifests m', $paging['per_page'], $first)
			->result_array();
		}

	/**
	* post($post) - Create or update a page from posted form data
	* $post includes the page fields as well as a CSV of tag ids
	* @return the id of the page
	*/
	public function post($mani, $uid) {
	//	$this->load->model(['mmedia','mtags']);
		$tbl = 'manifests';
		$id = $mani['id'];
		$otype = $mani['otype'];
		$mani['lmod'] = time();
		$mani['uid_lmod'] = $uid;

		unset($mani['id']);
	//	unset($mani['tids']);
	//	unset($mani['mids']);
		if ($id) {
			if (!$this->_update($tbl, $id, $mani, FALSE))
				$this->_throwError();
	//		$this->mmedia->delete_object2media($otype,$id);
	//		$this->mtags->delete_object2tags($otype,$id);
			}
		else {
			$mani['debut'] = $mani['lmod'];
			if (!isset($mani['owner']) || !$mani['owner'])
				$mani['owner'] = $mani['uid_lmod'];
			$id = $this->ins_id($tbl, $mani, FALSE);
			if (!$id) $this->_throwError();
			}
	//	$this->mmedia->insert_object2media($otype,$id,$post['mids']);
	//	$this->mtags->insert_object2tags($otype,$id,$post['tids']);
		return $id;
		}

	/**
	* set or clear a page flag
	*****************************/
	public function set_flag($pid, $flag, $on) {
		$tbl = 'manifests';

		$mani = $this->db->select('flags')
				->get_where($tbl, ['id' => $pid])
				->row_array();
		if ($on) $mani['flags'] |= $flag; // set bit
		else $mani['flags'] &= ~$flag; // clear bit

		if (!$this->_update($tbl, $pid, $mani)) $this->_throwError();
		return $pid;
		}

	// The simple quiz is expected to be a common feature accross
	// sites and are usually a component part of another manifest,
	// such as a lesson, or reading
	public function expandQuiz($coded) {
		define('SEP_QUIZ_FLD', '|');
		define('SEP_QUESTS', "\x0A"); //'\n');
		define('SEP_QUEST_FLD', "\t"); // "\xA9"); // copyright
		define('SEP_ANS', '^');
		$quiz_fld_names = ['ver','title','desc','questions'];
		$quest_fld_names = ['text','mid','flags','info','ans','choices'];

		$flds = explode(SEP_QUIZ_FLD, $coded);
		$quiz = array_combine($quiz_fld_names, $flds);
		if (!strlen($quiz['questions'])) $quiz['questions'] = [];
		else {
			$quiz['questions'] = explode(SEP_QUESTS, $quiz['questions']);
			// @TODO should get all mtypes in one db call then link to questions
			$sql = 'SELECT type_id FROM media WHERE id=';
			foreach($quiz['questions'] as &$q) {
				$flds = explode(SEP_QUEST_FLD, $q);
				$q = array_combine($quest_fld_names, $flds);
				$q['choices'] = explode(SEP_ANS, $q['choices']);
				$q['mtype'] = ($q['mid'] == '0')? 0
					: $this->db->query($sql.$q['mid'])->row()->type_id;
				}
			}
		return $quiz;
		}

	}
/* ~~cms/manifests/db/Mmanifests.php */