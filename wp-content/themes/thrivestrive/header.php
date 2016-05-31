<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="icon" type="image/png" href="https://s3-us-west-2.amazonaws.com/thrivestrive-master/wp-content/uploads/2016/05/31050450/favicon.png" data-pin-nopin="true">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<?php wp_head(); ?>
		<script src="https://use.typekit.net/hbz7aio.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<script src="https://use.fontawesome.com/d0cd269dfc.js"></script>
	</head>
	<body>
		<script
		    type="text/javascript"
		    async defer
		    src="//assets.pinterest.com/js/pinit.js"
		></script>
		<div class="title-bar" data-responsive-toggle="thrive-menu" data-hide-for="large">
			<button class="menu-icon" type="button" data-toggle></button>
			<div class="title-bar-title">Thrive/Strive</div>
		</div>
		<div class="top-bar" id="thrive-menu">
		  	<div class="top-bar-left">
		    	<ul class="vertical large-horizontal menu" data-responsive-menu="large-dropdown">
			      	<li class="menu-text hide-for-small-only hide-for-medium-only"><a href="/">Thrive/Strive</a></li>
			      	<li><a href="/start">Start Here</a></li>
			      	<li><a href="/library">Library</a></li>
			      	<li><a href="/about">About</a></li>
			      	<li><a href="/resources">Resources</a></li>
		    	</ul>
		 	 </div>
		 	<div class="top-bar-right">
		 		<ul class="menu">
		 			<li>
				 		<form role="search" method="get" id="searchform" class="searchform" action="/">
				 			<div class="input-group">
				 			  	<input class="input-group-field" type="text" name="s" id="s">
				 			  	<div class="input-group-button">
				 			    	<input type="submit" class="button" value="Search">
				 			  	</div>
				 			</div>
				 		</form>
				 	</li>
				</ul>
		 	</div>
		</div>	