<script setup lang="ts">
import FooterBar from "@/components/shared/FooterBar.vue";
import HeaderBar from "@/components/shared/HeaderBar.vue";
</script>
<template>
  <div class="app-wrapper">
    <header-bar />
    <router-view :key="$route.fullPath" />
    <footer-bar />
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>
