<template>
  <div>
    <the-header />
    <the-sidebar />
    <div class="main-panel">
      <div class="content">
        <slot />
      </div>
    </div>
    
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