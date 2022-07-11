<template>
  <nav class="label-large">
    <a href="./"
      ><img
        src="@/assets/style/brightness.svg"
        style="margin-bottom: -5px; margin-right: 5px; height: 24px"
      />{{ $t("message.name") }}</a
    >

    <span id="topNav" class="nav-closed">
      <a href="#me"> {{ $t("menu.me") }}</a>
      <a href="#offer"> {{ $t("menu.offer") }}</a>
      <a href="#contact">{{ $t("menu.contact") }}</a>
      <LocaleChanger />
    </span>

    <a
      href="javascript:void(0);"
      class="mobile-menu-icon"
      @click="toggleMobileNav()"
    >
      <span id="topNavMobileToggle" class="material-icons"
        ><img id="menuImg" src="@/assets/style/menu.svg"
      /></span>
    </a>
  </nav>
</template>

<style>
</style>

<script>
import LocaleChanger from "@/components/shared/LocaleChanger.vue";
export default {
  name: "HeaderBar",
  data: () => ({}),
  props: {},
  components: { LocaleChanger },
  methods: {
    toggleMobileNav() {
      let topNav = document.getElementById("topNav");
      let imgReplace = document.getElementById("menuImg");
      if (topNav.classList.contains("nav-closed")) {
        topNav.classList.remove("nav-closed");
        topNav.classList.add("nav-open");
        imgReplace.src = "../../../public/style/arrow-up.svg";
      } else if (topNav.classList.contains("nav-open")) {
        topNav.classList.remove("nav-open");
        topNav.classList.add("nav-closed");
        imgReplace.src = "../../../public/style/menu.svg";
      }
    },
  },
};
</script>
