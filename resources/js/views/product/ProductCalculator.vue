<template>
    <div class="container">
        <div v-if="product" class="product-calculator">
            <div class="container__row">
                <div class="product-calculator__image-area">
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
                        class="product-calculator__image"
                        v-else-if="product.image"
                        :src="'/storage/' + product.image"
                        :alt="product.name"
                    />
                    <!-- End one image -->

                    <!-- Begin image stub -->
                    <img
                        class="product-calculator__image"
                        v-else
                        src="https://dummyimage.com/640x360/fff/aaa"
                        :alt="product.name"
                    />
                    <!-- End image stub -->

                    <!-- Begin total total payment price -->
                    <p class="product-calculator__price">
                        <strong>{{ calcPayment }}</strong
                        ><span class="product-calculator__price-note">*</span>
                        <span class="product-calculator__price-unit">руб.</span>
                    </p>
                    <!-- End total total payment price -->

                    <p class="product-calculator__note">
                        *Окончательная стоимость комплекта при оформлении
                        договора
                    </p>

                    <!-- Begin route button to main directory -->
                    <div class="product-calculator__button-main">
                        <router-link
                            :to="linkOpenMain"
                            custom
                            v-slot="{ navigate }"
                        >
                            <button
                                @click="navigate"
                                @keypress.enter="navigate"
                                role="link"
                                type="button"
                                class="button-main"
                            >
                                В каталог
                            </button>
                        </router-link>
                    </div>
                    <!-- End route button to main directory -->
                </div>

                <!-- Begin product attribute -->
                <div class="product-calculator__attribute">
                    <div class="attribute">
                        <h3 class="attribute__headline">
                            {{ product.name }}
                        </h3>
                        <div
                            class="container__separator container__separator_large"
                        ></div>

                        <div class="product-calculator__select">
                            <fieldset
                                class="attribute__item attribute__radio radio"
                            >
                                <legend class="attribute__title radio__title">
                                    Стелла
                                </legend>

                                <!-- Begin selected material for stella -->
                                <input-select
                                    v-model="selected.materialStella"
                                    :options="materials"
                                    disabledOptionName="Выбрать материал для стеллы"
                                ></input-select>
                                <!-- End selected material for stella -->

                                <!-- Begin radiobutton select calculator stellas -->
                                <ul class="radio__list">
                                    <li
                                        v-for="(option,
                                        index) in filteredStellas"
                                        :key="index"
                                        class="radio__item"
                                    >
                                        <input-radio
                                            v-model="selected.stella"
                                            :index="index"
                                            :inputValue="option.price"
                                            :label="option.full_size"
                                        ></input-radio>
                                    </li>
                                </ul>
                                <!-- End radiobutton select calculator stellas -->

                                <div
                                    v-if="selected.materialStella"
                                    class="product-calculator__button-group"
                                >
                                    <button-counter
                                        v-model="quantity.stella"
                                        class="quantity product-calculator__quantity"
                                    ></button-counter>

                                    <button
                                        class="button-main radio__button"
                                        @click="resetStella"
                                    >
                                        Отмена
                                    </button>
                                </div>
                            </fieldset>
                            <div class="container__separator"></div>

                            <fieldset
                                class="attribute__item attribute__radio radio"
                            >
                                <legend class="attribute__title radio__title">
                                    Столбик
                                </legend>

                                <!-- Begin selected material for pillar -->
                                <input-select
                                    v-model="selected.materialPillar"
                                    :options="materials"
                                    disabledOptionName="Выбрать материал для столбика"
                                ></input-select>
                                <!-- End selected material for pillar -->

                                <!-- Begin radiobutton select calculator pillars -->
                                <ul class="radio__list">
                                    <li
                                        v-for="(option,
                                        index) in filteredPillars"
                                        :key="index"
                                        class="radio__item"
                                    >
                                        <input-radio
                                            v-model="selected.pillar"
                                            :index="index"
                                            :inputValue="option.price"
                                            :label="option.full_size"
                                        ></input-radio>
                                    </li>
                                </ul>
                                <!-- End radiobutton select calculator pillars -->

                                <div
                                    v-if="selected.materialPillar"
                                    class="product-calculator__button-group"
                                >
                                    <button-counter
                                        v-model="quantity.pillar"
                                        class="quantity product-calculator__quantity"
                                    ></button-counter>

                                    <button
                                        class="button-main radio__button"
                                        @click="resetPillar"
                                    >
                                        Отмена
                                    </button>
                                </div>
                            </fieldset>

                            <div class="container__separator"></div>

                            <fieldset class="attribute__radio radio">
                                <legend class="radio__title">
                                    Тумба
                                </legend>

                                <!-- Begin selected material for pedestal -->
                                <input-select
                                    v-model="selected.materialPedestal"
                                    :options="materials"
                                    disabledOptionName="Выбрать материал для тумбы"
                                ></input-select>
                                <!-- End selected material for pedestal -->

                                <!-- Begin radiobutton select calculator pedestals -->
                                <ul class="radio__list">
                                    <li
                                        v-for="(option,
                                        index) in filteredPedestals"
                                        :key="index"
                                        class="radio__item"
                                    >
                                        <input-radio
                                            v-model="selected.pedestal"
                                            :index="index"
                                            :inputValue="option.price"
                                            :label="option.full_size"
                                        ></input-radio>
                                    </li>
                                </ul>
                                <!-- End radiobutton select calculator pedestals -->

                                <div
                                    v-if="selected.materialPedestal"
                                    class="product-calculator__button-group"
                                >
                                    <button-counter
                                        v-model="quantity.pedestal"
                                        class="quantity product-calculator__quantity"
                                    ></button-counter>

                                    <button
                                        class="button-main radio__button"
                                        @click="resetPedestal"
                                    >
                                        Отмена
                                    </button>
                                </div>
                            </fieldset>
                            <div class="container__separator"></div>

                            <fieldset class="attribute__radio radio">
                                <legend class="radio__title">
                                    Цветник
                                </legend>

                                <!-- Begin selected material for parterre -->
                                <input-select
                                    v-model="selected.materialParterre"
                                    :options="materials"
                                    disabledOptionName="Выбрать материал для цветника"
                                ></input-select>
                                <!-- End selected material for parterre -->

                                <!-- Begin radiobutton select calculator parterres -->
                                <ul class="radio__list">
                                    <li
                                        v-for="(option,
                                        index) in filteredParterres"
                                        :key="index"
                                        class="radio__item"
                                    >
                                        <input-radio
                                            v-model="selected.parterre"
                                            :index="index"
                                            :inputValue="option.price"
                                            :label="option.full_size"
                                        ></input-radio>
                                    </li>
                                </ul>
                                <!-- End radiobutton select calculator parterres -->

                                <div
                                    v-if="selected.materialParterre"
                                    class="product-calculator__button-group"
                                >
                                    <button-counter
                                        v-model="quantity.parterre"
                                        class="quantity product-calculator__quantity"
                                    ></button-counter>

                                    <button
                                        class="button-main radio__button"
                                        @click="resetParterre"
                                    >
                                        Отмена
                                    </button>
                                </div>
                            </fieldset>
                            <div class="container__separator"></div>

                            <fieldset class="attribute__radio radio">
                                <legend class="radio__title">
                                    Надгробная плита
                                </legend>

                                <!-- Begin selected material for tombstone -->
                                <input-select
                                    v-model="selected.materialTombstone"
                                    :options="materials"
                                    disabledOptionName="Выбрать материал для надгробной плиты"
                                ></input-select>
                                <!-- End selected material for tombstone -->

                                <!-- Begin radiobutton select calculator tombstones -->
                                <ul class="radio__list">
                                    <li
                                        v-for="(option,
                                        index) in filteredTombstones"
                                        :key="index"
                                        class="radio__item"
                                    >
                                        <input-radio
                                            v-model="selected.tombstone"
                                            :index="index"
                                            :inputValue="option.price"
                                            :label="option.full_size"
                                        ></input-radio>
                                    </li>
                                </ul>
                                <!-- End radiobutton select calculator tombstones -->
                                <div
                                    v-if="selected.materialTombstone"
                                    class="product-calculator__button-group"
                                >
                                    <button-counter
                                        v-model="quantity.tombstone"
                                        class="quantity product-calculator__quantity"
                                    ></button-counter>

                                    <button
                                        class="button-main radio__button"
                                        @click="resetTombstone"
                                    >
                                        Отмена
                                    </button>
                                </div>
                            </fieldset>
                            <div class="container__separator"></div>
                        </div>

                        <div
                            v-if="services"
                            class="product-calculator__service"
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
</template>
<script>
import { mapState } from "vuex";
import ButtonCounter from "../../components/parts/button/ButtonCounter.vue";
import InputCheckbox from "../../components/parts/input/InputCheckbox.vue";
import InputRadio from "../../components/parts/input/InputRadio.vue";
import InputSelect from "../../components/parts/input/InputSelect.vue";
import ProductImagePreview from "../../components/parts/product/ProductImagePreview.vue";
export default {
    name: "ProductCalculator",

    components: {
        ProductImagePreview,
        InputSelect,
        InputCheckbox,
        InputRadio,
        ButtonCounter
    },

    data: function() {
        return {
            selected: {
                materialStella: "",
                materialPillar: "",
                materialPedestal: "",
                materialParterre: "",
                materialTombstone: "",
                stella: "",
                pillar: "",
                pedestal: "",
                parterre: "",
                tombstone: "",
                services: []
            },
            quantity: {
                stella: 1,
                pillar: 1,
                parterre: 1,
                pedestal: 1,
                tombstone: 1
            }
        };
    },

    computed: {
        ...mapState({
            materials: state => state.materials.all,
            services: state => state.services.all
        }),

        product() {
            return this.$store.getters["products/GET_PRODUCT_BY_ID"](
                this.productId
            );
        },

        productId: function() {
            return +this.$route.params.id;
        },

        linkOpenMain: function() {
            return "/";
        },

        filteredStellas: function() {
            return this.$store.getters["stellas/GET_STELLA_BY_MATERIAL"](
                this.selected.materialStella
            );
        },

        filteredPillars: function() {
            return this.$store.getters["pillars/GET_PILLAR_BY_MATERIAL"](
                this.selected.materialPillar
            );
        },

        filteredPedestals: function() {
            return this.$store.getters["pedestals/GET_PEDESTAL_BY_MATERIAL"](
                this.selected.materialPedestal
            );
        },

        filteredParterres: function() {
            return this.$store.getters["parterres/GET_PARTERRE_BY_MATERIAL"](
                this.selected.materialParterre
            );
        },

        filteredTombstones: function() {
            return this.$store.getters["tombstones/GET_TOMBSTONE_BY_MATERIAL"](
                this.selected.materialTombstone
            );
        },

        servicePrice: function() {
            return this.selected.services.reduce((sum, item) => sum + item, 0);
        },

        calcPayment: function(e) {
            let total = 0;

            let qStella = this.quantity.stella;
            let qPillar = this.quantity.pillar;
            let qPedestal = this.quantity.pedestal;
            let qParterre = this.quantity.parterre;
            let qTombstone = this.quantity.tombstone;

            let sStella = Number(this.selected.stella);
            let sPillar = Number(this.selected.pillar);
            let sPedestal = Number(this.selected.pedestal);
            let sParterre = Number(this.selected.parterre);
            let sTombstone = Number(this.selected.tombstone);

            let servPrice = Number(this.servicePrice);

            total =
                qStella * sStella +
                qPillar * sPillar +
                qPedestal * sPedestal +
                qParterre * sParterre +
                qTombstone * sTombstone +
                servPrice;

            return total.toFixed(2);
        }
    },

    methods: {
        resetStella: function(event) {
            this.selected.stella = "";
            this.quantity.stella = 1;
        },

        resetPillar() {
            this.selected.pillar = 0;
            this.quantity.pillar = 1;
        },

        resetPedestal() {
            this.selected.pedestal = 0;
            this.quantity.pedestal = 1;
        },

        resetParterre() {
            this.selected.parterre = 0;
            this.quantity.parterre = 1;
        },

        resetTombstone() {
            this.selected.tombstone = 0;
            this.quantity.tombstone = 1;
        }
    }
};
</script>
