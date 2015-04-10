<?php /* Template Name: Аренда */ get_header(); ?>

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
        <div class="js-masonry row box-news" data-masonry-options='{ "itemSelector": ".news-item" }'>
            <?php getItemsBySlug('rent'); ?>
        </div>
    </div>

</div> <!-- Main -->

<div class="container sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
