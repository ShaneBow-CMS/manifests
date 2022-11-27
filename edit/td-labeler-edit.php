<!DOCTYPE html>
 <html lang="en"><head>
 <meta charset="UTF-8" />
  <meta name="author" content="Rick Salamone" >
  <meta name="GENERATOR" content="Site Builder" >
  <link rel="SHORTCUT ICON" href="/favicon.ico?v=20220112" />
 <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<!-- link rel="shortcut icon" href="/assets/ico/favicon.ico" -->
<link href="/pix/icon64.png" rel="shortcut icon" type="image/x-icon">
<link href="/pix/icon-apple60.png" rel="apple-touch-icon" sizes="60x60">
<link href="/pix/icon-apple76.png" rel="apple-touch-icon" sizes="76x76">
<link href="/pix/icon-apple120.png" rel="apple-touch-icon" sizes="120x120">
<link href="/pix/icon-apple152.png" rel="apple-touch-icon" sizes="152x152">
 <link href="/assets/css/admin.css" rel="stylesheet">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->
 <script type="text/javascript" src="/assets/js/jquery.2.1.3.min.js"></script>
 <script src="/assets/js/soundmanager2-nodebug-jsmin.js"></script>
 <script src="/assets/js/jquery-ui-1.10.4.custom.min.js"></script>
  <title>Labeler Editor &rsaquo; ThaiDrills.com</title>
 </head>
 <!--<body>Spoof body for bad isp's</body>-->
 <body>
 <div id="wrapper">
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
   <div class="navbar-header" style="width:100%">
    <button type="button" class="navbar-toggle"
       data-toggle="collapse" data-target=".navbar-collapse">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">
     <span>
      <img src="/assets/pix/admin-logo.png" height="30" />
      Admin
     </span>
    </a>
    <ul class="nav navbar-top-links navbar-right">
<!--
<li class="dropdown">
 <?php if ($lang=='en'): ?>
  <a href="/user/language/th">
   <button class="btn btn-danger btn-xs">ภาษาไทย</button></a>
 <?php else : ?>
  <a href="/user/language/en">
   <button class="btn btn-primary btn-xs">English</button></a>
 <?php endif; ?>
</li>
-->
     <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
       <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
       <li><a href="/user/profile"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
       <li><a href="/user/account"><i class="fa fa-gear fa-fw"></i> Account</a></li>
       <li class="divider"></li>
        <li><a href="/drill"><i class="fa fa-gear fa-fw"></i> Drills</a></li>
        <li><a href="/game"><i class="fa fa-gear fa-fw"></i> Games</a></li>
        <li><a href="/course"><i class="fa fa-gear fa-fw"></i> Courses</a></li>
        <li><a href="/reference"><i class="fa fa-gear fa-fw"></i> Reference</a></li>
       <li class="divider"></li>
        <li><a href="/">Home Page</a></li>
        <li><a href="/about-us">About Us</a></li>
        <li><a href="/terms-and-conditions">Terms and Conditions</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/contact-us">Contact Us</a></li>
        <li><a href="/sitemap">Sitemap</a></li>
       <li class="divider"></li>
        <li><a href="/user/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
      </ul><!-- /.dropdown-user -->
     </li><!-- /.dropdown -->
    </ul><!-- /.navbar-top-links -->
   </div><!-- /.navbar-header -->
   <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
     <ul class="nav" id="side-menu">
      <li><a href="/admin/dashboard/index"><i class="fa fa-dashboard fa-fw"></i> <?= $this->lang->line('shop_Dashboard') ?></a></li>
      <li><a href="/admin/setting"><i class="fa fa-wrench fa-fw"></i> <?= $this->lang->line('shop_Settings') ?></a></li>
      <li><a href="/admin/email"><i class="fa fa-envelope fa-fw"></i> Email Templates</a></li>
      <li><a href="/admin/dashboard/manifests"><i class="fa fa-dashboard fa-fw"></i> Manifests</a></li>
      <li><a href="#"><i class="icon-stack-text"></i> Content<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
        <li><a href="/cat">Categories</a></li>
        <li><a href="/page/table">Pages</a></li>
        <li><a href="/page/create">Create Page</a></li>
        <li><a href="/macro">Editor Macros</a></li>
       </ul>
      </li>
      <li><a href="#"><i class="fa fa-book fa-fw"></i> <?= $this->lang->line('shop_Catalog') ?><span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
        <li><a href="/admin/shop_cat"><i class="fa fa-sitemap fa-fw"></i> Shop <?= $this->lang->line('ubow_Categories') ?></a></li>
        <li><a href="/admin/product"><i class="fa fa-tags fa-fw"></i> <?= $this->lang->line('shop_Products') ?></a></li>
        <li><a href="/admin/service"><i class="fa fa-glass fa-fw"></i> <?= $this->lang->line('shop_Services') ?></a></li>
       </ul>
      </li>
      <li><a href="#"><i class="icon-hour-glass2"></i> ThaiDrills<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
        <li><a href="/admin/td_work/potjanaanugrom">Potjanaanugrom</a></li>
        <li><a href="/admin/td_work/drill-decks">Deck Editor</a></li>
        <li><a href="/admin/td_work/labeler-edit">Labeler Editor</a></li>
        <li><a href="/admin/td_work/passage-editor">Passage Editor</a></li>
        <li><a href="/admin/td_work/quiz-editor">Quiz Editor</a></li>
        <li><a href="/admin/td_work/svg-fonts">SVG Fonts</a></li>
        <li><a href="/admin/td_work/lukled-new">Luke Led New</a></li>
        <!-- li><a href="/admin/td_work/lukled">Luke Led</a></li -->
        <li><a href="/admin/td_work/button-styles">Button Styles</a></li>
        <li><a href="/admin/td_work/quizzer">Quizzer</a></li>
        <li><a href="/drill/phrases">Phrases</a></li>
       </ul>
      </li>
      <li><a href="/admin/calendar/index"><i class="fa fa-calendar-o fa-fw"></i> <?= $this->lang->line('shop_Appointments') ?></a></li>
      <li><a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
        <li><a href="/admin/user/members">Members</a></li>
        <li><a href="/admin/user/contributors">Contributors</a></li>
        <li><a href="/admin/user/advertisers">Ad Posters</a></li>
        <li><a href="/admin/user/site-admins">Site Admins</a></li>
       </ul>
      </li>
      <li><a href="/admin/cart"><i class="fa fa-shopping-cart fa-fw"></i> <?= $this->lang->line('shop_Orders') ?></a></li>
      <li><a href="#"><i class="fa fa-database fa-fw"></i> Database<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
        <li><a href="/admin/seeder/tables">Tables</a></li>
        <li><a href="/admin/seeder/index">Seeder</a></li>
        <li><a href="/media/index">Media</a></li>
       </ul>
      </li>
     </ul>
    </div><!-- /.sidebar-collapse -->
   </div><!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
   <div class="row page-head">
    <div class="col-sm-6">
     <h1>
      <?php if(isset($title)): ?>
       <?= $title ?>
      <?php else: ?>
Labeler Editor      <?php endif; ?>
     </h1>
    </div><!-- /.col-sm-6 -->

    <?php if(isset($filter_name)): ?>
     <form class="filter <?= $filter_name ?> col-sm-6">
      <span class="form-group input-group">
       <input class="form-control key" type="text" />
       <span class="input-group-btn">
        <button class="filter btn btn-default" type="submit" title="<?= $this->lang->line('filter'); ?>">
         <i class="fa fa-search"></i>
        </button>
        <button class="clear btn btn-default" type="button" title="<?= $this->lang->line('clear'); ?>">
         <i class="fa fa-repeat"></i>
        </button>

        <button id="add-<?= $filter_name ?>" class="btn btn-primary" title="<?=  $this->lang->line('add'); ?>">
         <i class="fa fa-plus"></i>
        </button>

       </span>
      </span>
     </form>
    <?php endif; ?>
   </div><!-- /.row -->

   <div class="row">
    <div class="col-lg-12">
<?php
	$flashes = $this->session->flashdata();
	if ($flashes && count($flashes))
		foreach($flashes as $key => $value)
			echo '<div id="flashes" class="alert '.$key.' alert-dismissable">'
				. '<button class="close" data-dismiss="alert">×</button>'
				. $value.'</div>';
?>
    </div><!-- /.col-lg-12 -->
   </div><!-- /.row -->

<style>
.results li {padding: 1px 10px}
table.tbl-hor-min-b,
.tbl-hor-min-b table {
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	width: 100%;
	border-collapse: collapse;
	text-align: left;
	}
.tbl-hor-min-b th {
	font-size: 14px;
	font-weight: normal;
	color: #039;
	padding: 10px 8px;
	border-bottom: 2px solid #6678b1;
	}
.tbl-hor-min-b td {
	border-bottom: 1px solid #ccc;
	color: #669;
	padding: 6px 8px;
	vertical-align:top;
	}
.tbl-hor-min-b td img {text-align: center; max-height:30px;max-width:60px}
.tbl-hor-min-b tbody tr:hover td {color: #009}
.tbl-hor-min-b td.delete:after {content: '\00d7'; color: red}

td.delete:after {
	content: '\00d7';
	color: red;
	}
.game-board {padding:10px}
i.error {color:red}

#drops {
	position: relative;
	text-align:center;
	user-select: none;
	}
#drops>img {width:100%}
#drops .drop {
	user-select: none;
	position: absolute; top: 0; left: 0;
	background: #fff;
	border-style: dashed;
    border-top-style: dashed;
    border-right-style: dashed;
	border-top: none;
	border-right: none;
	height: 26px;
	padding: 0 5px;

	font-style: italic;
	color: blue;
	z-index:2;
	}
.grabbable {
    cursor: move; /* fallback if grab cursor is unsupported */
    cursor: grab;
    cursor: -moz-grab;
    cursor: -webkit-grab;
    }

 /* (Optional) Apply a "closed-hand" cursor during drag operation. */
.grabbable:active {
    cursor: grabbing;
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
    }

/** for obsolete sets list **/
/* from thaidrills.css */
.photos {display: block;margin:0
}
#content ul.photos {list-style:none; margin:-2px;padding:0}
ul.photos li {display:inline-block;overflow:hidden;margin: 2px;border-radius:8px}
ul.three-col.photos li {width:212px;height:152px;border:10px solid #A460D8}
ul.four-col li {width:152px;height:108px}

ul.translucent li a {
	background-color:#aaa;
	opacity: 0.75;
	}
ul.photos li a {
	display: block;
	height:96px;
	border-radius:8px;
	float: left;
	padding: 6px;
	-webkit-transition: all 0.3s linear;
	-moz-transition: all 0.3s linear;
	transition: all 0.3s linear;
	}
ul.translucent li a:hover {opacity: 1.0;background-color:#530B79}
ul.photos li a div {
	max-height:92px;
	overflow:hidden;
	background-color: #eee;
	border: 2px solid #fff;
	border-radius:6px;
	}
ul.photos li a div:hover {border-color:yellow}
ul.photos li a div img {width:126px;width:138px} /* 160 - 6 margin - 12 pad - 4 bord = 138
 */
ul.photos {
	list-style: none;
    margin: -2px;
    padding: 0;
	}
/* from labeler.php.content */
ul.photos li a {float:none;height:auto}
ul#old-way-gallery li {width:154px;height:108px}
@media (min-width: 992px) {
	ul#old-way-gallery li {width:48%;height:auto;margin:1%}
	}
</style>

<div class="row">
 <div class="col-sm-8 col-lg-7">

  <div class="toolbar mb-10">
   <button id="img-pick" class="btn btn-primary btn-outline">Set Image</button>
   <span id="ted-picker">
   </span>
   <div class="pull-right xform-group">
    <input id="img-info" class="form-control" readonly />
   </div>
  </div>

  <div id="game" style="width:100%">
   <div id="drops"><img src="/assets/pix/app/dnd-blank.gif" /></div>
  </div>

  <table class="tbl-hor-min-b mb-20">
   <thead>
    <tr>
     <th>tid</th>
     <th>x</th>
     <th>y</th>
     <th>vocab</th>
     <th>thai</th>
     <th>phonetic</th>
     <th>eid</th>
		<th>&nbsp;</th>
    </tr>
   </thead>
   <tbody id="label-list">
   </tbody>
  </table>
 </div>

 <div class="col-sm-4 col-lg-5">
  <div class="row">
   <div class="col-lg-6">
<form class="panel panel-default manifest">
 <div class="panel-heading">
  <b>Manifest</b>
  <a class="btn btn-xs btn-primary pull-right new">
    <i class="fa fa-plus" style="color:#fff"></i></a>
 </div>

 <div class="panel-body">
  <input name="id" type="hidden" value="0" />

  <div class="form-border ar ar16x9 mb-10 imgPick">
   <img mid="0" src="/uploads/0.jpg" />
  </div>

  <div class="form-group">
   <label>Ord/Title</label>
   <div class="input-group">
    <input name="ord" class="form-control" style="width:25%;border-right: none">
    <input name="title" class="form-control" placeholder="Dataset name" style="width:75%">
   </div>
  </div>

  <div class="form-group otype">
   <label>Object Type</label>
  </div>

  <div class="form-group access">
   <label>Access</label>
   <select name="access" class="form-control"></select>
  </div>

  <div class="form-group">
   <label class="control-label">Flags</label>
   <div class="form-border flags"></div>
  </div>

  <div class="form-group">
   <label class="control-label">Desc</label>
   <textarea name="desc" rows="4" class="form-control"></textarea>
  </div>

  <div class="form-group">
   <a href="#dlg-tags-picker" data-toggle="modal" class="no-pad pull-right">
    <i class="icon-file-plus"></i>
   </a>      
   <label class="control-label">Tags</label>
   <div id="tagged-as" class="row tagcloud pull-right"></div>
  </div>

  <div class="form-group">
   <label class="control-label">Owner</label>
   <input name="owner" class="form-control" />
  </div>

 </div>
 <div class="panel-footer right">
  <button type="submit" class="btn btn-primary btn-outline">Submit</button>
 </div>
</form>
   </div>

   <div class="col-lg-6">
    <h4>Select Labeler</h4>
    <div id="man-summaries"></div>
    <h4>Old Way Labelers</h4>
    <ul id="old-way-gallery" class="center translucent photos clearfix"></ul>
   </div>
  </div>
 </div>
</div>

<div class="modal fade" id="dlg-media-picker" tabindex="-1">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h6 class="modal-title">Media Picker</h6>
   </div>

   <div class="modal-body media-picker">

    <form class="pull-right search">
     <div class="form-group">
      <div class="has-feedback">
       <input name="search-term" class="form-control" placeholder="Search" type="search">
       <div class="form-control-feedback">
        <i class="icon-search4 text-size-small text-muted"></i>
       </div>
      </div>
     </div>
    </form>
    <ul class="nav nav-tabs" style="display:inline-block">
     <li style="display:none"><a href="#media-search" data-toggle="tab"><i class="icon-database-upload"></i> Search</a></li>
     <li class="active"><a href="#media-remote" data-toggle="tab"><i class="icon-database-menu"></i>  Remote</a></li>
     <li><a href="#media-local" data-toggle="tab"><i class="icon-database-upload"></i> Upload</a></li>
    </ul>

    <div id="remote-media" class="tab-content" style="clear:both">
     <div class="tab-pane fade in active" id="media-remote"></div>
     <div class="tab-pane fade" id="media-local">
  <form class="modal-content dropzone" id="dropzone_single">
    <div class="form-group" style="min-height:230px;overflow:hidden">
     <div class="dropzone-previews dz-default dz-message" style="border:2px dashed #ddd;cursor:pointer"></div>
    </div>
    <div class="form-group">
     <!-- label class="control-label">Title</label -->
     <input name="title" class="form-control" type="text" placeholder="Title"/>
    </div>

    <div class="form-group">
     <textarea name="caption" rows="3" class="form-control" placeholder="Caption"></textarea>
    </div>

    <div class="form-group">
     <input name="attribution" class="form-control" type="text" placeholder="Attribution" />
    </div>
 
   <div class="form-group">
    <button type="submit" class="btn btn-primary bg-teal-400">Upload</button>
   </div>
  </form>
     </div>
     <div class="tab-pane fade" id="media-search"></div>
    </div>

   </div>

  </div>
 </div>
</div>
<div class="modal fade" id="dlg-tags-picker" tabindex="-1">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h6 class="modal-title">Tags Picker</h6>
   </div>

   <div class="modal-body">
    <div class="tab-content">
     <div class="tab-pane fade in active" id="tags-select">
      <div class="tagcloud">
       <?php foreach ($tags as $tag): ?>
        <i tag="<?= $tag['id'] ?>" tip="<?=$tag['brief']?>"><?=$tag['name']?></i>
       <?php endforeach; ?>
      </div>
      <div class="form-group" style="overflow:hidden">
       <a href="#tag-create" data-toggle="tab" class="btn border-slate text-slate-800 btn-flat pull-right"><i class="icon-database-upload"></i> Create</a>
      </div>
     </div>

     <form class="tab-pane fade" id="tag-create">
      <div class="form-group">
       <label>Tag Name</label>
       <input name="name" value="" class="form-control" placeholder="Display name for this tag">
      </div>
      <div class="form-group">
       <label>Tag Description</label>
       <input name="brief" value="" class="form-control" placeholder="Tooltip for this tag">
      </div>
      <div class="form-group" style="overflow:hidden">
       <a href="#tags-select" data-toggle="tab" class="btn bg-teal-400 pull-right" style="margin-left:5px">Cancel</a>
       <button type="submit" class="btn btn-primary bg-teal-400 pull-right">Submit</button>
      </div>
     </form>
    </div>

   </div>

  </div>
 </div>
</div>

  </div>
<div id="footer">
 <a id="footer-powered-by"
  href="http://ShaneBow.com" class="sb-logo"
  title="Powered by ShaneBow.com">
  <img src="/assets/pix/whitebow310.png" height="100%" />
 </a>

 <div id="footer-user-display-name">
  Hello, <?= fullname($usr) ?>!
 </div>
</div>
 </div>
 <script src="/assets/js/admin.js"></script>
 <script src="/assets/js/td.js"></script>
<script type="text/javascript" src="/assets/js/cms.js"></script>
<script src="/assets/js/labeler.4.js"></script>
<script>
$(function() {
 const $drops = $('#drops');
 let drops = [];
 const tePicker = new td.ThaiEngPicker('#ted-picker', {
  onAdded: (word) => drops.push(new DropLabel(word, 0, 0)),
  });

 const reset = () => {
  tePicker.reset();
  $('#label-list').empty();
  drops = [];
  $drops.find('.drop').remove();
  $drops.find('img').attr('src', "/assets/pix/app/dnd-blank.gif");
  $('#img-info').val(``);
  };

 const _manifest = new UBOW.ManifestEditor({
//  urlPost: '/api/labeler/post',
  urlLoad: '/api/labeler/load',
  otypes: td.OTYPE,
  imgDiv: '#drops',
  btnPickImg: '#img-pick',
  imgChanged: ($img) => {
   const mid = $img.attr('mid');
   $('#img-info').val( `#${mid}, ${$img[0].naturalWidth} x ${$img[0].naturalHeight}`);
   DropLabel.onResize();
   },
  isValid: () => {
   // validate labels
   if (drops.some(d => d.word.eid == 0 || d.word.tid == 0))
    return UBOW.flashError('Label(s) missing eid or tid');
   return true;
   },
  getExtra: () => {
   return {
    payload: drops.map(d => d.toCSV()).join('|'), // a csv of the labels
    };
   },
  onReset: reset, // create new manifest
  onLoaded: (mani) => {
   reset();
   const $img = $('#drops img');
   $img.attr('src', UBOW.imgSrc(mani.mid,mani.mtype));
   $img.attr('mid', mani.mid);
   $('#img-info').val( `mid: ${mani.mid}, ${$img[0].naturalWidth} x ${$img[0].naturalHeight}`);
   DropLabel.onResize();
   mani.labels.forEach((word) => {
    drops.push(new DropLabel(word, parseInt(word.x), parseInt(word.y)));
    });
   },
  });

 class DropLabel {
  static scale;
  static onResize() {
   const $img = $drops.find('img');
   const inw = $img[0].naturalWidth;
   DropLabel.scale = $drops.width() / inw;
   console.log(`scale = ${DropLabel.scale} = ${$drops.width()} / ${inw}` );
   drops.forEach( d => d.position()); 
   }

  static dragee = null;
  static mouseMove(e) {
   if (DropLabel.dragee) DropLabel.dragee.drag(e);
   }
  static mouseUp(e) {
   DropLabel.dragee = null;
   }
  static init() { // Class static initialization block
   const $img = $drops.find('img');
   console.log("Class static initialization block called");
   DropLabel.onResize();
   $(window).on('resize', DropLabel.onResize);
   window.addEventListener('mouseup', DropLabel.mouseUp, false);
   window.addEventListener('mousemove', DropLabel.mouseMove, true);
   }

  constructor(word, x, y) {
   const my = this;
   my.word = word;
   my.x = parseInt(x);
   my.y = parseInt(y);
   my.$el = $(`<div class="drop grabbable">${word.vocab}</div>`).appendTo($drops);
   my.el = my.$el[0];
   const mouseDown = (e) => {
    DropLabel.dragee = my;
    my.offset = { x: my.el.offsetLeft - e.clientX, y: my.el.offsetTop - e.clientY };
    };
   my.$tr = $(`<tr>${this.tdsHtml()}</tr>`).appendTo($('#label-list'));
// if (tePicker
   my.$tr.on('click', 'td', function() {
    const $td = $(this);
    const col = $td.index();
    let wrd = {...my.word};
    switch (col) {
     case 7: return my.remove();

     case 0: // tid
     case 4: // kamsap
      delete wrd.tid;
      break;

     case 3: // vocab
     case 6: // eid
      delete wrd.eid;
      break;

     default: return;
     }
  //  UBOW.flashSuccess(`DROP row with col = ${col} tid = ${wrd.tid} eid = ${wrd.eid}` );
    tePicker.edit(wrd, (w => my.update(w)));
    });

   let tds = my.$tr.find('td');
   my.$x = tds.eq(1);
   my.$y = tds.eq(2);
   my.word.kamsap = tds.eq(4).text(); // from code to utf8
   my.position(x, y);
   my.el.addEventListener('mousedown', mouseDown, false);
   }

  tdsHtml() {
   const my = this;
   const w = my.word;
   return `
    <td>${w.tid}</td>
      <td>${my.x}</td>
      <td>${my.y}</td>
      <td>${w.vocab}</td>
      <td>${w.kamsap}</td>
      <td>${w.phonetic}</td>
      <td>${w.eid}</td>
    <td class="delete"></td>`;
   }

  remove() {
   const my = this;
   const index = my.$tr.index();
   my.$el.remove();
   my.$tr.remove();
   drops.splice(index, 1);
   }

  update(word) {
   const my = this;
   my.word = {...my.word, ...word};
   my.$tr.html(my.tdsHtml());
   my.$el.html(my.word.vocab);
   }

  toArray() {
   const my = this;
   const w = my.word;
   return [w.tid, my.x, my.y, w.vocab, w.kamsap, w.phonetic, w.eid];
   }

  toCSV() {
   const my = this;
   const w = my.word;
   return `${w.tid},${my.x},${my.y},${w.eid}`;
   }

  position() {
   const my = this;
   my.el.style.left = (my.x * DropLabel.scale) + 'px';
   my.el.style.top  = (my.y * DropLabel.scale) + 'px';
   }

  drag(e) {
   const my = this;
   e.preventDefault();
   e.stopPropagation();
   const left = e.clientX + my.offset.x; 
   const top = e.clientY + my.offset.y; 
   my.x = left / DropLabel.scale;
   my.y = top / DropLabel.scale;
   my.$x.text(`${my.x.toFixed(2)}(${left})` );
   my.$y.text(`${my.y.toFixed(2)}(${top})` );
   my.position();
   }
  }

 /** NEW way show datasets **/
 new UBOW.ManifestSummaries('#man-summaries', {
  extra: {otype: td.OTYPE.LABELED_IMG.value, admin:1},
  onClick: (idManifest) => {
   console.log('loading manifest:', idManifest);
   _manifest.load(idManifest);
   },
  });
 /** end of show datasets NEW way **/

 /** show datasets old way **/
 let old_way_img = false; // manifest editor is now taking care of the image and title
 td.oldLabelerSetsGallery.init('#old-way-gallery');
 $('#old-way-gallery').on('click', 'li', function(e) {
  e.preventDefault();
  const gid = $(this).attr('gid');
  UBOW.flashSuccess(`Fetching ${gid}...`);
  UBOW.ajax('/api/labeler/get/'+gid, {}, (e, d, m) => {
   if (e) return UBOW.flashError(`Could not retrieve '${gid}' (${e})`);
   if (old_way_img) {
    reset();
    const $img = $('#drops img');
    $img.attr('src', d.meta.img);
    $img.attr('mid', 0);
    $('#img-info').val( `NO MID, ${$img[0].naturalWidth} x ${$img[0].naturalHeight}`);
    DropLabel.onResize();
   // $frm.find('[name=title]').val(d.meta.title);
    }

   var ileft = 26; // KLUDGE assumes img width 685px TODO imgPos.left; //game.img[1];
   var itop = 10; // this is drops hard coded padding-top
   d.labels.forEach((word) => {
    word.eid = 0;
    word.vocab = `<i class="error">${word.eng}</i>`;
    drops.push(new DropLabel(word, parseInt(word.x)+ ileft, parseInt(word.y) + itop));
    });
   });
  });
 /** end of show datasets old way **/

 reset(); // each time we edit a new set
 DropLabel.init(); // only do once
 });
</script>
</body></html>
