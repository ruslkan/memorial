"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_AccessoryCatalog_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "AccessoryCard",
  props: {
    accessory: Object
  },
  computed: {
    linkOpen: function linkOpen() {
      return "/accessory-catalog/accessory/".concat(this.accessory.id);
    },
    images: function images() {
      return JSON.parse(this.accessory.images);
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/AccessoryCatalog.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/AccessoryCatalog.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _components_parts_accessory_AccessoryCard_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/parts/accessory/AccessoryCard.vue */ "./resources/js/components/parts/accessory/AccessoryCard.vue");
/* harmony import */ var _components_parts_button_ButtonMainNav_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/parts/button/ButtonMainNav.vue */ "./resources/js/components/parts/button/ButtonMainNav.vue");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "AccessoryCatalog",
  components: {
    AccessoryCard: _components_parts_accessory_AccessoryCard_vue__WEBPACK_IMPORTED_MODULE_0__.default,
    ButtonMainNav: _components_parts_button_ButtonMainNav_vue__WEBPACK_IMPORTED_MODULE_1__.default
  },
  data: function data() {
    return {
      selectAccessoryCategoryItem: 0
    };
  },
  computed: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_2__.mapState)({
    accessoryCategories: function accessoryCategories(state) {
      return state.accessoryCategories.all;
    },
    accessories: function accessories(state) {
      return state.accessories.all;
    }
  })), {}, {
    filteredAccessories: function filteredAccessories() {
      var _this = this;

      return this.accessories.filter(function (accessory) {
        return _this.selectAccessoryCategoryItem == 0 || accessory.accessory_category_id == _this.selectAccessoryCategoryItem;
      });
    },
    accessoryCategory: function accessoryCategory() {
      return this.$store.getters["accessoryCategories/GET_ACCESSORY_CATEGORY_BY_ID"](this.accessoryCategoryId);
    },
    accessoryCategoryId: function accessoryCategoryId() {
      return +this.$route.params.id;
    }
  }),
  mounted: function mounted() {
    console.log("Компонент Accessory Category смонтирован");
  }
});

/***/ }),

/***/ "./resources/js/components/parts/accessory/AccessoryCard.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/components/parts/accessory/AccessoryCard.vue ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AccessoryCard_vue_vue_type_template_id_3139250a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AccessoryCard.vue?vue&type=template&id=3139250a& */ "./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=template&id=3139250a&");
/* harmony import */ var _AccessoryCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AccessoryCard.vue?vue&type=script&lang=js& */ "./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _AccessoryCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AccessoryCard_vue_vue_type_template_id_3139250a___WEBPACK_IMPORTED_MODULE_0__.render,
  _AccessoryCard_vue_vue_type_template_id_3139250a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/parts/accessory/AccessoryCard.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/AccessoryCatalog.vue":
/*!*************************************************!*\
  !*** ./resources/js/views/AccessoryCatalog.vue ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AccessoryCatalog_vue_vue_type_template_id_a0345b74___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AccessoryCatalog.vue?vue&type=template&id=a0345b74& */ "./resources/js/views/AccessoryCatalog.vue?vue&type=template&id=a0345b74&");
/* harmony import */ var _AccessoryCatalog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AccessoryCatalog.vue?vue&type=script&lang=js& */ "./resources/js/views/AccessoryCatalog.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _AccessoryCatalog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AccessoryCatalog_vue_vue_type_template_id_a0345b74___WEBPACK_IMPORTED_MODULE_0__.render,
  _AccessoryCatalog_vue_vue_type_template_id_a0345b74___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/AccessoryCatalog.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AccessoryCard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/AccessoryCatalog.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/views/AccessoryCatalog.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCatalog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AccessoryCatalog.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/AccessoryCatalog.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCatalog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=template&id=3139250a&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=template&id=3139250a& ***!
  \**************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCard_vue_vue_type_template_id_3139250a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCard_vue_vue_type_template_id_3139250a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCard_vue_vue_type_template_id_3139250a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AccessoryCard.vue?vue&type=template&id=3139250a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=template&id=3139250a&");


/***/ }),

/***/ "./resources/js/views/AccessoryCatalog.vue?vue&type=template&id=a0345b74&":
/*!********************************************************************************!*\
  !*** ./resources/js/views/AccessoryCatalog.vue?vue&type=template&id=a0345b74& ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCatalog_vue_vue_type_template_id_a0345b74___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCatalog_vue_vue_type_template_id_a0345b74___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryCatalog_vue_vue_type_template_id_a0345b74___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AccessoryCatalog.vue?vue&type=template&id=a0345b74& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/AccessoryCatalog.vue?vue&type=template&id=a0345b74&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=template&id=3139250a&":
/*!*****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/parts/accessory/AccessoryCard.vue?vue&type=template&id=3139250a& ***!
  \*****************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container__card" }, [
    _c("div", { staticClass: "accessory-card" }, [
      _vm.images
        ? _c("div", { staticClass: "accessory-card__thumbnail" }, [
            _c("img", {
              staticClass: "accessory-card__image",
              attrs: {
                src: "/storage/" + _vm.images[0],
                alt: _vm.accessory.name
              }
            })
          ])
        : _vm.accessory.image
        ? _c("div", { staticClass: "accessory-card__thumbnail" }, [
            _c("img", {
              staticClass: "accessory-card__image",
              attrs: {
                src: "/storage/" + _vm.accessory.image,
                alt: _vm.accessory.name
              }
            })
          ])
        : _c("div", { staticClass: "accessory-card__thumbnail" }, [
            _c("img", {
              staticClass: "accessory-card__image",
              attrs: {
                src: "https://dummyimage.com/640x360/fff/aaa",
                alt: _vm.accessory.name
              }
            })
          ]),
      _vm._v(" "),
      _c("div", { staticClass: "accessory-card__content" }, [
        _c("p", { staticClass: "accessory-card__name" }, [
          _vm._v(
            "\n                " + _vm._s(_vm.accessory.name) + "\n            "
          )
        ]),
        _vm._v(" "),
        _c("p", { staticClass: "accessory-card__price" }, [
          _c("span", { staticClass: "accessory-card__price-unit" }, [
            _vm._v("от")
          ]),
          _vm._v(
            "\n                " +
              _vm._s(_vm.accessory.price) +
              "\n                "
          ),
          _c("span", { staticClass: "accessory-card__price-unit" }, [
            _vm._v("руб.")
          ])
        ])
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "accessory-card__button" },
        [
          _c("router-link", {
            staticClass: "button-main",
            attrs: { to: _vm.linkOpen, custom: "" },
            scopedSlots: _vm._u([
              {
                key: "default",
                fn: function(ref) {
                  var navigate = ref.navigate
                  return [
                    _c(
                      "span",
                      {
                        attrs: { role: "link" },
                        on: {
                          click: navigate,
                          keypress: function($event) {
                            if (
                              !$event.type.indexOf("key") &&
                              _vm._k(
                                $event.keyCode,
                                "enter",
                                13,
                                $event.key,
                                "Enter"
                              )
                            ) {
                              return null
                            }
                            return navigate.apply(null, arguments)
                          }
                        }
                      },
                      [_vm._v("Подробнее")]
                    )
                  ]
                }
              }
            ])
          })
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/AccessoryCatalog.vue?vue&type=template&id=a0345b74&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/AccessoryCatalog.vue?vue&type=template&id=a0345b74& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "div",
      { staticClass: "category-nav" },
      _vm._l(_vm.accessoryCategories, function(accessoryCategoryItem) {
        return _c("button-main-nav", {
          key: accessoryCategoryItem.name,
          attrs: {
            item: accessoryCategoryItem,
            selectItem: _vm.selectAccessoryCategoryItem
          },
          on: {
            click: function($event) {
              _vm.selectAccessoryCategoryItem = accessoryCategoryItem.id
            }
          }
        })
      }),
      1
    ),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "container__row align-center" },
      _vm._l(_vm.filteredAccessories, function(accessory) {
        return _c("accessory-card", {
          key: accessory.id,
          attrs: { accessory: accessory }
        })
      }),
      1
    )
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);