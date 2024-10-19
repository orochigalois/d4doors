import '../scss/app.scss';

$(function () {
    jQuery('.slider_section .slider-class').slick({
        autoplay: true,
        dots: true,
        speed: 300,
        fade: true,
        arrows: false,
    });
    jQuery('.project__slider__section .slider-class').slick({
        autoplay: true,
        dots: true,
        speed: 300,
        fade: true,
        arrows: false,
    });
    jQuery('.project__bottom__slider__section .slider-class').slick({
        autoplay: false,
        dots: false,
        speed: 300,
        fade: false,
        arrows: true,
        infinite: false,
    });
    jQuery('.project__bottom__slider__section .slider-class').on('afterChange', function (event, slick, currentSlide) {
        var totalSlides = slick.slideCount - 1; // Total slides (0-based index)
        if (currentSlide === totalSlides) {
            jQuery('.project__bottom__slider__section .slider-class').addClass('last-slide');
        } else {
            jQuery('.project__bottom__slider__section .slider-class').removeClass('last-slide');
        }
        if (currentSlide === 0) {
            jQuery('.project__bottom__slider__section .slider-class').addClass('first-slide');
        } else {
            jQuery('.project__bottom__slider__section .slider-class').removeClass('first-slide');
        }
    });

    initAccordion();

    // jQuery('.slider_banner_section .slider-class').slick({
    //     autoplay: true,
    //     dots: false,
    //     speed: 100,
    //     fade: false,
    //     arrows: false,
    //     slidesToShow: 1,
    //     centerMode: true,
    //     centerPadding: '140px',
    //     responsive: [{
    //         breakpoint: 991,
    //         settings: {
    //             centerMode: false,
    //             centerPadding: '0',
    //         }
    //     }]
    // });

    // jQuery('.brand_slider_section .slider-class').slick({
    //     autoplay: true,
    //     dots: false,
    //     speed: 300,
    //     fade: false,
    //     arrows: true,
    //     responsive: [{
    //         breakpoint: 991,
    //         settings: "unslick"
    //     }]
    // });


    // jQuery('.block_1_section .slider-class').slick({
    //     autoplay: true,
    //     dots: false,
    //     speed: 300,
    //     fade: true,
    //     arrows: true,
    // });

    $('.learn__more,.scrolldown img').click(function (event) {
        scrollDown();
        event.preventDefault();
    });

    function scrollDown() {
        var vheight = $(window).height();
        $('html, body').animate({
            scrollTop: (Math.floor($(window).scrollTop() / vheight) + 1) * vheight
        }, 1000);
    };

    $('.hamburger').on('click', function () {
        // $('.main__menu').show();
        $('.main__menu').addClass("active");
        $('body').addClass("menu__open");
    });
    $('.menu__close').on('click', function () {
        $('.main__menu').removeClass("active");
        $('body').removeClass("menu__open");
        // $('.main__menu').hide();
    });
    $('.menu-item-has-children').on('click', function () {
        $(this).find(".sub-menu").toggle();
    });
    $('#menu-item-55').on('click', function (event) {
        $('.main__menu').removeClass("active");
        $('body').removeClass("menu__open");

        event.preventDefault();
        $('html, body').animate({
            scrollTop: $(".form_section").offset().top
        }, 1000);
    });


    initAnchorScroll();
});
/**
 * Smooth anchor scrolling
 */
function initAnchorScroll() {
    $('a[href*="#"]:not([data-toggle])').click(function (event) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name="' + this.hash.slice(1) + '"]');
            if (target.length && !target.parents('.woocommerce-tabs').length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        }
    });
}

function initAccordion() {
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
}