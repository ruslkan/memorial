<template>
    <div>
        <!-- Begin product category navigation -->
        <div class="category-nav">
            <div v-for="categoryItem in categories" :key="categoryItem.id">
                <router-link
                    :to="{
                        name: 'product-list-item',
                        params: { number: categoryItem.id }
                    }"
                    custom
                    tag="button"
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
                        {{ categoryItem.name }}
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
                v-for="product in filteredProducts"
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
    name: "ProductListItem",

    components: {
        ProductCard
    },

    computed: {
        ...mapState({
            categories: state => state.categories.all,
            products: state => state.products.all,
            accessoryCategories: state => state.accessoryCategories.all
        }),

        productCategoryId: function() {
            return +this.$route.params.number;
        },

        filteredProducts: function() {
            return this.$store.getters["products/GET_PRODUCT_BY_CATEGORY"](
                this.productCategoryId
            );
        }
    }
};
</script>
