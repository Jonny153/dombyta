
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
//require('jquery-touchswipe');
require('jquery-touch-events');

require('owl.carousel');
/*window.zenscroll = require('zenscroll');
zenscroll.setup(1000, 20);*/

window.WOW = require('wow.js');







let wow = new WOW(
    {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);
wow.init();


// swipe карусели

$('#carousel, #carouselFeedback').on('swipe', function(e, touch) {
    console.log(e.target, touch);
    let $carousel = $(e.target),
        direction = touch.direction;
    if (direction === 'left') {
        $carousel.carousel('next');
    }
    if (direction === 'right') {
        $carousel.carousel('prev');
    }
});

/*

$(function() {
    let $carusel = $("#carousel");

    $carusel.swipe({

        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
           // console.log("You swiped " + direction );

            if(direction === 'left') {
                $carusel.carousel('next');
            }
            if(direction === 'right') {
                $carusel.carousel('prev');
            }
        }
    });

    let $carusel2 = $("#carouselFeedback");

    $carusel2.swipe({

        swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
            // console.log("You swiped " + direction );

            if(direction === 'left') {
                $carusel2.carousel('next');
            }
            if(direction === 'right') {
                $carusel2.carousel('prev');
            }
        }
    });

});

*/









let preloader = function(){
    if ( $('.preloader').length ){
        $(window).on('load', function() {
            $('.preloader').delay(500).fadeOut('slow');
            //$('body').delay(500).css({'overflow':'visible'});
        });
    }
};

preloader();






// прячем меню при клике вне его

let $topmenu = $("#navbarHeader");
$(document).on('mouseup', function(e) {
   // console.log(e);

    let link = $('a.nav-link');
    if ((!$topmenu.is(e.target) && $topmenu.has(e.target).length === 0) || link.is(e.target)) {
        $topmenu.collapse('hide');
    }
});
// прячем меню по скроллу

$(document).on('scrollstart', function(){
    $topmenu.collapse('hide');
});



window.SmoothScroll = require('smooth-scroll');

let scrollerOptions = {
    ignore: '[data-noscroll]',
    speed: 800, // Integer. How fast to complete the scroll in milliseconds
    offset: 30, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
    easing: 'easeInOutCubic', // Easing pattern to use

    before: function (anchor, toggle) {}, // Callback to run before scroll
    after: function (anchor, toggle) {

    }
};
window.scroller = new SmoothScroll(
    'a[href*="#"]',
    scrollerOptions
    );

let menuHeight = $('.navbar').outerHeight();
$('#services').on('shown.bs.collapse', '.collapse', menuHeight, function (e) {
    console.log(menuHeight);
    let anchor = document.querySelector($(e.target).data('backlink'));
    scroller.animateScroll(anchor, anchor, { speed: 300, offset:menuHeight });
});
