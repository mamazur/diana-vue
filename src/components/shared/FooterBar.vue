<template>
  <footer>
    <div class="footer__left">
      <a href="/"
        ><img
          src="@/assets/style/brightness.svg"
          style="margin-bottom: -5px; margin-right: 5px; height: 24px"
        />{{ $t("message.name") }} - 2024</a
      >
    </div>
    <div class="footer__right">
      <div class="impressum">
        <router-link to="/imprint">Impressum & Datenschutz</router-link>
      </div>
    </div>
  </footer>
</template>

<style>
</style>

<script>
export default {
  name: "FooterBar",
  data: () => ({}),
  props: {},
  components: {},
  methods: {},
};
</script>
