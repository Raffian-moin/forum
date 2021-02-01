<template>
    <div>
        <h5 class="Category">Category</h5>
			<ul>
				<li v-for="(category,index) in categories" :key="index"><a href="">{{category.category}}</a></li>
			</ul>
    </div>
</template>

<script>
export default {
    name:'category',
    data(){
        return{
            categories:[]
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