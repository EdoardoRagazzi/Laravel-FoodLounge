require("./bootstrap");

import Vue from 'vue';
import axios from 'axios';

//import Vue from 'vue';
import App from "./App.vue";
import router from "./router";

const app = new Vue({
    el: "#root",
    render: h => h(App),
    router
});
