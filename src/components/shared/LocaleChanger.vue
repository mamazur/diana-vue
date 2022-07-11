<template>
  <div class="locale-changer">
    <select @change="updateLanguage()" v-model="$i18n.locale">
      <option v-for="(lang, i) in langs" :key="`Lang${i}`" :value="lang">
        {{ lang }}
      </option>
    </select>
  </div>
</template>

<script>
export default {
  name: "LocaleChanger",
  data() {
    return { langs: ["de", "ru"] };
  },
  methods: {
    updateLanguage() {
      sessionStorage.setItem("locale", this.$i18n.locale);
    },
  },
  mounted() {
    if (sessionStorage.getItem("locale")) {
      this.$i18n.locale = sessionStorage.getItem("locale");
    } else {
      sessionStorage.setItem("locale", this.$i18n.locale);
    }
  },
};
</script>

 