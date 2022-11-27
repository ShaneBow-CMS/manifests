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
  <title>Database Seeders &rsaquo; ThaiDrills.com</title>
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
Database Seeders      <?php endif; ?>
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
.seeders .panel-body { height:180px;overflow-y:scroll}
.seeders .panel-footer {padding: 5px 15px;height:32px}
.seeders .panel-footer .btn {float:right;min-width:40px}
.seeders .panel-footer input {float:left;height:22px;width:120px;padding:4px 10px;font-size:12px}
</style>

<div class="row seeders">
 <div class="col-md-4">
  <div class="panel panel-green">
   <div class="panel-heading">Site Tables</div>
   <div class="panel-body">
    <!-- p>Generate the following tables:</p>
    <ul>
     <li>settings &rarr; general site variables</li>
     <li>countries</li>
    </ul -->
    <p>Generate the following db views:</p>
    <ul>
     <li>calendar &rarr; to find calendar events</li>
    </ul>
    <p>Note: This only needs to be done when the configuration is changed by
     the programmer.</p>
   </div>
   <form action="/admin/setting/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Company Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>companies &rarr; advertisers &amp; employers</li>
     <li>users2companies &rarr; link users to companies</li>
     <li>users2products &rarr; link users to brand/product</li>
     <!-- li>biz-types.html &rarr; Company Type Selector</li -->
     <li>addresses &rarr; for companies, customers, users</li>
    </ul>
    <p>Drops then creates the following vues:</p>
    <ul>
     <li>full_addresses &rarr; Company & User Addresses</li>
    </ul>
   </div>
   <form action="/admin/company/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create User Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>

    <ul>
     <li><?= UDB_PREFIX ?>users &rarr; user names, email, phone, and password
       <?php if (UDB_PREFIX): ?>
        from <i style="color: red">users.csv</i> - no prefix
       <?php endif; ?>
     </li>
     <?php if (SITE_ROLES & ROLE_CONTRIBUTOR): ?>
      <li><?= UDB_PREFIX ?>users_profiles &rarr; contributor bios</li>
       <?php if (UDB_PREFIX): ?>
        from <i style="color: red">users_profiles.csv</i> - no prefix
       <?php endif; ?>
     <?php endif; ?>
     <li>countries &rarr; used for user nationality & residence</li>
    </ul>
    <p>Then the <i>vip-users.csv</i> are added to the users table.</p>
   </div>
   <form action="/admin/user/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4 same-height">
  <div class="panel panel-red">
   <div class="panel-heading">Create Email Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>emails &rarr; email templates</li>
    </ul>
    <p>Populated from associated csv files.</p>
   </div>
   <form action="/admin/email/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>

 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Categories Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>cats &rarr; categories</li>
    </ul>
   </div>
   <form action="/cat/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Media Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>media &rarr; media metadata</li>
     <li>media2objs &rarr; map of media to objects</li>
    </ul>
    <p>Net effect is a pristine media database.</p>
   </div>
   <form action="/media/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Tags Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>tags &rarr; topic tags for objects such as blogs</li>
     <li>tags2objs &rarr; map of tags to objects</li>
    </ul>
    <p>Tables are populated with the associated csv data.</p>
   </div>
   <form action="/tag/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Pages Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>pages &rarr; content pages</li>
     <li>page_macros &rarr; edit macros</li>
    </ul>
   </div>
   <form action="/page/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-yellow">
   <div class="panel-heading">Create Manifests Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>manifests &rarr; app meta data</li>
    </ul>
    <p>Tables are populated with the associated csv data.</p>
   </div>
   <form action="/admin/td-work/seed-manifests" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Comments Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>comments &rarr; reader comments for each page</li>
    </ul>
    <p>Net effect is a few dummy comments.</p>
   </div>
   <form action="/admin/comment/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>

 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Advertisements Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>adverts &rarr; the advertisements themselves</li>
     <li>ad_runs &rarr; when, where, how often ads run</li>
     <li>ad_pay &rarr; ad invoice &amp; payment info</li>
    </ul>
    <p>Net effect is to clear all ads from the system.</p>
   </div>
   <form action="/admin/ad/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Shop Cats Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>shop_cats &rarr; product &amp; service categories</li>
     <li>cats_lang &rarr; category text by lang</li>
    </ul>
    <p>Then charges the tables from csv files, if found.</p>
   </div>
   <form action="/admin/shop_cat/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Products Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>products &rarr; product info</li>
     <li>products_lang &rarr; product text by lang</li>
    </ul>
    <p>Net effect is a pristine products database.</p>
   </div>
   <form action="/admin/product/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Services Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>services &rarr; services offered</li>
     <li>providers &rarr; service provider settings</li>
     <li>services2providers &rarr; users who provide each service</li>
    </ul>
    <p>Net effect is a pristine services database.</p>
   </div>
   <form action="/admin/service/seed" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>

 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create TED Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>aud &rarr; audio data</li>
     <li>thai &rarr; coded Thai words</li>
     <li>eng &rarr; English words</li>
     <li>thai2eng &rarr; Thai to English</li>
     <li>kcat &rarr; Kamsap Categories</li>
     <li>kcat2thai &rarr; Thai to Categories</li>
    </ul>
    <p>Net effect is an EMPTY Thai-English database.</p>
   </div>
   <form action="/admin/db/create-tables" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <input name="title" type="hidden" value="Create TED Tables">
    <input name="tbls" type="hidden" value="aud,thai,eng,thai2eng,kcat,kcat2thai">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-red">
   <div class="panel-heading">Create Flash Cards Tables</div>
   <div class="panel-body">
    <p>Drops then creates the following tables:</p>
    <ul>
     <li>flash_decks &rarr; Lists of Names of Decks</li>
     <li>flash_cards &rarr; Individual Cards</li>
    </ul>
    <p>Net effect is a pristine Flash Cards database.</p>
   </div>
   <form action="/admin/db/create-tables" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <input name="title" type="hidden" value="Create Flash Cards Tables">
    <input name="tbls" type="hidden" value="flash_decks,flash_cards">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
 <div class="col-md-4">
  <div class="panel panel-green">
   <div class="panel-heading">Test pack</div>
   <div class="panel-body">
    <p>Packs the following sequence:</p>
    <ul>
     <li>3,202,293,4717,4761,8178,8183,10487</li>
    </ul>
    <p></p>
   </div>
   <form action="/admin/db/test-pack" method="post" class="panel-footer">
    <input name="auth" class="form-control" placeholder="Auth Code">
    <input name="title" type="hidden" value="Test pack">
    <input name="tbls" type="hidden" value="flash_decks,flash_cards">
    <button type="submit" class="btn btn-outline btn-danger btn-xs">OK</button>
   </form>
  </div>
 </div>
</div><!-- /.row -->
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
</body></html>
