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

/***/ "./resources/js/pages/dashboard-1.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/dashboard-1.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Template Name: Xeria - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 1.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Dashboard 1 init
*/
var options = {
  chart: {
    height: 279,
    type: 'bar',
    toolbar: {
      show: false
    }
  },
  plotOptions: {
    bar: {
      columnWidth: '30%',
      endingShape: 'rounded'
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 2
  },
  colors: ["#f0643b"],
  series: [{
    name: 'Growth',
    data: [44, 55, 41, 67, 22, 43, 21, 33, 45, 31, 87, 65]
  }],
  grid: {
    borderColor: '#f1f3fa',
    padding: {
      right: 0,
      bottom: 0,
      left: 0
    }
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    offsetX: 0
  },
  yaxis: {
    title: {
      text: 'Growth'
    }
  },
  fill: {
    type: 'gradient',
    gradient: {
      shade: 'light',
      type: "horizontal",
      shadeIntensity: 0.25,
      gradientToColors: undefined,
      inverseColors: true,
      opacityFrom: 0.85,
      opacityTo: 0.85,
      stops: [50, 0, 100]
    }
  }
};
var chart = new ApexCharts(document.querySelector("#rotate-labels-column"), options);
chart.render(); //
// Line with Data Labels
//

var options = {
  chart: {
    height: 480,
    type: 'line',
    zoom: {
      enabled: false
    },
    toolbar: {
      show: false
    }
  },
  colors: ['#f0643b', '#56c2d6'],
  dataLabels: {
    enabled: true
  },
  stroke: {
    width: [3, 3],
    curve: 'smooth'
  },
  series: [{
    name: "Previus Week",
    data: [32, 42, 42, 62, 52, 75, 62]
  }, {
    name: "Current Week",
    data: [42, 58, 66, 93, 82, 105, 92]
  }],
  grid: {
    row: {
      colors: ['transparent', 'transparent'],
      // takes an array which will be repeated on columns
      opacity: 0.2
    },
    borderColor: '#f1f3fa'
  },
  markers: {
    style: 'inverted',
    size: 6
  },
  xaxis: {
    categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    title: {
      text: 'Week 12 - March 18, 2019 to March 24, 2019'
    }
  },
  yaxis: {
    title: {
      text: 'Sales Analytics'
    },
    min: 5,
    max: 120
  },
  legend: {
    position: 'top',
    horizontalAlign: 'right',
    floating: true,
    offsetY: -25,
    offsetX: -5
  },
  responsive: [{
    breakpoint: 600,
    options: {
      chart: {
        toolbar: {
          show: false
        }
      },
      legend: {
        show: false
      }
    }
  }]
};
var chart = new ApexCharts(document.querySelector("#apex-line-1"), options);
chart.render(); //
// RADAR – MULTIPLE SERIES
//

var options = {
  chart: {
    height: 337,
    type: 'radar',
    toolbar: {
      show: false
    }
  },
  series: [{
    name: 'Desktops',
    data: [80, 50, 30, 40, 100, 20]
  }, {
    name: 'Tablets',
    data: [20, 30, 40, 80, 20, 80]
  }, {
    name: 'Mobiles',
    data: [44, 76, 78, 13, 43, 10]
  }],
  stroke: {
    width: 0,
    curve: 'smooth'
  },
  fill: {
    opacity: 0.4
  },
  markers: {
    size: 0
  },
  legend: {
    show: true,
    offsetY: -10
  },
  colors: ["#5089de", "#56c2d6", "#f0643b"],
  labels: ['2011', '2012', '2013', '2014', '2015', '2016']
};
var chart = new ApexCharts(document.querySelector("#radar-multiple-series"), options);
chart.render();
$('#usa-map').vectorMap({
  map: 'us_merc_en',
  backgroundColor: 'transparent',
  regionStyle: {
    initial: {
      fill: '#f5f6f8'
    }
  },
  series: {
    regions: [{
      values: {
        "US-VA": '#a6d8d1',
        "US-PA": '#a6d8d1',
        "US-TN": '#a6d8d1',
        "US-WY": '#a6d8d1',
        "US-WA": '#a6d8d1',
        "US-TX": '#a6d8d1'
      },
      attribute: 'fill'
    }]
  }
});

/***/ }),

/***/ "./resources/scss/app-rtl.scss":
/*!*************************************!*\
  !*** ./resources/scss/app-rtl.scss ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/bootstrap.scss":
/*!***************************************!*\
  !*** ./resources/scss/bootstrap.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/scss/icons.scss":
/*!***********************************!*\
  !*** ./resources/scss/icons.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**************************************************************************************************************************************************************************!*\
  !*** multi ./resources/js/pages/dashboard-1.init.js ./resources/scss/bootstrap.scss ./resources/scss/icons.scss ./resources/scss/app-rtl.scss ./resources/scss/app.scss ***!
  \**************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\Xeria-laravel-vertical\resources\js\pages\dashboard-1.init.js */"./resources/js/pages/dashboard-1.init.js");
__webpack_require__(/*! C:\xampp\htdocs\Xeria-laravel-vertical\resources\scss\bootstrap.scss */"./resources/scss/bootstrap.scss");
__webpack_require__(/*! C:\xampp\htdocs\Xeria-laravel-vertical\resources\scss\icons.scss */"./resources/scss/icons.scss");
__webpack_require__(/*! C:\xampp\htdocs\Xeria-laravel-vertical\resources\scss\app-rtl.scss */"./resources/scss/app-rtl.scss");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\Xeria-laravel-vertical\resources\scss\app.scss */"./resources/scss/app.scss");


/***/ })

/******/ });