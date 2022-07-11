<template>
  <div class="app-wrapper">
    <router-view />
    <FooterBar />
  </div>
</template>

<script>
import FooterBar from "@/components/shared/FooterBar.vue";
export default {
  name: "App",
  components: { FooterBar },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>
