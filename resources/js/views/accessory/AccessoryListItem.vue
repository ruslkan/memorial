<template>
    <div>
        <!-- Begin product category navigation -->
        <div class="category-nav">
            <div
                v-for="categoryProductItem in productCategories"
                :key="categoryProductItem.id"
            >
                <router-link
                    :to="{
                        name: 'product-list-item',
                        params: { number: categoryProductItem.id }
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
                        {{ categoryProductItem.name }}
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
                    tag="button"
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
        <!-- Begin accessory card container -->
        <div class="container__row align-center">
            <accessory-card
                v-for="accessory in filteredAccessories"
                :key="accessory.id"
                :accessory="accessory"
            ></accessory-card>
        </div>
        <!-- End accessory card container -->
    </div>
</template>

<script>
import { mapState } from "vuex";
import AccessoryCard from "../../components/parts/accessory/AccessoryCard.vue";

export default {
    name: "AccessoryListItem",

    components: {
        AccessoryCard
    },

    computed: {
        ...mapState({
            productCategories: state => state.categories.all,
            accessoryCategories: state => state.accessoryCategories.all,
            accessories: state => state.accessories.all
        }),

        categoryId: function() {
            return +this.$route.params.number;
        },

        filteredAccessories: function() {
            return this.$store.getters["accessories/GET_ACCESSORY_BY_CATEGORY"](
                this.categoryId
            );
        }
    }
};
</script>
