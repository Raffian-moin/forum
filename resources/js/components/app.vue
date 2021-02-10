<template>
<div>
<navbar/>
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
import Navbar from '../components/navbar'
import Category from '../components/category'
import Trending from '../components/trending'

export default {
    components:{
        Navbar,
        Category,
        Trending
        
    },
}
</script>