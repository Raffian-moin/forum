<template>
    <div>
    <ul class="list-group">
  <li class="list-group-item disabled" v-for="(question,index) in questions" :key="index">
  	<div class="row">
  		<div class="col-12 title">
        <router-link :to="{ name: 'question', params: { id: question.id}}"> 
          <h5>{{question.title}}</h5></router-link>
  			<small>{{question.answers_count}} answers</small> &middot; <small>{{question.category.categoryName}}</small> &middot; <small>{{distanceFromNow(question.created_at)}}</small>
  		</div>
  	</div>
  </li>
</ul>
  <router-view></router-view>
    </div>
</template>>

<script>
import moment from 'moment';

export default {
  components:{

        
    },
	name:"home",
	data(){
        return{
            questions:[]
        }
    },
    methods: {

            distanceFromNow(date) {
         return moment(date,"YYYYMMDD").fromNow()
      },
  },
    created: function () {
    axios.get('/question')
  .then((response) =>{
	this.questions=response.data;
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