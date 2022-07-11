<template>
  <div class="container__offer-item">
    <div class="title">{{ title }}</div>
    <p>{{ details }}</p>
    <router-link :to="link"
      ><button class="button__info">
        {{ $t("message.detailed") }}
      </button></router-link
    >
  </div>
</template>

<style>
</style>

<script>
export default {
  name: "OfferItem",
  data: () => ({}),
  props: {
    title: {
      type: String,
      required: false,
    },
    details: {
      type: String,
      required: false,
    },
    link: {
      type: String,
      required: false,
    },
  },
};
</script>
