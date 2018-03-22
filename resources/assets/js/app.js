
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('jquery-touchswipe');

require('owl.carousel');


window.Vue = require('vue');
window.WOW = require('wow.js');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
   // el: '#app'
});


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

$(function() {
    let $carusel = $("#carousel");

    $carusel.swipe( {

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

});



(function($) {
   // "use strict";



    //* Hide Loading Box (Preloader)
    function preloader(){
        if ( $('.preloader').length ){
            $(window).on('load', function() {
                $('.preloader').delay(500).fadeOut('slow');
                $('body').delay(500).css({'overflow':'visible'});
            });
        }
    };

    /*Function Calls*/

    preloader ();

})(jQuery);

