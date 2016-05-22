<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/22131930/avatar.png" data-pin-nopin="true">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<?php wp_head(); ?>
		<script src="https://use.typekit.net/hbz7aio.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	</head>
	<body>
		<div class="title-bar" data-responsive-toggle="thrive-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">Thrive/Strive</div>
		</div>
		<div class="top-bar" id="thrive-menu">
		  	<div class="top-bar-left">
		    	<ul class="vertical medium-horizontal menu" data-responsive-menu="medium-dropdown">
		    		<li class="logo hide-for-small-only"><a href="/"><img data-pin-nopin="true" src="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/22132355/logo-white-square.png"></a></li>
			      	<li class="menu-text hide-for-small-only"><a href="/">Thrive/Strive</a></li>
			      	<li><a href="/start">Start Here</a></li>
			      	<li><a href="/articles">Articles</a></li>
			      	<li><a href="/about">About</a></li>
			      	<li><a href="/resources">Resources</a></li>
		    	</ul>
		 	 </div>
		</div>	