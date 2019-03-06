require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue';
import VueRouter from 'vue-router';
import {routes} from './routes';
import Gate from './Gate';

Vue.prototype.$gate = new Gate(window.user);

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
});

const app = new Vue({
    el: '#app',
    router
});
