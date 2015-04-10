<?php /* Template Name: Шаблон обычной страницы */ get_header(); ?>

<!-- Main -->
<div id="main" class="container">

    <!-- Content -->
    <div class="content box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-book-open"></i> <?php the_title(); ?></h2>
        <? the_content(); ?>
    </div>

</div> <!-- Main -->

<div class="container sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
