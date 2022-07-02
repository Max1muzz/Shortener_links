/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import { createApp } from "vue";
import router from "./router";
const app = createApp({});
app.component('index', require('./components/index.vue').default);
app.use(router).mount('#app');
