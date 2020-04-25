/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

// you can import modules from the theme lib or even from
// NPM packages if they support it…
// import ExampleComponent1 from "./components/ExampleComponent1";
// you can also require modules if they support it…
// const ExampleModule2 = require('./components/example-2');
// Some convenient tools to get you started…
// import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
// import AnimateOnPageLinks from "./components/AnimateOnPageLinks";
// Initialise our components on jQuery.ready…
// jQuery(function ($) {
//     ExampleComponent1.init();
//     ExampleModule2.init();
//     ReplaceObfuscatedEmailAddresses.init();
//     AnimateOnPageLinks.init();
// });
// import './materialize/materialize.min.js'
// import './components/posts'
var $ = jQuery.noConflict(); // Shorthand 

var Id = document.getElementById.bind(document);
var className = document.getElementsByClassName.bind(document);
var tagName = document.getElementsByTagName.bind(document);

function menuMobile() {
  var navToggle = Id('nav-toggle');
  var mobileNav = Id('mobile-nav-wrap');
  navToggle.addEventListener('click', function () {
    navToggle.classList.toggle('nav-toggle-active');
    mobileNav.classList.toggle('nav-active');
  });
  $('#mobile-menu li').on('click', function () {
    console.log('hola li');
    navToggle.classList.toggle('nav-toggle-active');
    mobileNav.classList.toggle('nav-active');
  });
}

function separateFirstText() {
  $('.card__title').each(function () {
    var text = this.innerHTML;
    var firstSpaceIndex = text.indexOf(" ");

    if (firstSpaceIndex > 0) {
      var substrBefore = text.substring(0, firstSpaceIndex);
      var substrAfter = text.substring(firstSpaceIndex, text.length);
      var newText = '<span class="card-category">' + substrBefore + '</span>' + substrAfter;
      this.innerHTML = newText;
    } else {
      this.innerHTML = '<span class="card-category">' + text + '</span>';
    }
  });
}

function showVideos() {
  $('.show-videos').click(function () {
    $('.vimeography-theme-harvestone').toggleClass('show-video');
  });
}

jQuery(function ($) {
  $(document).ready(function () {
    menuMobile(); // Menu Mobile: Show menu and hide 

    separateFirstText(); // Card title: serate the first word in a span 

    showVideos();
  });
});
$(document).ready(function () {
  setTimeout(function () {
    var irf = document.getElementsByTagName('iframe');
    irf[0].id = "iframe1"; // $('#iframe1').css({ 'border-top': '2px solid red'})
    // $('#iframe1').load( function () {
    //     $(this).contents().find(".vp-sidedock").css({'opacity':'0'});
    //     console.log('hola')
    // });

    $("iframe1").contents().find("html").css({
      'padding': '1em'
    });
  }, 10000);
});

/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*******************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/app.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\wordpress\tendenze\wp-content\themes\tendenze\assets\js\app.js */"./assets/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\wordpress\tendenze\wp-content\themes\tendenze\assets\scss\app.scss */"./assets/scss/app.scss");


/***/ })

/******/ });