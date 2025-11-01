<script setup lang="ts">
defineProps<{
  title: string
  details: string
  link: string
}>()
</script>
<template>
  <div class="container__offer-item">
    <div class="title">{{ title }}</div>
    <p>{{ details }}</p>
    <router-link :to="link"
      ><button class="button__info">
        {{ $t('message.detailed') }}
      </button></router-link
    >
  </div>
</template>
