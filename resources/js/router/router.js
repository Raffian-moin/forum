import Vue from 'vue'
import VueRouter from 'vue-router'
import home from '../components/home.vue'
import Question from '../components/question.vue'
import Answer from '../components/answer.vue'
import categoryQuestion from '../components/categoryQuestion.vue'

Vue.use(VueRouter);


const routes = [
    { path: '/', component: home},
    {path: '/question',name: 'question',component: Question,},
    {path: '/question/:id',name: 'answer',component: Answer,props: true,},
    {path: '/category/:id',name: 'categoryQuestion',component: categoryQuestion,props: true,},
    // {path: '/answer',name: 'answer',component: Answer}
  ]
  
  export const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
  })
