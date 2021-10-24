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
/******/ 	return __webpack_require__(__webpack_require__.s = 24);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/form-pickers.init.js":
/*!*************************************************!*\
  !*** ./resources/js/pages/form-pickers.init.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Xeria - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 1.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Form pickers init js
*/
!function ($) {
  "use strict";

  var FormPickers = function FormPickers() {};

  FormPickers.prototype.init = function () {
    // Color Picker
    $('#basic-colorpicker').colorpicker();
    $('#hexa-colorpicker').colorpicker({
      format: 'auto'
    });
    $('#component-colorpicker').colorpicker({
      format: null
    });
    $('#horizontal-colorpicker').colorpicker({
      horizontal: true
    });
    $('#inline-colorpicker').colorpicker({
      color: '#DD0F20',
      inline: true,
      container: true
    }); //Clock Picker

    $('.clockpicker').clockpicker({
      donetext: 'Done'
    });
    $('#single-input').clockpicker({
      placement: 'bottom',
      align: 'left',
      autoclose: true,
      'default': 'now'
    });
    $('#check-minutes').click(function (e) {
      // Have to stop propagation here
      e.stopPropagation();
      $("#single-input").clockpicker('show').clockpicker('toggleView', 'minutes');
    }); // Date Range Picker

    var defaultOptions = {
      "cancelClass": "btn-light",
      "applyButtonClasses": "btn-success"
    }; // date pickers

    $('[data-toggle="date-picker"]').each(function (idx, obj) {
      var objOptions = $.extend({}, defaultOptions, $(obj).data());
      $(obj).daterangepicker(objOptions);
    }); //date pickers ranges only

    var start = moment().subtract(29, 'days');
    var end = moment();
    var defaultRangeOptions = {
      startDate: start,
      endDate: end,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    };
    $('[data-toggle="date-picker-range"]').each(function (idx, obj) {
      var objOptions = $.extend({}, defaultRangeOptions, $(obj).data());
      var target = objOptions["targetDisplay"]; //rendering

      $(obj).daterangepicker(objOptions, function (start, end) {
        if (target) $(target).html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      });
    });
  }, $.FormPickers = new FormPickers(), $.FormPickers.Constructor = FormPickers;
}(window.jQuery), //initializing 
function ($) {
  "use strict";

  $.FormPickers.init();
}(window.jQuery);

/***/ }),

/***/ 24:
/*!*******************************************************!*\
  !*** multi ./resources/js/pages/form-pickers.init.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\Xeria-laravel-vertical\resources\js\pages\form-pickers.init.js */"./resources/js/pages/form-pickers.init.js");


/***/ })

/******/ });