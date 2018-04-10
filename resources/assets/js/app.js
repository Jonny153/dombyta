
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

window.Inputmask = require("inputmask/dist/inputmask/inputmask.numeric.extensions");







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

let im = new Inputmask("+7(999)999-99-99");
im.mask($('[name="phone"]'));


require('./formvalidation.js');

function message(text, mode) {

    let color = (mode) ? 'success' : 'danger';
    let message  = '<div class="alert alert-fixed alert-'+color+'"><strong><i class="fa fa-check-circle"></i> '+text+'</strong></div>';
    $("body").append(message);
    setTimeout(function(){
        $('.alert').slideDown('slow');
        setTimeout(function(){
            $('.alert').slideUp('slow').remove();
        }, 4000);
    }, 500);
}

let response = function (event) {
    event.preventDefault();
    let $form = $(event.target);
    let fv = $form.data('formValidation');
    $('.modal').modal('hide');
    $.post($form.attr('action'), $form.serialize(), function(result) {

        if(result.status === 'ok') {
            fv.resetForm();
            $form.trigger('reset');
            message(result.message, true);
        }
        else {

            fv.resetForm();
            message(result.message, false);
        }

        //console.log(result);
    },'json');
};

$(document).ready(function(){
    //Валидация формы обратного звонка
    $('#callForm, #staticCallForm').formValidation({

        fields: {
            'person': {
                validators: {
                    stringLength: {
                        message: 'Имя не должно превышать 50 символов',
                        max: 50
                    }
                }
            },
            'phone': {
                validators: {
                    notEmpty: {
                        message: 'Введите телефон'
                    },
                    regexp: {
                        regexp: /^(\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9})?$/i,
                        message: 'Введите номер телефона'
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {
        response(e);
    });

    //Валидация формы отзывов
    $('#feedbackForm').formValidation({

        fields: {
            'person': {
                validators: {
                    notEmpty: {
                        message: 'Введите имя'
                    },
                    stringLength: {
                        message: 'Имя не должно превышать 50 символов',
                        max: 50
                    }
                }
            },
            'feedback': {
                validators: {
                    notEmpty: {
                        message: 'Введите отзыв'
                    },
                    stringLength: {
                        message: 'Отзыв не должен превышать 500 символов',
                        max: 500
                    }
                }
            },
            'phone': {
                validators: {
                    notEmpty: {
                        message: 'Введите телефон'
                    },
                    regexp: {
                        regexp: /^(\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9})?$/i,
                        message: 'Введите номер телефона'
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {
        response(e);
    });


});

$('.modal').on('hidden.bs.modal', function (e) {
    let $form = $(e.target).find('form');
    let fv = $('#callForm').data('formValidation');
    fv.resetForm();
    $form.trigger('reset');

});