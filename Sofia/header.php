<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">

<head>


<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
<meta name="author" content="GNANGANI" />
  
<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />

<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,300italic' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css" media="screen"/>

	<?php $plxShow->templateCss() ?>
	<?php $plxShow->pluginsCss() ?>

<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
     

<script src="<?php $plxShow->template(); ?>/js/snap.svg-min.js"></script>

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>	

<body>
   
    <!-- header et navigation -->
    
    <nav id="menu" class="menu">
        <button class="menu__handle"><span>Menu</span></button>
        <div class="menu__inner">
            <ul>
                <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="#static_status"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>

                <?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
            </ul>
            <span>Propulsé par <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a></span>
            <p>
              <a href="#"><i class="flaticon-circle6"></i></a>
              <a href="#"><i class="flaticon-github3"></i> </a>
              <a href="#"><i class="flaticon-google7"></i></a>
              <a href="#"><i class="flaticon-twitter4"></i> </a>
            </p>
            
        </div>
        <div class="morph-shape" data-morph-open="M300-10c0,0,295,164,295,410c0,232-295,410-295,410" data-morph-close="M300-10C300-10,5,154,5,400c0,232,295,410,295,410">
            <svg width="100%" height="100%" viewBox="0 0 600 800" preserveAspectRatio="none">
                <path fill="none" d="M300-10c0,0,0,164,0,410c0,232,0,410,0,410"/>
            </svg>
        </div>
    </nav>
    
    <div class="wrap__body" id="top">
    
    <header class="header">
        <div class="wrap">
         
          <!--Title et subTitle -->
           <div class="bloc-12">
                <h1><?php $plxShow->mainTitle('link'); ?></h1>
                <h3 class="subtitle"><?php $plxShow->subTitle(); ?></h3>
           </div>

       </div>
    </header>
    
    <div class="wrap">