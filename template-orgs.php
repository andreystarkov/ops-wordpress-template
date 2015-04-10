<?php /* Template Name: Предприятия */ get_header(); ?>

<!-- Main -->
<div id="main" class="container">

    <!-- Content -->
    <div class="content box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-book-open"></i> <?php the_title(); ?></h2>
        <?
        function getChildPages(){
            global $post;
            if ( is_page() && $post->post_parent )
                $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
            else
                $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
            if ( $childpages ) {
                $string = '<ul class="wp-list-pages">' . $childpages . '</ul>';
            }
            return $string;
        }

        echo getChildPages();

        the_content(); ?>
    </div>

</div> <!-- Main -->

<div class="container sidebar">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
