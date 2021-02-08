require('./bootstrap');
import Vue from 'vue'
import {router} from './router/router'


// import index from './components/index.vue';












window.Vue = require('vue');
 Vue.component('app', require('./components/app.vue').default);
 const app = new Vue({
   router,
   el: '#app', 
 });
