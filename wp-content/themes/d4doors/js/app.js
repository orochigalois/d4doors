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
    jQuery('.slider_alt_1_section .slider-class').slick({
        autoplay: false,
        dots: false,
        speed: 300,
        fade: false,
        arrows: true,
        infinite: false,
    });
    jQuery('.slider_alt_1_section .slider-class').on('afterChange', function (event, slick, currentSlide) {
        var totalSlides = slick.slideCount - 1; // Total slides (0-based index)
        if (currentSlide === totalSlides) {
            jQuery('.slider_alt_1_section .slider-class').addClass('last-slide');
        } else {
            jQuery('.slider_alt_1_section .slider-class').removeClass('last-slide');
        }
        if (currentSlide === 0) {
            jQuery('.slider_alt_1_section .slider-class').addClass('first-slide');
        } else {
            jQuery('.slider_alt_1_section .slider-class').removeClass('first-slide');
        }
    });


    jQuery('.slider__alt2 .slider-class').slick({
        autoplay: false,
        dots: false,
        speed: 300,
        fade: false,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '220px',
        responsive: [{
            breakpoint: 767,
            settings: {
                centerMode: false,
                centerPadding: '0',
            }
        }]
    });
    initAccordion();

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