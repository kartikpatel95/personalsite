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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/css/layout.scss":
/*!*****************************!*\
  !*** ./src/css/layout.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("throw new Error(\"Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\\nModuleNotFoundError: Module not found: Error: Can't resolve '../../img/architecture-min.jpg' in 'C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\src\\\\css'\\n    at factory.create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\webpack\\\\lib\\\\Compilation.js:925:10)\\n    at factory (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:401:22)\\n    at resolver (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:130:21)\\n    at asyncLib.parallel (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:224:22)\\n    at C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\neo-async\\\\async.js:2830:7\\n    at C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\neo-async\\\\async.js:6877:13\\n    at normalResolver.resolve (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\webpack\\\\lib\\\\NormalModuleFactory.js:214:25)\\n    at doResolve (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:184:12)\\n    at hook.callAsync (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:238:5)\\n    at _fn0 (eval at create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at resolver.doResolve (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\UnsafeCachePlugin.js:37:5)\\n    at hook.callAsync (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:238:5)\\n    at _fn0 (eval at create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at hook.callAsync (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:238:5)\\n    at _fn0 (eval at create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:27:1)\\n    at resolver.doResolve (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\DescriptionFilePlugin.js:42:38)\\n    at hook.callAsync (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:238:5)\\n    at _fn42 (eval at create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:16:1)\\n    at hook.callAsync (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:238:5)\\n    at _fn0 (eval at create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:27:1)\\n    at resolver.doResolve (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\DescriptionFilePlugin.js:42:38)\\n    at hook.callAsync (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:238:5)\\n    at _fn1 (eval at create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:16:1)\\n    at hook.callAsync (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\Resolver.js:238:5)\\n    at _fn0 (eval at create (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\tapable\\\\lib\\\\HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at fs.stat (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\DirectoryExistsPlugin.js:22:13)\\n    at process.nextTick (C:\\\\var\\\\www\\\\personal\\\\mysite\\\\themes\\\\mysite\\\\node_modules\\\\enhanced-resolve\\\\lib\\\\CachedInputFileSystem.js:73:15)\\n    at process._tickCallback (internal/process/next_tick.js:61:11)\");\n\n//# sourceURL=webpack:///./src/css/layout.scss?");

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _css_layout_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./css/layout.scss */ \"./src/css/layout.scss\");\n/* harmony import */ var _css_layout_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_layout_scss__WEBPACK_IMPORTED_MODULE_0__);\n//needed for webpack console error\r\n\r\n\n\n//# sourceURL=webpack:///./src/index.js?");

/***/ })

/******/ });