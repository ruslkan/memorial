"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[310],{310:(e,t,s)=>{s.r(t),s.d(t,{default:()=>u});var r=s(629);const c={name:"AccessoryCard",props:{accessory:Object},computed:{linkOpen:function(){return"/accessory-catalog/accessory/".concat(this.accessory.id)},images:function(){return JSON.parse(this.accessory.images)}}};var a=s(900);function n(e,t){var s=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),s.push.apply(s,r)}return s}function o(e){for(var t=1;t<arguments.length;t++){var s=null!=arguments[t]?arguments[t]:{};t%2?n(Object(s),!0).forEach((function(t){i(e,t,s[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(s)):n(Object(s)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(s,t))}))}return e}function i(e,t,s){return t in e?Object.defineProperty(e,t,{value:s,enumerable:!0,configurable:!0,writable:!0}):e[t]=s,e}const l={name:"AccessoryListItem",components:{AccessoryCard:(0,a.Z)(c,(function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"container__card"},[s("div",{staticClass:"accessory-card"},[e.images?s("div",{staticClass:"accessory-card__thumbnail"},[s("img",{staticClass:"accessory-card__image",attrs:{src:"/storage/"+e.images[0],alt:e.accessory.name}})]):e.accessory.image?s("div",{staticClass:"accessory-card__thumbnail"},[s("img",{staticClass:"accessory-card__image",attrs:{src:"/storage/"+e.accessory.image,alt:e.accessory.name}})]):s("div",{staticClass:"accessory-card__thumbnail"},[s("img",{staticClass:"accessory-card__image",attrs:{src:"https://dummyimage.com/640x360/fff/aaa",alt:e.accessory.name}})]),e._v(" "),s("div",{staticClass:"accessory-card__content"},[s("p",{staticClass:"accessory-card__name"},[e._v("\n                "+e._s(e.accessory.name)+"\n            ")]),e._v(" "),s("p",{staticClass:"accessory-card__price"},[s("span",{staticClass:"accessory-card__price-unit"},[e._v("от")]),e._v("\n                "+e._s(e.accessory.price)+"\n                "),s("span",{staticClass:"accessory-card__price-unit"},[e._v("руб.")])])]),e._v(" "),s("div",{staticClass:"accessory-card__button"},[s("router-link",{attrs:{to:e.linkOpen,custom:""},scopedSlots:e._u([{key:"default",fn:function(t){var r=t.navigate;return[s("button",{staticClass:"button-main button-accessory",attrs:{role:"link",type:"button"},on:{click:r,keypress:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:r.apply(null,arguments)}}},[e._v("\n                    Подробнее\n                ")])]}}])})],1)])])}),[],!1,null,null,null).exports},computed:o(o({},(0,r.rn)({productCategories:function(e){return e.categories.all},accessoryCategories:function(e){return e.accessoryCategories.all},accessories:function(e){return e.accessories.all}})),{},{categoryId:function(){return+this.$route.params.number},filteredAccessories:function(){return this.$store.getters["accessories/GET_ACCESSORY_BY_CATEGORY"](this.categoryId)}}),created:function(){this.$store.dispatch("accessories/GET_ACCESSORIES")}};const u=(0,a.Z)(l,(function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",[s("div",{staticClass:"category-nav"},e._l(e.productCategories,(function(t){return s("div",{key:t.id},[s("router-link",{attrs:{to:{name:"product-list-item",params:{number:t.id}},custom:""},scopedSlots:e._u([{key:"default",fn:function(r){var c=r.navigate,a=r.isActive;return[s("button",{staticClass:"button-main",class:[a&&"current"],attrs:{role:"link"},on:{click:c,keypress:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:c.apply(null,arguments)}}},[e._v("\n                    "+e._s(t.name)+"\n                ")])]}}],null,!0)})],1)})),0),e._v(" "),s("div",{staticClass:"category-nav"},e._l(e.accessoryCategories,(function(t){return s("div",{key:t.id},[s("router-link",{attrs:{to:{name:"accessory-list-item",params:{number:t.id}},custom:"",tag:"button"},scopedSlots:e._u([{key:"default",fn:function(r){var c=r.navigate,a=r.isActive;return[s("button",{staticClass:"button-main button-accessory",class:[a&&"current"],attrs:{role:"link",type:"button"},on:{click:c,keypress:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:c.apply(null,arguments)}}},[e._v("\n                    "+e._s(t.name)+"\n                ")])]}}],null,!0)})],1)})),0),e._v(" "),s("div",{staticClass:"container__row align-center"},e._l(e.filteredAccessories,(function(e){return s("accessory-card",{key:e.id,attrs:{accessory:e}})})),1)])}),[],!1,null,null,null).exports}}]);