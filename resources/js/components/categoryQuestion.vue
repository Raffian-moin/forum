<template>
    <div>
    <ul class="list-group" v-for="(categoryQuestion,index) in categoryWiseQuestions" :key="index">
  <li class="list-group-item disabled" v-for="(question,index) in categoryQuestion.questions" :key="index">
  	<div class="row">
  		<div class="col-12 title">
        <router-link :to="{ name: 'answer', params: { slug: question.slug}}"> 
          <h5>{{question.title}}</h5></router-link>
  			<small>{{question.answers_count}} answers</small>&middot; <small>{{question.category.categoryName}}</small> &middot; <small>{{distanceFromNow(question.created_at)}}</small>
  		</div>
  	</div>
  </li>
</ul>
    </div>
    
</template>

<script>
import moment from 'moment';
export default {
    name:'category',
    data(){
        return{
            categoryWiseQuestions:[]
        }
    },
     methods: {

            distanceFromNow(date) {
         return moment(date,"YYYYMMDD").fromNow()
      },
     },
    created: function () {
    axios.get('/category/' +this.$route.params.slug)
  .then((response) =>{
	this.categoryWiseQuestions=response.data;
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });
  }
}
</script>