/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/manipulate-elements.js":
/*!********************************************!*\
  !*** ./src/modules/manipulate-elements.js ***!
  \********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ ManipulateEelements; }
/* harmony export */ });
class ManipulateEelements {
  constructor() {}

  appendChild(elClass, elToAppendClass, display) {
    const el = document.querySelector(`.${elClass}`);
    document.querySelector(`.${elToAppendClass}`).appendChild(el);
    el.style.display = display;
  }

}

/***/ }),

/***/ "./src/modules/modal.js":
/*!******************************!*\
  !*** ./src/modules/modal.js ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ Modal; }
/* harmony export */ });
class Modal {
  constructor() {}

  init(backdropClass, modal) {
    this.backdrop = document.querySelector(backdropClass);
    this.modal = modal;
    this.backdropShowLength = this.backdrop.dataset.showAnimation;
    this.backdropHideLength = this.backdrop.dataset.hideAnimation;
    this.backdropHideDelay = this.backdrop.dataset.hideDelay;
    this.modalShowLength = this.modal.dataset.showAnimation;
    this.modalHideLength = this.modal.dataset.hideAnimation;
    this.modalShowDelay = this.modal.dataset.showDelay;
  }

  show() {
    this.backdrop.style.animation = `showOpacity ${this.backdropShowLength} forwards`;
    this.modal.style.animation = `scaleInModal ${this.modalShowLength} ${this.modalShowDelay} forwards`;
    this.modal.style.pointerEvents = "initial";
  }

  hide() {
    this.backdrop.style.opacity = ".8";
    this.backdrop.style.animation = `hideOpacity ${this.backdropHideLength} ${this.backdropHideDelay} forwards`;
    this.modal.style.animation = `moveYRightModal ${this.modalHideLength}`;
  }

}

/***/ }),

/***/ "./sass/main.scss":
/*!************************!*\
  !*** ./sass/main.scss ***!
  \************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../sass/main.scss */ "./sass/main.scss");
/* harmony import */ var _modules_manipulate_elements__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/manipulate-elements */ "./src/modules/manipulate-elements.js");
/* harmony import */ var _modules_modal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/modal */ "./src/modules/modal.js");



const manipulateElements = new _modules_manipulate_elements__WEBPACK_IMPORTED_MODULE_1__.default();
const servicesModal = new _modules_modal__WEBPACK_IMPORTED_MODULE_2__.default();
document.addEventListener('DOMContentLoaded', () => {
  // Move WPForm element
  manipulateElements.appendChild('wpforms-container', 'contact .container', 'flex'); // Services Card Modal Funtionality

  const servicesCardBtns = document.querySelectorAll('.card button').forEach(button => button.addEventListener('click', e => {
    const serviceIdentifier = e.target.dataset.service;
    const modalToShow = document.querySelector(`.modal-services .modal__content[data-service="${serviceIdentifier}"]`);
    servicesModal.init('.modal-services .modal__backdrop', modalToShow);
    servicesModal.show();

    const buttonHandler = closeBtn => {
      return function closeButton() {
        console.log('click');
        servicesModal.hide();
        closeBtn.removeEventListener('click', closeButton);
      };
    };

    const closeBtn = modalToShow.querySelector('.modal__close');
    const closeButton = buttonHandler(closeBtn);
    closeBtn.addEventListener('click', closeButton);
  }));
});
}();
/******/ })()
;
//# sourceMappingURL=index.js.map