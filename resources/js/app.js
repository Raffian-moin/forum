require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'
import index from './components/index.vue'
import Answer from './components/answer.vue'

Vue.use(VueRouter);
// import index from './components/index.vue';



const routes = [
  { path: '/answer', component: Answer },
  { path: '/', component: index }
]

const router = new VueRouter({
  mode: 'history',
  routes // short for `routes: routes`
})








window.Vue = require('vue');
 Vue.component('index', require('./components/index.vue').default);
 const app = new Vue({
   router,
   el: '#app', 
 });
