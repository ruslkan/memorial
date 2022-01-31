<template>
    <div class="product-slides">
        <agile
            class="main"
            ref="main"
            :options="optionsMain"
            :as-nav-for="asNavForMain"
        >
            <div
                class="slide"
                v-for="(image, index) in images"
                :key="index"
                :class="`slide--${index}`"
            >
                <img
                    class="product-slides__image"
                    :src="'/storage/' + image"
                    :alt="productName"
                />
            </div>

            <template slot="prevButton">prev</template>
            <template slot="nextButton">next</template>
        </agile>
        <agile
            class="thumbnails"
            ref="thumbnails"
            :options="optionsThumbnails"
            :as-nav-for="asNavForThumbnails"
            :slides-to-show="5"
        >
            <div
                class="slide slide--thumbniail"
                v-for="(image, index) in images"
                :key="index"
                :class="`slide--${index}`"
                @click="$refs.thumbnails.goTo(index)"
            >
                <img :src="'/storage/' + image" :alt="productName" />
                <template slot="prevButton"
                    ><i class="fas fa-chevron-left"></i
                ></template>
                <template slot="nextButton"
                    ><i class="fas fa-chevron-right"></i
                ></template>
            </div>
        </agile>
    </div>
</template>

<script>
import { VueAgile } from "vue-agile";
export default {
    name: "ProductImagePreview",

    props: {
        productImages: String,
        productName: String
    },

    components: {
        agile: VueAgile
    },

    data: function() {
        return {
            asNavForMain: [],
            asNavForThumbnails: [],
            optionsMain: {
                dots: false,
                fade: true,
                changeDelay: 2500,
                navButtons: false
            },

            optionsThumbnails: {
                autoplay: false,
                centerMode: true,
                dots: true,
                speed: 1500,
                rtl: true,
                navButtons: false,
                slidesToShow: 3,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 5
                        }
                    },

                    {
                        breakpoint: 1000,
                        settings: {
                            //navButtons: true
                        }
                    }
                ]
            }
        };
    },

    computed: {
        images: function() {
            return JSON.parse(this.productImages);
        }
    },

    mounted() {
        this.asNavForMain.push(this.$refs.thumbnails);
        this.asNavForThumbnails.push(this.$refs.main);
    }
};
</script>

<style></style>
