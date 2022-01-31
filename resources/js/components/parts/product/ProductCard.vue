<template>
    <div class="container__card">
        <div class="product-card">
            <div class="product-card__thumbnail" v-if="images">
                <img
                    class="product-card__image"
                    :src="'/storage/' + images[0]"
                    :alt="product.name"
                />
            </div>

            <div class="product-card__thumbnail" v-else-if="product.image">
                <img
                    class="product-card__image"
                    :src="'/storage/' + product.image"
                    :alt="product.name"
                />
            </div>

            <div class="product-card__thumbnail" v-else>
                <img
                    class="product-card__image"
                    src="https://dummyimage.com/640x360/fff/aaa"
                    :alt="product.name"
                />
            </div>

            <div class="product-card__content">
                <p class="product-card__name">
                    {{ product.name }}
                </p>
                <p class="product-card__price">
                    <span class="product-card__price-unit">от</span>
                    {{ product.price.toFixed(2) }}
                    <span class="product-card__price-unit">руб.</span>
                </p>
            </div>
            <div class="product-card__button">
                <router-link :to="linkOpen" custom v-slot="{ navigate }">
                    <button
                        @click="navigate"
                        @keypress.enter="navigate"
                        role="link"
                        class="button-main"
                        type="button"
                    >
                        Подробнее о модели
                    </button>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductCard",

    props: {
        product: Object
    },

    computed: {
        linkOpen: function() {
            return `/product-catalog/product/${this.product.id}`;
        },

        images: function() {
            return JSON.parse(this.product.images);
        }
    }
};
</script>

<style></style>
