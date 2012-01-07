<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style/css/ie.css" type="text/css" media="screen" /><![endif]-->
	
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_enqueue_script('jquery'); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<!-- wordpress head -->
<?php wp_head(); ?>
<!-- /wordpress head -->
<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/style/js/css3-mediaqueries.js"></script> 
<script typ="text/javascript" src="<?php bloginfo("template_url"); ?>/style/js/mega-container.js"></script>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
	
<body <?php body_class(); ?>>
<div class="container"id="top-div">
	<div class="row">
		<div class="twelvecol last">
			<p><a href="#">Shortcut menu +</a></p>
		</div><!-- end twelvecol -->
	</div><!-- end row-->
</div><!-- end container -->

<div class="container" >
	<div class="row innerbg" id="mega-container">

		<div class="threecol">
		<p>Lägg till lite innehåll här...</p>
		</div><!-- end threecol -->

		<div class="threecol">
		<p>Lägg till lite innehåll här...</p>
		</div><!-- end threecol -->

		<div class="threecol">
		<p>Lägg till lite innehåll här...</p>
		</div><!-- end threecol -->

		<div class="threecol last">
		<p>Lägg till lite innehåll här...</p>
		</div><!-- end threecol -->

	</div><!-- end row -->
</div><!-- end container -->

<div class="container">
	<div class="row">
		
		<div class="fivecol">
		
			<header>
				<hgroup>
					<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
				</hgroup>
			</header>
	
		</div><!-- end fivecol -->
		
		<div class="sevencol last">
		
			<!-- header menu -->
			<nav>
				<ul>
					<?php wp_list_pages('title_li='); ?><!-- Om du vill inkludera endast vissa sidor 'include=1,2,4,10&title_li=' -->
				</ul>
			</nav>
			
		</div><!-- end sevencol-->

	</div><!-- end row-->

</div><!-- End container -->	