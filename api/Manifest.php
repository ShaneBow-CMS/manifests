<?php defined('BASEPATH') OR exit('No direct script access allowed');
/********************************************************************
* @(#)Manifest.php 20211028
* Copyright (c) 2019 by Richard T. Salamone, Jr. All rights reserved.
*
* API Controller for the Manifests
*
* Manifests store the meta data for each activity offered on the
* site. Included are the
* - type of activity (deck, labeler, passage, quiz, ...)
* - summary info (title, image, ...)
* - flags (published)
* - access (eg free, member, subscriber, product)
* - data - app-specific: may be the actual data set for the activity
*
* @author Rick Salamone
* @version 20190829
*******************************************************/

class Manifest extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('ajax');
		}

	private function _api_not_support($obj,$act) {
		respond(EXIT_UNKNOWN_METHOD, "$act <i>$obj</i> not supported", '');
		}

	private function _require_usr() {
		$usr = $this->session->userdata('usr');
		if (!$this->_usr)
			respond(EXIT_ERR_LOGIN, 'login', "Log in required");
		return $usr;
		}

	private function _validate($form) {
		$this->load->library('form_validation');
		if ($this->form_validation->run($form) == FALSE)
			dieInvalidFields();
		}

	/**
	* get a list of passages
	*******************************/
	public function index() {
		}

	/**
	* @return paginated list of summary meta data
	*********************************************/
	public function summaries() {
		$this->load->model('mmanifests');
		$per_page = isset($_POST['per_page'])? intval($_POST['per_page']) : 24;

		$where = [];
		if (isset($_POST['otypes'])) $where[] = 'm.otype in ('.$_POST['otypes'].')';
		else {
			$otype = isset($_POST['otype'])? intval($_POST['otype']) : 0;
			if ($otype)  $where[] = 'm.otype='.$otype;
			}
		$admin = isset($_POST['admin'])? TRUE : FALSE;
		if (!$admin) $where[] = 'm.flags & '.PAGE_PUBLISH;
		$where = implode(' AND ', $where);

		$order = isset($_POST['order'])? $_POST['order'] : 'm.otype,m.ord,m.title';

		try {
			$dat['items'] = $this->mmanifests->paginated_meta(
					'/api/manifest/summaries/',
					$this->uri->segment(4), $per_page, 5, $where, $order);
			$dat['page'] = $this->pagination->create_links();
			}
		catch (Exception $e) {db_error($e->getMessage());}
		respond(0, 'ok', $dat);
		}

	/**
	* get manifest by id
	**********************/
	public function get() {
		if (!isset($_POST['id']))
			respond(EXIT_ERR_MALFORMED, "Missing id", '');
		$this->load->model('mmanifests');

		try {
			$id = intval($_POST['id']);
			$manifest = $this->mmanifests->get($id);
			}
		catch (Exception $e) {db_error($e->getMessage());}
		respond(0, 'ok', $manifest);
		}

	public function post() {
		function required($data, $fld) {
			if (!isset($data[$fld]) || !$data[$fld])
				dieInvalidField($fld, 'Required!');
			}
		$usr = $this->_require_usr();
		$mani = $_POST;

	//	$this->_validate('tl-post-noun');
		required($mani, 'otype');
		required($mani, 'title');

		$this->load->model('mmanifests');
		try { $id = $this->mmanifests->post($mani, $usr['id']); }
		catch (Exception $e) {db_error($e->getMessage());}
		respond(0, "SUCCESS", $id);
		}

	/**
	* return a quiz manifest
	*************************/
	public function quiz() {
		if (!isset($_POST['id']))
			respond(EXIT_ERR_MALFORMED, "Missing id", '');

		$this->load->model('mmanifests');
		try {
			$id = intval($_POST['id']);
			$mani = $this->mmanifests->get($id);
			$payload = $mani['payload'];
			if (strlen($payload)) {
				$mani['quiz'] = $this->mmanifests->expandQuiz($payload);
				}
			else {
				$mani['quiz'] = '';
				}
			unset($mani['payload']);
			}
		catch (Exception $e) {db_error($e->getMessage());}
		respond(0, 'ok', $mani);
		}
	}
