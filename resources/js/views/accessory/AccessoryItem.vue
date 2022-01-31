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
            <div v-if="accessory" class="accessory-item">
                <div class="container__row">
                    <div class="accessory-item__image-area">
                        <!-- Begin gallery images -->
                        <div v-if="accessory.images">
                            <product-image-preview
                                :productImages="accessory.images"
                                :productName="accessory.name"
                            ></product-image-preview>
                        </div>
                        <!-- End gallery images -->
                        <!-- Begin one image -->
                        <img
                            class="accessory-item__image"
                            v-else-if="accessory.image"
                            :src="'/storage/' + accessory.image"
                            :alt="accessory.name"
                        />
                        <!-- End one image -->
                        <!-- Begin image stub -->
                        <img
                            class="accessory-item__image"
                            v-else
                            src="https://dummyimage.com/640x360/fff/aaa"
                            :alt="accessory.name"
                        />
                        <!-- End image stub -->
                        <p class="accessory-item__price">
                            <strong>{{ accessory.price }}</strong>
                            <span class="accessory-item__price-unit">руб.</span>
                        </p>

                        <div class="accessory-item__button">
                            <router-link
                                :to="linkOpenMain"
                                custom
                                v-slot="{ navigate }"
                            >
                                <button
                                    @click="navigate"
                                    @keypress.enter="navigate"
                                    role="link"
                                    class="button-main button-accessory"
                                    type="button"
                                >
                                    В каталог
                                </button>
                            </router-link>
                        </div>
                    </div>
                    <!-- Begin accessory attribute -->
                    <div class="accessory-item__attribute">
                        <div class="attribute">
                            <h3 class="attribute__headline">
                                {{ accessory.name }}
                            </h3>

                            <div
                                class="container__separator container__separator_large"
                            ></div>

                            <p
                                v-html="accessory.description"
                                class="accessory-item__description"
                            ></p>
                        </div>
                    </div>
                    <!-- End accessory attribute -->
                </div>
            </div>
            <div v-else>
                <h1>Аксессуар не найден</h1>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from "vuex";
import ProductImagePreview from "../../components/parts/product/ProductImagePreview.vue";
export default {
    name: "AccessoryItem",

    components: {
        ProductImagePreview
    },

    computed: {
        ...mapState({
            productCategories: state => state.categories.all,
            accessoryCategories: state => state.accessoryCategories.all
        }),

        accessory: function() {
            return this.$store.getters["accessories/GET_ACCESSORY_BY_ID"](
                this.accessoryId
            );
        },

        linkOpenMain: function() {
            return "/";
        },

        accessoryId: function() {
            return +this.$route.params.id;
        }
    }
};
</script>

<style scoped lang="scss"></style>
