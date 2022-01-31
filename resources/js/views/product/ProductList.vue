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
        <!-- Begin product card container -->
        <div class="container__row align-center">
            <product-card
                v-for="product in products"
                :key="product.id"
                :product="product"
            ></product-card>
        </div>
        <!-- End product card container -->
    </div>
</template>

<script>
import { mapState } from "vuex";

import ProductCard from "../../components/parts/product/ProductCard.vue";

export default {
    name: "ProductList",

    components: {
        ProductCard
    },

    computed: {
        ...mapState({
            productCategories: state => state.categories.all,
            products: state => state.products.all,
            accessoryCategories: state => state.accessoryCategories.all
        })
    }
};
</script>
