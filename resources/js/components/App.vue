<template>
    <router-view></router-view>
</template>

<script>
export default {
    name: "app",

    created() {
        this.$store.dispatch("categories/GET_CATEGORIES");
        this.$store.dispatch("products/GET_PRODUCTS");
        this.$store.dispatch("materials/GET_MATERIALS");
        this.$store.dispatch("stellas/GET_STELLAS");
        this.$store.dispatch("pillars/GET_PILLARS");
        this.$store.dispatch("pedestals/GET_PEDESTALS");
        this.$store.dispatch("parterres/GET_PARTERRES");
        this.$store.dispatch("tombstones/GET_TOMBSTONES");
        this.$store.dispatch("services/GET_SERVICES");
        this.$store.dispatch("accessories/GET_ACCESSORIES");
        this.$store.dispatch("accessoryCategories/GET_ACCESSORY_CATEGORIES");
    }
};
</script>
