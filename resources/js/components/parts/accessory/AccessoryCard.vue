<template>
    <div class="container__card">
        <div class="accessory-card">
            <!-- Begin the first image from the gallery  -->
            <div class="accessory-card__thumbnail" v-if="images">
                <img
                    class="accessory-card__image"
                    :src="'/storage/' + images[0]"
                    :alt="accessory.name"
                />
            </div>
            <!-- End the first image from the gallery  -->
            <!-- Begin one image -->
            <div class="accessory-card__thumbnail" v-else-if="accessory.image">
                <img
                    class="accessory-card__image"
                    :src="'/storage/' + accessory.image"
                    :alt="accessory.name"
                />
            </div>
            <!-- End one image -->
            <!-- Begin image stub -->
            <div class="accessory-card__thumbnail" v-else>
                <img
                    class="accessory-card__image"
                    src="https://dummyimage.com/640x360/fff/aaa"
                    :alt="accessory.name"
                />
            </div>
            <!-- End image stub -->
            <div class="accessory-card__content">
                <p class="accessory-card__name">
                    {{ accessory.name }}
                </p>
                <p class="accessory-card__price">
                    <span class="accessory-card__price-unit">от</span>
                    {{ accessory.price }}
                    <span class="accessory-card__price-unit">руб.</span>
                </p>
            </div>
            <div class="accessory-card__button">
                <router-link :to="linkOpen" custom v-slot="{ navigate }">
                    <button
                        @click="navigate"
                        @keypress.enter="navigate"
                        role="link"
                        class="button-main button-accessory"
                        type="button"
                    >
                        Подробнее
                    </button>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AccessoryCard",

    props: {
        accessory: Object
    },

    computed: {
        linkOpen: function() {
            return `/accessory-catalog/accessory/${this.accessory.id}`;
        },

        images: function() {
            return JSON.parse(this.accessory.images);
        }
    }
};
</script>
