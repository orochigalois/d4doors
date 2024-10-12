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
/******/ })()
;
//# sourceMappingURL=app.js.map