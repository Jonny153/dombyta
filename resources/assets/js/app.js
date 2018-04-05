
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
   console.log(e);
    //let div = $("#navbarHeader");
    let link = $('a.nav-link');
    if ((!$topmenu.is(e.target) && $topmenu.has(e.target).length === 0) || link.is(e.target)) {
        $topmenu.collapse('hide');
    }
});
// прячем меню по свайпу вверх

$topmenu.on('swipeup', function(){
    $topmenu.collapse('hide');
});



window.SmoothScroll = require('smooth-scroll');

window.scroller = new SmoothScroll(
    'a[href*="#"]', {
        // Selectors
        ignore: '[data-noscroll]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)

        // Speed & Easing
        speed: 800, // Integer. How fast to complete the scroll in milliseconds
        offset: 20, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
        easing: 'easeInOutCubic', // Easing pattern to use
        /*customEasing: function (time) {

            // Function. Custom easing pattern
            // If this is set to anything other than null, will override the easing option above

            // return <your formulate with time as a multiplier>

            // Example: easeInOut Quad
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

        },*/

        // Callback API
        before: function (anchor, toggle) {}, // Callback to run before scroll
        after: function (anchor, toggle) {


        } // Callback to run after scroll
    });


$('#services').on('shown.bs.collapse', '.collapse', function (e) {
    console.log($(this));
    //let anchor = $(e.target).attr('aria-labelledby');
    //if (anchor !== undefined) {
       let height = $('#heading1').scrollTop();
       console.log(height);
       scroller.animateScroll($('#heading1'));
    //}
});
