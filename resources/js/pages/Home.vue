<template>
  <div>
  <app-layout>
   <div class="page-inner">
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							
						</div>
            <!-- start page content -->
						the pages content
             <!-- end page content -->
					</div>
  </app-layout>
 
  </div>
</template>

<script>

export default {
  created(){
      if (!User.loggedIn()) {
        this.$router.push({name: 'login'})
      }
    }

}
</script>

<style>

</style>