<template>
 <div class="main-panel">
        <div class="content">
          <div class="page-inner">
            <div class="page-header">
              <h4 class="page-title">Dashboard</h4>
              <ul class="breadcrumbs">
                <li class="nav-home">
                  <a href="#">
                    <i class="flaticon-home"></i>
                  </a>
                </li>
                
                
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                   header
                  </div>
                  <div class="card-body">
                  home content
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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