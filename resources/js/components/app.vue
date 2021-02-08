<template>
<div>
<div id="navigation">
	<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="#">
	<img src="yahoo.png" width="30" height="30" alt="">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  	 <form class="mx-2 my-auto d-inline w-50 m-auto">
   <div class="input-group">
      <input type="text" class="form-control form-rounded" placeholder="Search here">
       <span class="input-group-append">
       <button class="btn btn-outline-secondary" type="button">Search</button>
       </span>
    </div>
</form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active ask">
		  <router-link to="/answer" class="nav-link btn btn-primary btn-lg active"><i class="fa fa-plus"></i>
        	Ask</router-link>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="far fa-user"></i> Raffianmoin@gmail.com</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
      </li>
    </ul>
  </div>
</nav>
</div>

<!-- end navigation -->

<!-- start main section -->
<div id="main-section">
	<div class="row">
		<div class="col-md-2">
			<category/>
		</div>
        <div class="col-md-7">
            <router-view></router-view>
		</div>
		<div class="col-md-3">
			<trending/>

		</div>
	</div>
</div>
<!-- end main section -->
</div>
    <!-- start navigation -->

</template>

<script>
import Category from '../components/category'
import Trending from '../components/trending'

export default {
    components:{
        Category,
        Trending
        
    },
}
</script>