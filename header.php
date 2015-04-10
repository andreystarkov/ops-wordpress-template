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
	    <!-- 	   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/root.css" />-->
 <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/root.less" /> 

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

	<section id="slider" class="header-top">

	    <div class="logo-wrapper">
	        <div class="logo">
	            <div class="logo-image wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1s">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
	            </div>
	            <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s"><?php echo get_bloginfo('name'); ?></h2>
	        </div>
	    </div>
	    <div id="slider-header" class="carousel slide" data-ride="carousel">

	        <ol class="carousel-indicators"></ol>

	        <div class="carousel-inner" role="listbox">

	            <?php
	            $idObj = get_category_by_slug('s_slaider');
	            $id = $idObj->term_id;
	            ?>

	            <?php if ( have_posts() ) : query_posts('cat=' . $id);
	                while (have_posts()) : the_post(); ?>

	                    <div class="item<?php
	                    $tags = wp_get_post_tags($post->ID);
	                    if ($tags) {
	                        foreach($tags as $tag) {
	                            echo ' ' . $tag->name;
	                        }
	                    }
	                    ?>">
	                        <div class="dark-overlay"></div>
	                        <img src="<?php
	                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'Full Size' );
	                        echo $large_image_url[0];
	                        ?>" alt="<?php the_title(); ?>" />
	                        <div class="carousel-caption">
	                            <div class="caption">
	                                <b><?php the_title(); ?></b>
	                                <?php the_content(); ?>
	                            </div>
	                        </div>

	                    </div>

	                <? endwhile; endif; wp_reset_query(); ?>

	        </div>

	        <a class="left carousel-control" href="#slider-header" role="button" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	            <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#slider-header" role="button" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	            <span class="sr-only">Next</span>
	        </a>
	    </div>
	</section>
	<!-- /header -->
