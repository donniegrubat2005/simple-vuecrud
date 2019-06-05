

require('./bootstrap');

window.Vue = require('vue');


import Vue from 'vue'
import Router from './routes'
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);

Vue.component('navbar', require('./components/employee/Navbar.vue').default);

const app = new Vue({
    el: '#app',
    router: Router
});
