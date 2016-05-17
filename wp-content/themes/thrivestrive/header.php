<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<?php wp_head(); ?>
		<script src="https://use.typekit.net/hbz7aio.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
	</head>
	<body>
		<div class="top-bar">
		  	<div class="top-bar-left">
		    	<ul class="dropdown menu" data-dropdown-menu>
			      	<li class="menu-text"><a href="/">Thrive/Strive</a></li>
			      	<li><a href="/start">Start Here</a></li>
			      	<li><a href="/resources">Resources</a></li>
		    	</ul>
		 	 </div>
		</div>	