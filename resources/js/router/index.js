import VueRouter from "vue-router";
import Vue from "vue";

import ProductList from "../views/product/ProductList";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "product-list",
        component: ProductList,
        props: true
    },

    {
        path: "/product-catalog/:number",
        name: "product-list-item",
        component: () => import("../views/product/ProductListItem"),
        props: true
    },

    {
        path: "/product-catalog/product/:id",
        name: "product-item",
        component: () => import("../views/product/ProductItem"),
        props: true
    },

    {
        path: "/product-catalog/product/:id/calculator",
        name: "product-calculator",
        component: () => import("../views/product/ProductCalculator"),
        props: true
    },

    {
        path: "/accessory-catalog/:number",
        name: "accessory-list-item",
        component: () => import("../views/accessory/AccessoryListItem"),
        props: true
    },

    {
        path: "/accessory-catalog/accessory/:id",
        name: "accessory-item",
        component: () => import("../views/accessory/AccessoryItem"),
        props: true
    },

    {
        path: "*",
        name: "not-found",
        component: () => import("../components/NotFound")
    }
];

export default new VueRouter({
    mode: "history",
    routes
});
