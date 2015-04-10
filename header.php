<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
	    <meta name="apple-mobile-web-app-capable" content="yes" />
	    <meta name="apple-touch-fullscreen" content="yes" />
	    <meta name="apple-mobile-web-app-title" content="Облпотребсоюз">
	    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
	    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />



	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate.css/animate.min.css" />
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/simple-line-icons/simple-line-icons.css" />
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fakeloader/fakeLoader.css" />
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/root.css" />
<!-- 	    <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/root.less" /> -->

	    <noscript>
	        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skel.css" />
	        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-xlarge.css" />
	    </noscript>


		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	    <script src="<?php echo get_template_directory_uri(); ?>/libs/modernizr/modernizr.js"></script>
	    <script src="<?php echo get_template_directory_uri(); ?>/libs/less.js/dist/less.min.js"></script>

	    <!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script><![endif]-->
	</head>
	<body <?php body_class(); ?>>
	<div class="fakeLoader" id="fakeLoader"></div>

	<header id="header" class="skel-layers-fixed">
	    <nav id="nav">
	    
<?php wp_nav_menu( array( 'container' => '' ) ); ?>

	    </nav>
	</header>

	<!-- /header -->
