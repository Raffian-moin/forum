import Vue from 'vue'
import VueRouter from 'vue-router'
import home from '../components/home.vue'
import Answer from '../components/answer.vue'

Vue.use(VueRouter);


const routes = [
    { path: '/', component: home},
    {path: '/question/:id',name: 'question',component: Answer},
    {path: '/answer',name: 'answer',component: Answer}
  ]
  
  export const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })
