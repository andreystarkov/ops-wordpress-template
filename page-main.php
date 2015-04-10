<?php get_header(); ?>

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

<!--     <hr class="major" />

    <div class="box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-bulb"></i> Новости и обьявления</h2>
        <div class="row box-news">
            <a href="#" class="news-item 3u 12u$(small)">
						<span class="image fit">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/thumb1.jpg" alt="" />
						</span>
                <b>Итоги работы кооператоров за отчетный год</b>
                <p>5 марта 2015 года на базе Оренбургского потребительского общества состоялось Двадцать восьмое (90-е) общее отчетное собрание представителей потребительских обществ.</p>
            </a>
            <a href="#" class="news-item 3u 12u$(small)">
                <span class="image fit"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/thumb2.jpg" alt="" /></span>
                <b>Сезон ярмарок стартовал</b>
                <p>Численность обслуживаемого населения составляет свыше 300 тысяч человек, в том числе сельского 154 тысячи человек. Потребительская кооперация является крупным работодателем на селе: в ней работают более двух тысяч человек.</p>
            </a>
            <a href="#" class="news-item 3u 12u$(small)">
                <span class="image fit"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/thumb3.jpg" alt="" /></span>
                <b>Cостоялся областной конкурс продавцов</b>
                <p>Правление Облпотребсоюза и Обком профсоюза работников потребкооперации провели второй тур областного конкурса профессионального,  который проходил 23-24 августа, приняли кооперативные организации Облпотребсоюза.</p>
            </a>
            <a href="#" class="news-item 3u 12u$(small)">
                <span class="image fit"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/thumb4.jpg" alt="" /></span>
                <b>Инструкция по исправлению карточек задвоенных контрагентов</b>
                <p>В условиях рыночной экономики потребкооперация призвана стимулировать деловую активность сельских жителей, защищать их права и интересы, способствовать повышению благосостояния селян.</p>
            </a>
        </div>
    </div> -->
    <hr class="major" />

    <!-- Content -->
    <div class="content box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-book-open"></i> <?php the_title(); ?></h2>

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

        <?php else : ?>

        <?php endif; // end have_posts() check ?>

<!--         <h2 class="section-title"><i class="icn lite-round icon-book-open"></i> История Оренбургского Облпотребсоюза</h2>
        <h2 id="content"></h2>
        <p>Оренбургский областной союз потребительских обществ создан в январе 1935 года и в него вошло 383 потребительских обществ.  В начале 30-х годов потребительская кооперация занимал в общем товарообороте области - 84%, государственная торговля около 9%, остальное приходилось на долю частной торговли, которая в последствие была вытеснена.</p>

        <p>Оренбургские кооператоры уделяли большое внимание культурно-просветительной работе среди широких масс трудового народа. На первых порах разъясняли цели и задачи кооперации на страницах периодической печати путём проведения бесед, лекций на кооперативные темы.</p>

        <p>Проводя эту работу, кооператоры губернии стремились привлечь молодежь и женщин в работу потребительской кооперации. Деятельность направлялась на  создание библиотек, детских площадок, яслей, проведение курсов, лекций, спектаклей, вечеров отдыха, изб-читален, распространение газет, ликвидацию неграмотности среди пайщиков, подборку литературы по кооперативным вопросам, создание в магазинах уголков матери и младенчества, содержание коек в родильных домах, больницах для пайщиков, открытие акушерских, фельдшерских пунктов и т.д.</p>

        <p>Широко использовалось для этих целей радио и кино. По линии потребительской кооперации в селах Оренбуржья было оборудовано 35 радиоустановок, в том числе совместно с сельсоветами – 10, около 500 радиоточек.  До 1930г. вся сеть кинопередвижек и нескольких стационаров в губернии принадлежали потребительской кооперации.</p>
  -->   </div>

    <hr class="major" />

<!--     <div class="box-section wow fadeInUp" data-wow-duration="0.8s">
        <h2 class="section-title"><i class="icn lite-round icon-bubble"></i> Задайте интересующий вас вопрос</h2>
        <div class="box-form row">
            <div class="12u">
                <form method="post" action="#">
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Имя" />
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="" placeholder="Обратная связь" />
                        </div>
                        <div class="12u$">
                            <textarea name="message" id="message" placeholder="Ваше сообщение" rows="6"></textarea>
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><a class="button-action button"><i class="fa fa-comment-o"></i> Отправить</a></li>
                                <li><input type="reset" value="Очистить" class="alt" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

</div> <!-- Main -->
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
