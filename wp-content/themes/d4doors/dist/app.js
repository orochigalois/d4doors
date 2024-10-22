/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./scss/app.scss":
/*!***********************!*\
  !*** ./scss/app.scss ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*******************!*\
  !*** ./js/app.js ***!
  \*******************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/app.scss */ "./scss/app.scss");


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

    initMobileNav();
    initHeader();
    initIsotope();

    initAnchorScroll();
});

var spec = [];
var gender = [];
var interest = [];
function initIsotope() {
    if (!$(".result__masonry").length) {
        return;
    }

    function updateArray() {
        spec = [];
        $(".filter #filter1 .filter_content ul>li").each(function () {
            if ($(this).hasClass("active")) {
                spec.push($(this).text());
            }
        });

    }

    $(".filter .filter_btn").on("click", document, function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
        }
        else {
            $(".filter .filter_btn").removeClass("active");
            $(this).addClass("active");
        }

    });
    $(".filter .filter_content ul>li").on("click", document, function () {
        $(this).toggleClass("active");
        updateArray();
        let full_text = spec.join(", ");
        if (full_text.length > 16) {
            full_text = full_text.slice(0, 13) + "...";
        }
        if (full_text)
            $("#filter1 .filter_btn span").text(full_text);
        else
            $("#filter1 .filter_btn span").text("Specialisation");



    });



    $('.result__masonry').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

}

function initHeader() {

    window.onscroll = function (ev) {
        if (window.scrollY >= 140) {
            $("#header").addClass("is_sticky_now");
        }
        else {
            $("#header").removeClass("is_sticky_now");
        }
    };


}
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
// mobile menu init
function initMobileNav() {
    jQuery('body').mobileNav({
        menuActiveClass: 'nav-active',
        menuOpener: '.nav-opener',
        hideOnClickOutside: true,
        menuDrop: 'ul'
    });
}
/*
 * Simple Mobile Navigation
 */
;
(function ($) {
    function MobileNav(options) {
        this.options = $.extend({
            container: null,
            hideOnClickOutside: false,
            menuActiveClass: 'nav-active',
            menuOpener: '.nav-opener',
            menuDrop: '.nav-drop',
            toggleEvent: 'click',
            outsideClickEvent: 'click touchstart pointerdown MSPointerDown'
        }, options);
        this.initStructure();
        this.attachEvents();
    }
    MobileNav.prototype = {
        initStructure: function () {
            this.page = $('html');
            this.container = $(this.options.container);
            this.opener = this.container.find(this.options.menuOpener);
            this.drop = this.container.find(this.options.menuDrop);
        },
        attachEvents: function () {
            var self = this;

            if (activateResizeHandler) {
                activateResizeHandler();
                activateResizeHandler = null;
            }

            this.outsideClickHandler = function (e) {
                if (self.isOpened()) {
                    var target = $(e.target);
                    if (!target.closest(self.opener).length && !target.closest(self.drop).length) {
                        self.hide();
                    }
                }
            };

            this.openerClickHandler = function (e) {
                e.preventDefault();
                self.toggle();
            };

            this.opener.on(this.options.toggleEvent, this.openerClickHandler);
        },
        isOpened: function () {
            return this.container.hasClass(this.options.menuActiveClass);
        },
        show: function () {

            $("body").removeClass("overlay-open");
            $(".team-overlay").hide();
            this.container.addClass(this.options.menuActiveClass);
            if (this.options.hideOnClickOutside) {
                this.page.on(this.options.outsideClickEvent, this.outsideClickHandler);
            }
        },
        hide: function () {
            this.container.removeClass(this.options.menuActiveClass);
            if (this.options.hideOnClickOutside) {
                this.page.off(this.options.outsideClickEvent, this.outsideClickHandler);
            }
        },
        toggle: function () {
            if (this.isOpened()) {
                this.hide();
            } else {
                this.show();
            }
        },
        destroy: function () {
            this.container.removeClass(this.options.menuActiveClass);
            this.opener.off(this.options.toggleEvent, this.clickHandler);
            this.page.off(this.options.outsideClickEvent, this.outsideClickHandler);
        }
    };

    var activateResizeHandler = function () {
        var win = $(window),
            doc = $('html'),
            resizeClass = 'resize-active',
            flag, timer;
        var removeClassHandler = function () {
            flag = false;
            doc.removeClass(resizeClass);
        };
        var resizeHandler = function () {
            if (!flag) {
                flag = true;
                doc.addClass(resizeClass);
            }
            clearTimeout(timer);
            timer = setTimeout(removeClassHandler, 500);
        };
        win.on('resize orientationchange', resizeHandler);
    };

    $.fn.mobileNav = function (opt) {
        var args = Array.prototype.slice.call(arguments);
        var method = args[0];

        return this.each(function () {
            var $container = jQuery(this);
            var instance = $container.data('MobileNav');

            if (typeof opt === 'object' || typeof opt === 'undefined') {
                $container.data('MobileNav', new MobileNav($.extend({
                    container: this
                }, opt)));
            } else if (typeof method === 'string' && instance) {
                if (typeof instance[method] === 'function') {
                    args.shift();
                    instance[method].apply(instance, args);
                }
            }
        });
    };
}(jQuery));
/******/ })()
;
//# sourceMappingURL=app.js.map