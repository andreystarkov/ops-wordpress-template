
<div class="container box-section wow fadeInUp" data-wow-duration="0.8s">
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
    </div>
<footer id="footer">
    <div class="container">
        <div class="row double">
            <div class="8u 12u$(medium)">
                <h2>Наши партнеры</h2>
                <ul class="alt partners">
                    <li><a href="http://www.rus.coop/">Центросоюз Российской Федерации</a></li>
                    <li><a href="http://www.orenburg-gov.ru/">Портал Правительства Оренбургской области</a></li>
                    <li><a href="http://www.ruc.su/">Российский университет кооперации</a></li>
                    <li><a href="http://xn--e1ajmafsw.xn--p1ai/">Оренбургский кооперативный техникум</a></li>
                </ul>
            </div>
            <div class="contacts 4u$ 6u$(medium) 12u$(small)">
                <h3>Контакты</h3>
                <ul class="alt">
                    <li><i class="icn icon-pointer"></i><span>460000, г. Оренбург, ул. Ленинская, 26</span></li>
                    <li><i class="icn icon-call-out"></i><span>+7 3532 770935</span></li>
                    <li><i class="icn icon-envelope"></i><a href="mailto:ops@esoo.ru">ops@esoo.ru</a></p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        &copy; Оренбургский Облпотребсоюз.
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/fakeloader/fakeLoader.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/skel/dist/skel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/skel-layers/dist/skel-layers.min.js"></script>

<script>

(function($) {

    skel.init({
        reset: 'full',
        breakpoints: {
            global: {
                href: '<?php echo get_template_directory_uri(); ?>/css/style.css',
                containers: 1400,
                grid: { gutters: ['2em', 0] }
            },
            xlarge: {
                media: '(max-width: 1680px)',
                href: '<?php echo get_template_directory_uri(); ?>/css/style-xlarge.css',
                containers: 1200
            },
            large: {
                media: '(max-width: 1280px)',
                href: '<?php echo get_template_directory_uri(); ?>/css/style-large.css',
                containers: 960,
                grid: { gutters: ['1.5em', 0] },
                viewport: { scalable: false }
            },
            medium: {
                media: '(max-width: 1024px)',
                href: '<?php echo get_template_directory_uri(); ?>/css/style-medium.css',
                containers: '90%'
            },
            small: {
                media: '(max-width: 736px)',
                href: '<?php echo get_template_directory_uri(); ?>/css/style-small.css',
                containers: '90%',
                grid: { gutters: ['1.25em', 0] }
            },
            xsmall: {
                media: '(max-width: 480px)',
                href: '<?php echo get_template_directory_uri(); ?>/css/style-xsmall.css'
            }
        },
        plugins: {
            layers: {
                config: {
                    mode: 'transform'
                },
                navPanel: {
                    animation: 'pushX',
                    breakpoints: 'medium',
                    clickToHide: true,
                    height: '100%',
                    hidden: true,
                    html: '<div data-action="moveElement" data-args="nav"></div>',
                    orientation: 'vertical',
                    position: 'top-left',
                    side: 'left',
                    width: 250
                },
                navButton: {
                    breakpoints: 'medium',
                    height: '6em',
                    html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span>',
                    position: 'top-left',
                    side: 'top',
                    width: '8em'
                }
            }
        }
    });

})(jQuery);
</script>

<script src="<?php echo get_template_directory_uri(); ?>/libs/wow.js/dist/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/flowtype/flowtype.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/masonry.pkgd.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
<?php wp_footer(); ?>

<script>
    $(document).ready(function(){

/*        var container = document.querySelector('#offers');
        var msnry = new Masonry( container, {
          // options...
          itemSelector: '.news-item'
        });*/
        $(".fakeLoader").fakeLoader({
            timeToHide:1200,
            bgColor:"#222",
            spinner:"spinner3",
            zIndex:"99999"
        });
    });
</script>


	</body>
</html>
