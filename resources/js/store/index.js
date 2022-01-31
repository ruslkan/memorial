import Vue from "vue";
import Vuex from "vuex";
import createPersistedState from "vuex-persistedstate";

import categories from "./modules/categories";
import products from "./modules/products";
import materials from "./modules/materials";
import stellas from "./modules/stellas";
import pillars from "./modules/pillars";
import pedestals from "./modules/pedestals";
import parterres from "./modules/parterres";
import tombstones from "./modules/tombstones";
import services from "./modules/services";
import accessories from "./modules/accessories";
import accessoryCategories from "./modules/accessoryCategories";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        categories,
        products,
        materials,
        stellas,
        pillars,
        pedestals,
        parterres,
        tombstones,
        services,
        accessories,
        accessoryCategories
    },
    plugins: [
        createPersistedState({
            paths: [
                "categories",
                "products",
                "materials",
                "stellas",
                "pedestals",
                "parterres",
                "tombstones",
                "services",
                "pillars",
                "accessories",
                "accessoryCategories"
            ]
        })
    ]
});
