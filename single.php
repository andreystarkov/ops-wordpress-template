<?php /* Template Name: Шаблон обычной страницы */ get_header(); ?>

<section id="slider" class="header-top" style="height:550px;">

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
		    <? endwhile; endif; wp_reset_query();
            ?>

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

<!-- Main -->
<div id="main" class="container">

    <!-- Content -->
    <div class="content box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-book-open"></i> <?php the_title(); ?></h2>
        <? the_content(); ?>
    </div>
     <hr class="major" />

    <!-- News -->
    <div class="box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-bulb"></i> Другие новости</h2>
        <div class="row box-news">
            <?php getNews(); ?>
        </div>
    </div>
</div> <!-- Main -->

<div class="container sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
