<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta property="og:image" content="<?php the_field('fb_image', 49); ?>"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:description" content="<?php the_field('fb_description', 49); ?>" />
		<meta property="og:url" content="http://liarsliarsliars.com/wp/" />
		<link rel="origin" href="http://liarsliarsliars.com/wp/" />

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="http://liarsliarsliars.com/favicon.ico" rel="shortcut icon">
        <!--link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php the_field('fb_description', 49); ?>">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" type="text/css">


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>



	</head>
	<body <?php body_class(); ?>>

	<!-- header -->
	<header id="header">

		<!-- nav -->
		<nav class="nav" role="navigation">
			<div class="menu">
				<ul>
					<li><h1 id="site-title"><a href="<?php echo home_url(); ?>">LIARS</a></h1></li>
					<li><a id="tourbtn">TOUR</a></li>
					<li><a href="<?php bloginfo('url'); ?>/discography">DISCOG</a></li>
					<li><a href="<?php bloginfo('url'); ?>/video">VIDEO</a></li>
					<li><a href="https://www.musicglue.com/liarsliarsliars" target="_blank">MUSIC</a></li>
          <li><a href="https://liars.backstreetmerch.com/" target="_blank">MERCH</a></li>
          <li><a href="<?php bloginfo('url'); ?>/contact">CONTACT</a></li>
					<span id="navsoc">
					<li><a href="https://www.facebook.com/LiarsOfficial" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook.png" /></a></li>
					<li><a href="https://twitter.com/LiarsOfficial" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social/twitter.png" /></a></li>
					<li><a href="http://instagram.com/liarsliarsliars" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social/instagram.png" /></a></li>
					<li><a href="http://www.youtube.com/user/liarsliarsliars" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social/youtube.png" /></a></li>
					<li><a href="http://amateurgore.tumblr.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social/tumblr.png" /></a></li>
					<li><a href="https://soundcloud.com/liarsliarsliars" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social/soundcloud.png" /></a></li>
					<li><a href="https://play.spotify.com/artist/2z78AlkdwE2Ghj9EB50M6z" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social/spotify.png" /></a></li>
					</span>
				</ul>
			</div>
		</nav>
		<!-- /nav -->

	</header>
	<!-- /header -->

	<!-- tour -->
	<div class="tour">
		<div class="page-title"><h1>LIARS Tour Schedule</h1></div>
		<div id="tourclose">&#10005;</div>
		<script type='text/javascript' src='https://www.bandsintown.com/javascripts/bit_widget.js'></script>
		<a href="https://www.bandsintown.com/Liars" class="bit-widget-initializer smalltour" data-artist="Liars" data-prefix="fbjs" data-notify-me="false" data-share-links="false" data-facebook-comments="false" data-text-color="#111111" data-link-color="#111111" data-bg-color="#fdfdfd" data-force-narrow-layout="true" >Bandsintown</a>
		<a href="https://www.bandsintown.com/Liars" class="bit-widget-initializer bigtour" data-artist="Liars" data-prefix="fbjs" data-notify-me="false" data-share-links="false" data-facebook-comments="false" data-text-color="#111111" data-link-color="#111111" data-bg-color="#fdfdfd" >Bandsintown</a>
	</div>
	<!-- /tour -->
