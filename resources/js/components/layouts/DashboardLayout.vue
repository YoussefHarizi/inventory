<template>
  <div>
    <the-header />
    <the-sidebar />
    
          <!-- start page content -->
          <slot />
          <!-- end page content -->
     
  </div>
</template>

<script>
import TheHeader from "../layouts/TheHeader";
import TheSidebar from "../layouts/TheSidebar";

export default {
  components: {
    TheHeader,
    TheSidebar,
  },
};
</script>

<style>
</style>