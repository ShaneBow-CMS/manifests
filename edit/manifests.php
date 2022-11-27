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
  <title>Manifests &rsaquo; ThaiDrills.com</title>
 </head>
 <!--<body>Spoof body for bad isp's</body>-->
 <body class="no-auto-snd">
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
Manifests      <?php endif; ?>
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

<!--
Chris ??

Domo
Veritone - AI

Triggers
1) Infinite money printing
- march 23 2020 federal reserve emergency meeting - QE infinity
- near zero interest rates

2) Domestic & Global Investors will have no choice but to buy stocks
 T.I.N.A. Market (There is no alternative)

3) The Digital Revolution


Buy QQQ etf

what are the 3 tiny tech disruptor stocks?
IoT stocks there is one well under $10 that will be at the forefront revenue up 71% from a year ago and stock up 30% in 5 months
Semiconductors - up 62% in last two months
Smart car technology - us atomotive software is rising fast
 - compmany almost every major automotive company will rely on
  under $15 nearly doubled since august - will 10x in months to come

company partnered with amonzon to put alexa tech into cars

Jinko Solar
Iridium Communications
Advance Micro Devices
Krikland Lake Gold
-->

<style>
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

#avatar {cursor:pointer}
#man-list img,
table.dict img,
#cards table img {max-height:30px;max-width:60px}
li[deck] {cursor:pointer; color:blue}
.drop-target {border:1px solid blue;padding:px;background:yellow;border-radius:px}
</style>

<div class="row">

 <div class="col-sm-6 col-md-7">
  <div id="man-list"></div>
 </div>

 <div class="col-sm-6 col-md-5">
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
<div id="tid-lookup"></div>

    <h4>Select Deck</h4>
    <div id="man-summaries"></div>
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
<script>
$(function(){
 // This class is required for a reason which SHOULD GO AWAY SOON:
 //  we are still checking old-style images (/pix/k/${TID}.png)
 class TidLookup extends TED.Lookup{
  constructor(sel, options) {
   super(sel, options);
   this.$results.prepend(`
     <label>old style image</label>
     <div class="form-group center" style="height:100px; border:1px solid #ccc;border-radius: 4px">
      <img class="old-way" src="/uploads/0.jpg" style="max-height:100px" />
     </div>`);
   }

  isValid(val) {
   // get old image for tid from server
   // TEMPORARY to help migrate images into media cms
   this.$results.find('img.old-way').attr('src', '/pix/k/' + val + '.png');
   return true;
   }
  }

 new TidLookup('#tid-lookup', { // change to TED.Lookup when fix 2 problems above
  url: '/api/ted/tid/',
  name: 'tid',
  placeholder: 'tid lookup...',
  });
 });
</script>
<script src="/assets/js/cms.js"></script>
<script src="/assets/apps/potjanaanugrom.js"></script>
<script>
$(function(){
 class ManiTable extends UBOW.PagedList {
  constructor(el, opts) {
   opts.url = '/api/manifest/summaries/';
   opts.container = `
    <table class="table table-striped table-bordered table-hover man-list">
     <thead><tr><th>id</th><th>ord</th><th>otype</th><th>title</th><th>owner</th><th>img</th><th></th></tr></thead>
     <tbody></tbody>
    </table>`;
   super(el, opts);
   const my = this;
   my.$list = my.$list.find('tbody');
   opts.onClick && my.$list.on('click', 'tr', function(e){
    e.preventDefault();
    const id = $(this).attr('mani');
    UBOW.flashSuccess('Clicked manifest: id = ' + id);
    opts.onClick(id);
    });
   }

  markup(m) {
   const my = this;
   return `<tr mani="${m.id}">
    <td>${m.id}</td>
    <td>${m.ord}</td>
    <td>${m.otype}</td>
    <td>${m.title}</td>
    <td>${m.owner}</td>
    <td><img src="${UBOW.imgSrc(m.mid,m.mtype)}" /></td>
    <td class="delete"></td></tr>`;
   }
  }

 const maniTbl = new ManiTable('#man-list', {
  per_page: 20,
  extra: {otype: 0, admin:1, order: 'm.ord,m.otype'},
  col_class: "",
  onClick: (idManifest) => {
   console.log('loading manifest:', idManifest);
   _manifest.load(idManifest);
   },
 // uid: 0,
  });

 const _manifest = new UBOW.ManifestEditor({
  urlLoad: '/api/deck/load',
  otypes: td.OTYPE,
  isValid: () => true,
  getExtra: () => {},
//  onReset: reset, // create new manifest
  onLoaded: (mani) => {
   },
  });

 new UBOW.ManifestSummaries('#man-summaries', {
  per_page: 24,
  extra: {otype: td.OTYPE.DECK.value, admin:1},
  });

 });
</script>
</body></html>
