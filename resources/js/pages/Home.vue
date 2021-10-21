<template>
  <div>
  home page
 
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