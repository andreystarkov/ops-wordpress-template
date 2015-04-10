<?php /* Template Name: Main Page Template */ get_header(); ?>

<style>
    #slider-header { max-height: 100%; }
</style>

<!-- Main -->
<div id="main" class="container">

    <div class="row box-features">
        <section class="2u 12u$(small)">
            <i class="icon-basket"></i>
            <span><b>162</b> розничных торговых предприятий</span>
        </section>
        <section class="2u 12u$(small)">
            <i class="icon-briefcase"></i>
            <span><b>34</b> общества с ограниченной ответственностью</span>
        </section>
        <section class="2u 12u$(small)">
            <i class="icon-settings"></i>
            <span><b>11</b> производственных предприятий</span>
        </section>
        <section class="2u 12u$(small)">
            <i class="icon-cup"></i>
            <span><b>25</b> предприятий общественного питания</span>
        </section>
        <section class="2u 12u$(small)">
            <i class="icon-users"></i>
            <span><b>1232</b> работающих в системе облпотребсоюза</span>
        </section>
        <section class="2u 12u$(small)">
            <i class="icon-handbag"></i>
            <span><b>22</b> потребительских общества</span>
        </section>
    </div>
     <hr class="major" />

    <!-- News -->
    <div class="box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-bulb"></i> Новости и обьявления</h2>
        <div class="row box-news">
            <?php getNews(); ?>
        </div>
    </div>


    <hr class="major" />

    <!-- Content -->
    <div class="content box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-book-open"></i> <?php the_title(); ?></h2>
        <? the_content(); ?>
    </div>

    <hr class="major" />


</div> <!-- Main -->

<div class="container sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
