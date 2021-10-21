<template>
  <component  :is="layout">
   <slot/>
  </component>
</template>

<script>
const defaultLayout = "DefaultLayout";
export default {
  computed: {
    layout() {
      let layout = this.$route.meta.layout || defaultLayout;
      return () => import(`./${layout}.vue`);
    }
  }
}
</script>