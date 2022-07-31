<template>
  <nav class="label-large">
    <a href="./" class="hide-on-mobile"
      ><img
        src="@/assets/style/brightness.svg"
        style="margin-bottom: -5px; margin-right: 5px; height: 24px"
      />{{ $t("message.name") }}</a
    >

    <span id="topNav" class="nav-closed">
      <router-link to="/" class="hide-on-desktop">
        {{ $t("menu.home") }}
      </router-link>
      <router-link to="/#me">
        {{ $t("menu.me") }}
      </router-link>
      <router-link to="/#offer">
        {{ $t("menu.offer") }}
      </router-link>
      <router-link to="/#contact">
        {{ $t("menu.contact") }}
      </router-link>
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
  data() {
    return {
      publicPath: process.env.BASE_URL,
    };
  },
  props: {},
  components: { LocaleChanger },
  methods: {
    toggleMobileNav() {
      let topNav = document.getElementById("topNav");
      let imgReplace = document.getElementById("menuImg");
      if (topNav.classList.contains("nav-closed")) {
        topNav.classList.remove("nav-closed");
        topNav.classList.add("nav-open");
        imgReplace.src = `${this.publicPath}style/close.svg`;
      } else if (topNav.classList.contains("nav-open")) {
        topNav.classList.remove("nav-open");
        topNav.classList.add("nav-closed");
        imgReplace.src = `${this.publicPath}style/menu.svg`;
      }
    },
  },
};
</script>

<style scoped>
.hide-on-desktop {
  color: var(--background);
}

@media (max-width: 576px) {
  .hide-on-desktop {
    color: var(--primary);
  }
  .hide-on-mobile {
    display: none;
  }
}
</style>
