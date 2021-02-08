<template>
<div>
<div class="question-form">
        <div class="form-group">
         <label for="formGroupExampleInput">title</label>
         <input v-model="addData.title" type="text" class="form-control" id="formGroupExampleInput" placeholder="title">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">description</label>
          <textarea v-model="addData.description" class="form-control" id="exampleFormControlTextarea1" placeholder="write your question"></textarea>
        </div>
        <div class="form-group">
          <label for="sel1">Select Category:</label>
          <select  v-model="addData.selectedCategory" class="form-control" id="sel1">
            <option disabled value="">Please select one</option>
            <option v-bind:value="category.id" v-for="(category,index) in categories" :key="index">{{category.categoryName}}</option>
          </select>
        </div>
        <button @click="addQuestion()" class="btn btn-primary" type="submit">Submit</button>
</div>
</div>
    
</template>

<script>
export default {
    name:'answer',
    data(){
        return{
            categories:[],
            addData:{
            title:'',
            description:'',
            selectedCategory:''
            } 
        }
    },
    methods:{
        addQuestion(){
            axios.post('/question',this.addData)
  .then((response) =>{
    if(response==200){
        console.log("success");
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
    created: function () {
    axios.get('/category')
  .then((response) =>{
    this.categories=response.data;
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