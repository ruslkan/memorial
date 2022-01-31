"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_accessory_AccessoryListItem_vue"],{

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

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/accessory/AccessoryListItem.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/accessory/AccessoryListItem.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _components_parts_accessory_AccessoryCard_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components/parts/accessory/AccessoryCard.vue */ "./resources/js/components/parts/accessory/AccessoryCard.vue");
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
  name: "AccessoryListItem",
  components: {
    AccessoryCard: _components_parts_accessory_AccessoryCard_vue__WEBPACK_IMPORTED_MODULE_0__.default
  },
  computed: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_1__.mapState)({
    productCategories: function productCategories(state) {
      return state.categories.all;
    },
    accessoryCategories: function accessoryCategories(state) {
      return state.accessoryCategories.all;
    },
    accessories: function accessories(state) {
      return state.accessories.all;
    }
  })), {}, {
    categoryId: function categoryId() {
      return +this.$route.params.number;
    },
    filteredAccessories: function filteredAccessories() {
      return this.$store.getters["accessories/GET_ACCESSORY_BY_CATEGORY"](this.categoryId);
    }
  })
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

/***/ "./resources/js/views/accessory/AccessoryListItem.vue":
/*!************************************************************!*\
  !*** ./resources/js/views/accessory/AccessoryListItem.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AccessoryListItem_vue_vue_type_template_id_748c26f7___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AccessoryListItem.vue?vue&type=template&id=748c26f7& */ "./resources/js/views/accessory/AccessoryListItem.vue?vue&type=template&id=748c26f7&");
/* harmony import */ var _AccessoryListItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AccessoryListItem.vue?vue&type=script&lang=js& */ "./resources/js/views/accessory/AccessoryListItem.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _AccessoryListItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AccessoryListItem_vue_vue_type_template_id_748c26f7___WEBPACK_IMPORTED_MODULE_0__.render,
  _AccessoryListItem_vue_vue_type_template_id_748c26f7___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/accessory/AccessoryListItem.vue"
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

/***/ "./resources/js/views/accessory/AccessoryListItem.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/views/accessory/AccessoryListItem.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryListItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AccessoryListItem.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/accessory/AccessoryListItem.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryListItem_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

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

/***/ "./resources/js/views/accessory/AccessoryListItem.vue?vue&type=template&id=748c26f7&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/views/accessory/AccessoryListItem.vue?vue&type=template&id=748c26f7& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryListItem_vue_vue_type_template_id_748c26f7___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryListItem_vue_vue_type_template_id_748c26f7___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AccessoryListItem_vue_vue_type_template_id_748c26f7___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AccessoryListItem.vue?vue&type=template&id=748c26f7& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/accessory/AccessoryListItem.vue?vue&type=template&id=748c26f7&");


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
            attrs: { to: _vm.linkOpen, custom: "" },
            scopedSlots: _vm._u([
              {
                key: "default",
                fn: function(ref) {
                  var navigate = ref.navigate
                  return [
                    _c(
                      "button",
                      {
                        staticClass: "button-main button-accessory",
                        attrs: { role: "link", type: "button" },
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
                      [
                        _vm._v(
                          "\n                    Подробнее\n                "
                        )
                      ]
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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/accessory/AccessoryListItem.vue?vue&type=template&id=748c26f7&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/accessory/AccessoryListItem.vue?vue&type=template&id=748c26f7& ***!
  \**********************************************************************************************************************************************************************************************************************************/
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
      _vm._l(_vm.productCategories, function(categoryProductItem) {
        return _c(
          "div",
          { key: categoryProductItem.id },
          [
            _c("router-link", {
              attrs: {
                to: {
                  name: "product-list-item",
                  params: { number: categoryProductItem.id }
                },
                custom: ""
              },
              scopedSlots: _vm._u(
                [
                  {
                    key: "default",
                    fn: function(ref) {
                      var navigate = ref.navigate
                      var isActive = ref.isActive
                      return [
                        _c(
                          "button",
                          {
                            staticClass: "button-main",
                            class: [isActive && "current"],
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
                          [
                            _vm._v(
                              "\n                    " +
                                _vm._s(categoryProductItem.name) +
                                "\n                "
                            )
                          ]
                        )
                      ]
                    }
                  }
                ],
                null,
                true
              )
            })
          ],
          1
        )
      }),
      0
    ),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "category-nav" },
      _vm._l(_vm.accessoryCategories, function(accessoryCategoryItem) {
        return _c(
          "div",
          { key: accessoryCategoryItem.id },
          [
            _c("router-link", {
              attrs: {
                to: {
                  name: "accessory-list-item",
                  params: { number: accessoryCategoryItem.id }
                },
                custom: "",
                tag: "button"
              },
              scopedSlots: _vm._u(
                [
                  {
                    key: "default",
                    fn: function(ref) {
                      var navigate = ref.navigate
                      var isActive = ref.isActive
                      return [
                        _c(
                          "button",
                          {
                            staticClass: "button-main button-accessory",
                            class: [isActive && "current"],
                            attrs: { role: "link", type: "button" },
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
                          [
                            _vm._v(
                              "\n                    " +
                                _vm._s(accessoryCategoryItem.name) +
                                "\n                "
                            )
                          ]
                        )
                      ]
                    }
                  }
                ],
                null,
                true
              )
            })
          ],
          1
        )
      }),
      0
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