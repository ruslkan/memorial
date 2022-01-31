require("./foundation");

import Vue from "vue";
import store from "./store";
import router from "./router";
import App from "./components/App.vue";

const debug = process.env.NODE_ENV !== "production";
Vue.config.productionTip = false;

//Vue.config.devtools = true;
//Vue.config.debug = true;
//Vue.config.silent = true;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: "#app",
    router,
    store,
    render: h => h(App)
});
