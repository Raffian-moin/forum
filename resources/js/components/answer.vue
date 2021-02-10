<template>
      <div class="question-section">
      <div v-for="(question,index) in questions" :key="index">
      <h1>{{question.title}}</h1>
      <p>{{question.description}}</p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Answer
      </button>
    <div class="collapse" id="collapseExample">
     <div class="question-form">
        <div class="form-group">
          <textarea v-model="AnswerData.answerBody" class="form-control" id="exampleFormControlTextarea1" placeholder="write your question"></textarea>
        </div>
        <button @click="addAnswer(question.id)" class="btn btn-primary" type="submit">Submit</button>
</div>
    </div>
      <h3>{{question.answers_count}} Answers</h3>
      </div>
      <div class="answer-section">
        <ul class="list-group" v-for="(answers,index) in questions" :key="index">
  <li class="list-group-item disabled" v-for="(answer,index) in answers.answers" :key="index">
    <div class="row">
      <div class="col-12 title">
        <p>{{answer.answerBody}}</p>
        <small>{{distanceFromNow(answer.created_at)}}</small><br>
        <a href=""><i class="fas fa-thumbs-up"></i>{{answer.likes_count}}</a>
        <a href=""><i class="fas fa-thumbs-down"></i> 4 </a>
      </div>
    </div>
  </li>
</ul>
      </div>
    </div>

    
</template>

<script>
import moment from 'moment';
export default {
    name:'answer',
    data(){
        return{
            questions:[],
            AnswerData:{
            answerBody:'',
            id:''
            }
        }
    },
    methods:{
      distanceFromNow(date) {
         return moment(date,"YYYYMMDD").fromNow()
      },
      addAnswer(id){
        this.AnswerData.id=id;
        axios.post('/answer',this.AnswerData)
  .then((response) =>{
    if(response.status==200){
      this.AnswerData.answerBody=''
    }
  })
  .catch(function (error) {
    // handle error
    console.log(error);
  })
  .then(function () {
    // always executed
  });
      }
    },
    created() {
    axios.get("/question/" +this.$route.params.id)
    .then((response) =>{
	this.questions=response.data;
    console.log(this.questions);
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
