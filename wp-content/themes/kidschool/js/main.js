(function($){

    "use strict";

	// Header Area start

    $(window).on('scroll',function() {    

     var scroll = $(window).scrollTop();

     if (scroll < 50) {

      $(".header-sticky").removeClass("sticky");

     }else{

      $(".header-sticky").addClass("sticky");

     }

    }); 
	  



	if ( $('body').hasClass('logged-in') ) {

		var top_offset = $('.header-area').height() + 32;

	} else {

		var top_offset = $('.header-area').height() - 0;

	}



	$('.primary-nav-one-page nav').onePageNav({

	     scrollOffset: top_offset,

		 scrollSpeed: 750,

		 easing: 'swing',

		 currentClass: 'active',

	});



	$('body').scrollspy({target: ".primary-nav-wrap nav"});

	$(".primary-nav-one-page nav ul li:first-child").addClass("active"); 



	$('.primary-nav-wrap > nav > ul > li').slice(-2).addClass('last-elements');

	

    /*-- Mobile Menu --*/



    $('.header-style-1 .primary-nav-wrap nav,.header-style-2 .primary-nav-wrap nav,.header_style_3 .header-menu-wrap.logo-left nav').meanmenu({

        meanScreenWidth: php_vars.key_1,

        meanMenuContainer: '.mobile-menu',

    });





	/*========================================*/

	/*  scrollUp

	/*========================================*/

    $.scrollUp({

        scrollText: '<i class="fa fa-angle-up"></i>',

        easingType: 'linear',

        scrollSpeed: 900,

        animation: 'fade'

    });



    //WOW

	new WOW().init();





/*--------------------------

    Portfolio Isotope

---------------------------- */

    $('.grid').imagesLoaded( function() {



        // filter items on button click

        $('.portfolio-menu').on( 'click', 'button', function() {

          var filterValue = $(this).attr('data-filter');

          $grid.isotope({ filter: filterValue });

        });	



        // init Isotope

        var $grid = $('.grid').isotope({

          itemSelector: '.grid-item',

          percentPosition: true,

          masonry: {

            // use outer width of grid-sizer for columnWidth

            columnWidth: '.grid-item',

          }

        });

    });

    

    $('.portfolio-menu button').on('click', function(event) {

        $(this).siblings('.active').removeClass('active');

        $(this).addClass('active');

        event.preventDefault();

    });





    // Popup on gallery portfolio

     $('.img-poppu').magnificPopup({

        type: 'image',

        gallery:{

            enabled:true

        }

    });



     /*------------------------------------

    Testimonial Carousel

------------------------------------- */
if($('.testimonial-owl').length){
    $('.testimonial-owl').owlCarousel({

        loop:true,

        autoPlay: false, 

        smartSpeed: 2000,

        center:true,

        fluidSpeed: true,

        items : 1,

        responsiveClass:true,

        nav:true,

        navText: ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],

        pagination:true,

        responsive:{

            0:{

                items:1

            },

            480:{

                items:1

            },

            768:{

                items:1

            }, 

            992:{

                items:1

            }, 

            1200:{

                items:1

            }

        }       

    });
}
    

    /*Owl slider*/
if($('.kid-owl-slider').length){
    $(".kid-owl-slider").owlCarousel({

        autoPlay: 8000, 

        items : 1,

        slideSpeed:500,

        pagination:true,

        navigation:false,     

        loop:true,

        mouseDrag : true,

        singleItem:true,

        transitionStyle : "fade",

        addClassActive : true,      

        navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],

    });

	}

    /*------------------------------------

        Teacher Carousel

    ------------------------------------- */
if($('.teacher-owl').length){
    $('.teacher-owl').owlCarousel({

        loop:true,

        autoPlay: false, 

        smartSpeed: 2000,

        items : teacher_owl_data.default_carousel_item,

        responsiveClass:true,

        pagination:false,

        dots:false,

        nav:true,

        navText: ["<i class='icofont icofont-long-arrow-left'></i>","<i class='icofont icofont-long-arrow-right'></i>"],

        responsive:{

            0:{

                items:teacher_owl_data.small_mobile_item

            },

            480:{

                items:teacher_owl_data.large_mobile_item

            },

            768:{

                items:teacher_owl_data.tablet_item

            }, 

            992:{

                items:teacher_owl_data.normal_desktop_item

            }, 

            1200:{

                items:teacher_owl_data.medium_desktop_item

            }

        }       

    });

}





    /*------------------------------------

        Event Carousel

    ------------------------------------- */

	
if($('.event-owl').length){
    $('.event-owl').owlCarousel({

        loop:true,

        autoPlay: false, 

        smartSpeed: 2000,

        fluidSpeed: true,

        items : event_owl_data.default_carousel_item,

        responsiveClass:true,

        nav:true,

        navText: ["<i class='icofont icofont-long-arrow-left'></i>","<i class='icofont icofont-long-arrow-right'></i>"],

        pagination:true,

        dots:false,

        responsive:{

            0:{

                items:event_owl_data.small_mobile_item

            },

            480:{

                items:event_owl_data.large_mobile_item

            },

            768:{

                items:event_owl_data.tablet_item

            }, 

            992:{

                items:event_owl_data.normal_desktop_item

            }, 

            1200:{

                items:event_owl_data.medium_desktop_item

            }

        }       

    });  
}
 var loginbtn = $("a[title='login-btn']");
	loginbtn.on('click', function(){
		$("#loginmodal").modal();
		return false;
	}); 
})(jQuery);

