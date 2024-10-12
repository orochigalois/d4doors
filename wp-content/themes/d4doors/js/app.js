import '../scss/app.scss';

// $(function () {
//     jQuery('.hero_section .slider-class').slick({
//         autoplay: true,
//         dots: false,
//         speed: 300,
//         fade: false,
//         arrows: false,
//     });
//     jQuery('.slider_banner_section .slider-class').slick({
//         autoplay: true,
//         dots: false,
//         speed: 100,
//         fade: false,
//         arrows: false,
//         slidesToShow: 1,
//         centerMode: true,
//         centerPadding: '140px',
//         responsive: [{
//             breakpoint: 991,
//             settings: {
//                 centerMode: false,
//                 centerPadding: '0',
//             }
//         }]
//     });

//     jQuery('.brand_slider_section .slider-class').slick({
//         autoplay: true,
//         dots: false,
//         speed: 300,
//         fade: false,
//         arrows: true,
//         responsive: [{
//             breakpoint: 991,
//             settings: "unslick"
//         }]
//     });


//     jQuery('.block_1_section .slider-class').slick({
//         autoplay: true,
//         dots: false,
//         speed: 300,
//         fade: true,
//         arrows: true,
//     });

//     $('.learn__more,.scrolldown img').click(function (event) {
//         scrollDown();
//         event.preventDefault();
//     });

//     function scrollDown() {
//         var vheight = $(window).height();
//         $('html, body').animate({
//             scrollTop: (Math.floor($(window).scrollTop() / vheight) + 1) * vheight
//         }, 1000);
//     };

//     $('.hamburger').on('click', function () {
//         // $('.main__menu').show();
//         $('.main__menu').addClass("active");
//         $('body').addClass("menu__open");
//     });
//     $('.menu__close').on('click', function () {
//         $('.main__menu').removeClass("active");
//         $('body').removeClass("menu__open");
//         // $('.main__menu').hide();
//     });
//     $('.menu-item-has-children').on('click', function () {
//         $(this).find(".sub-menu").toggle();
//     });
//     $('#menu-item-55').on('click', function (event) {
//         $('.main__menu').removeClass("active");
//         $('body').removeClass("menu__open");

//         event.preventDefault();
//         $('html, body').animate({
//             scrollTop: $(".form_section").offset().top
//         }, 1000);
//     });


//     initAnchorScroll();
// });
// /**
//  * Smooth anchor scrolling
//  */
// function initAnchorScroll() {
//     $('a[href*="#"]:not([data-toggle])').click(function (event) {
//         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//             var target = $(this.hash);
//             target = target.length ? target : $('[name="' + this.hash.slice(1) + '"]');
//             if (target.length && !target.parents('.woocommerce-tabs').length) {
//                 event.preventDefault();
//                 $('html, body').animate({
//                     scrollTop: target.offset().top
//                 }, 1000);
//             }
//         }
//     });
// }