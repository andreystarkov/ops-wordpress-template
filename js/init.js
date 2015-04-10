/* skel-baseline v2.0.3 | (c) n33 | getskel.com | MIT licensed */

(function($) {

    function createSliderNavigation(obj){
        var box = $(obj);
        var count = $('.item', obj).length;
        for(var i = 0; i < count; i++){
            $('.carousel-indicators', box).append('<li data-target="'+obj+'" data-slide-to="'+i+'"></li>');
        }
        $(box).append('<div class="left carousel-control carousel-left" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></div><div class="right carousel-control carousel-right" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></div>');
    }

    function animate(element_ID, animation) {

        $(element_ID).css({'display': 'block'}).addClass(animation);
        var wait = window.setTimeout( function(){
            $(element_ID).removeClass(animation)}, 1000
        );
    }

    function addAnimation(obj, animation){
    	$(obj).each(function(i){
    		i++;
    		$(this).addClass('wow '+animation);
    		$(this).attr({"data-wow-duration": "1s", "data-wow-delay": "0."+i+"s"});
    	});
    }

	$(function() {
		$('#menu-main-menu').append('<li><a href="#slider" class="btn-up"><i class="icon-arrow-up"></i></a>');

		if($(window).width() < 1100){
		$('#slider-header').css({height: $(window).height()});
		}
		addAnimation('.box-features section', 'fadeInUp');
		addAnimation('.news-item', 'fadeInUp');

		wow = new WOW({
		  boxClass:'wow', animateClass: 'animated', offset: 0, mobile: false, live: true
		});

		wow.init();

		$('body').flowtype({minFont: 12, maxFont: 16, maximum: 1200});

		var waypoint = new Waypoint({
		  element: $('#main'),
		  handler: function(direction) {
		    if(direction == "down"){
		    	$('#header').addClass('faded');
		    } else {
		    	$('#header').removeClass('faded');
		    }
		  }
		});

		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
			    $('html,body').animate({
			      scrollTop: target.offset().top
			    }, 1000);
			    return false;
			  }
			}
		});


		$('.carousel-caption').each(function(){
			$(this).addClass('animated');
		});

		$('.box-news').each(function(){
			$('.image', this).append('<i class="icon-magnifier-add"></i><div class="overlay"></div>');
		});
		$('.carousel').carousel({ interval: 15000, pause: 'hover' });

		createSliderNavigation('#slider-header');

	    $('.carousel-left').click(function(){
	        $(this).parent().carousel('prev');
	    });
	    $('.carousel-right').click(function(){
	        $(this).parent().carousel('next');
	    });

        window.setTimeout( function(){
          //  $(".carousel-caption").removeClass('fadeInUp').attr({"data-wow-duration": "0.9s", "data-wow-delay": "0.2s"});
        }, 2000);

		$('#slider-header').on('slide.bs.carousel', function () {
		  	$('.carousel-caption').fadeOut();
		});

		$('#slider-header').on('slid.bs.carousel', function () {
			 animate(".carousel-caption", 'rotateInUpLeft');
		});

		var	$window = $(window),
			$body = $('body');

			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

	});

})(jQuery);