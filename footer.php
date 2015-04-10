<footer id="footer">
    <div class="container">
        <div class="row double">
            <div class="8u 12u$(medium)">
                <h2>Оренбургский Облпотребсоюз</h2>
                <p>За все годы деятельности потребительская кооперация области сформировалась в широко разветвленную сеть торговых, заготовительных и производственных предприятий, стала самостоятельной уникальной системой, которая осуществляет единый хозяйственный цикл</p>
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

<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

<script>
    $(document).ready(function(){
        $(".fakeLoader").fakeLoader({
            timeToHide:1200,
            bgColor:"#222",
            spinner:"spinner3",
            zIndex:"99999"
        });
    });
</script>

<?php wp_footer(); ?>


		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
