<template>
    <div>
        <!-- Begin product category navigation -->
        <div class="category-nav">
            <div
                v-for="productCategoryItem in productCategories"
                :key="productCategoryItem.id"
            >
                <router-link
                    :to="{
                        name: 'product-list-item',
                        params: { number: productCategoryItem.id }
                    }"
                    custom
                    v-slot="{ navigate, isActive }"
                >
                    <button
                        @click="navigate"
                        @keypress.enter="navigate"
                        role="link"
                        class="button-main"
                        :class="[isActive && 'current']"
                        type="button"
                    >
                        {{ productCategoryItem.name }}
                    </button>
                </router-link>
            </div>
        </div>
        <!-- End product category navigation -->
        <!-- Begin accessory category navigation -->
        <div class="category-nav">
            <div
                v-for="accessoryCategoryItem in accessoryCategories"
                :key="accessoryCategoryItem.id"
            >
                <router-link
                    :to="{
                        name: 'accessory-list-item',
                        params: { number: accessoryCategoryItem.id }
                    }"
                    custom
                    v-slot="{ navigate, isActive }"
                >
                    <button
                        @click="navigate"
                        @keypress.enter="navigate"
                        role="link"
                        class="button-main button-accessory"
                        :class="[isActive && 'current']"
                        type="button"
                    >
                        {{ accessoryCategoryItem.name }}
                    </button>
                </router-link>
            </div>
        </div>
        <!-- End accessory category navigation -->
        <div class="container">
            <div v-if="product" class="product-item">
                <div class="container__row">
                    <div class="product-item__image-area">
                        <!-- Begin gallery images -->
                        <div v-if="product.images">
                            <product-image-preview
                                :productImages="product.images"
                                :productName="product.name"
                            ></product-image-preview>
                        </div>
                        <!-- End gallery images -->
                        <!-- Begin one image -->
                        <img
                            class="product-item__image"
                            v-else-if="product.image"
                            :src="'/storage/' + product.image"
                            :alt="product.name"
                        />
                        <!-- End one image -->
                        <!-- Begin image stub -->
                        <img
                            class="product-item__image"
                            v-else
                            src="https://dummyimage.com/640x360/fff/aaa"
                            :alt="product.name"
                        />
                        <!-- End image stub -->
                        <p class="product-item__price">
                            <strong>{{ totalPrice.toFixed(2) }}</strong
                            ><span class="product-item__price-note">*</span>
                            <span class="product-item__price-unit">руб.</span>
                        </p>

                        <p class="product-item__note">
                            *Окончательная стоимость комплекта при оформлении
                            договора
                        </p>

                        <div class="product-item__button">
                            <router-link
                                :to="linkOpen"
                                custom
                                v-slot="{ navigate }"
                                class="button-main product-item__button-main"
                            >
                                <span
                                    @click="navigate"
                                    @keypress.enter="navigate"
                                    role="link"
                                    >Калькулятор</span
                                >
                            </router-link>

                            <router-link
                                :to="linkOpenMain"
                                custom
                                v-slot="{ navigate }"
                                class="button-main product-item__button-main"
                            >
                                <span
                                    @click="navigate"
                                    @keypress.enter="navigate"
                                    role="link"
                                    >В каталог</span
                                >
                            </router-link>
                        </div>
                    </div>
                    <!-- Begin product attribute -->
                    <div class="product-item__attribute">
                        <div class="attribute">
                            <h3 class="attribute__headline">
                                {{ product.name }}
                            </h3>

                            <div
                                class="container__separator container__separator_large"
                            ></div>

                            <ul class="attribute__list">
                                <li v-if="product.stella.id">
                                    <stella-attribute-list :data="product" />
                                </li>
                                <li v-if="product.pillar.id">
                                    <pillar-attribute-list :data="product" />
                                </li>
                                <li v-if="product.pedestal.id">
                                    <pedestal-attribute-list :data="product" />
                                </li>
                                <li v-if="product.parterre.id">
                                    <parterre-attribute-list :data="product" />
                                </li>
                                <li v-if="product.tombstone.id">
                                    <tombstone-attribute-list :data="product" />
                                </li>
                            </ul>

                            <price-per-set :product="product" />

                            <div
                                v-show="services"
                                class="product-item__service"
                            >
                                <fieldset class="service__checkbox checkbox">
                                    <legend class="checkbox__title">
                                        Дополнительные услуги
                                    </legend>

                                    <!-- Begin checkbox select calculator services -->
                                    <ul class="checkbox__list">
                                        <li
                                            v-for="(option, index) in services"
                                            :key="index"
                                            class="chekcbox__item"
                                        >
                                            <input-checkbox
                                                v-model="selected.services"
                                                :index="index"
                                                :inputValue="option.price"
                                                :label="option.name"
                                            ></input-checkbox>
                                        </li>
                                    </ul>
                                    <!-- End checkbox select calculator services -->

                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!-- End product attribute -->
                </div>
            </div>
            <div v-else>
                <h1>Памятник не найден</h1>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from "vuex";
import PricePerSet from "../../components/parts/PricePerSet.vue";
import StellaAttributeList from "../../components/parts/stella/StellaAttributeList.vue";
import PillarAttributeList from "../../components/parts/pillar/PillarAttributeList.vue";
import PedestalAttributeList from "../../components/parts/pedestal/PedestalAttributeList.vue";
import ParterreAttributeList from "../../components/parts/parterre/ParterreAttributeList.vue";
import TombstoneAttributeList from "../../components/parts/tombstone/TombstoneAttributeList.vue";
import ProductImagePreview from "../../components/parts/product/ProductImagePreview.vue";
import InputCheckbox from "../../components/parts/input/InputCheckbox.vue";

export default {
    name: "ProductItem",

    components: {
        PricePerSet,
        StellaAttributeList,
        PillarAttributeList,
        PedestalAttributeList,
        ParterreAttributeList,
        TombstoneAttributeList,
        ProductImagePreview,
        InputCheckbox
    },

    data: function() {
        return {
            selected: {
                services: []
            }
        };
    },

    computed: {
        ...mapState({
            productCategories: state => state.categories.all,
            accessoryCategories: state => state.accessoryCategories.all,
            services: state => state.services.all
        }),

        product: function() {
            return this.$store.getters["products/GET_PRODUCT_BY_ID"](
                this.productId
            );
        },

        linkOpen: function() {
            return `/product-catalog/product/${this.productId}/calculator`;
        },

        linkOpenMain: function() {
            return "/";
        },

        productId: function() {
            return +this.$route.params.id;
        },

        totalPrice: function() {
            return this.selected.services.reduce(
                (sum, item) => sum + item,
                this.product.price || 0
            );
        }
    }
};
</script>
