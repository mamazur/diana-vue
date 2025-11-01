<template>
  <nav class="menu">
    <div class="menu-header">
      <h1 class="logo">
        <router-link to="/">
          <img
            src="@/assets/images/brightness.svg"
            style="margin-bottom: -5px; margin-right: 5px; height: 24px"
            alt="Dekoretives Element im Header"
          />{{ $t("message.name") }}
        </router-link>
      </h1>
      <button class="menu-toggle" @click="isOpen = !isOpen">☰</button>
    </div>

    <ul :class="{ open: isOpen }" class="menu-links">
      <router-link to="/">
        {{ $t("menu.me") }}
      </router-link>
      <router-link to="/offer">
        {{ $t("menu.offer") }}
      </router-link>
      <router-link to="/#contact">
        {{ $t("menu.contact") }}
      </router-link>
      <locale-changer />
    </ul>
  </nav>
</template>

<script setup lang="ts">
import { ref } from "vue";
import LocaleChanger from "./LocaleChanger.vue";
const isOpen = ref(false);
</script>

<style scoped>
.menu {
  background: #fff;
  border-bottom: 1px solid #ddd;
  padding: 0.5rem 1rem;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  position: sticky;
  align-items: center;
  top: 0;
  z-index: 9999;
}

.menu-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.25rem;
  font-weight: bold;
}

.menu-toggle {
  font-size: 1.5rem;
  background: none;
  border: none;
  cursor: pointer;
  display: none;
}

/* Menu links */
.menu-links {
  display: flex;
  gap: 1rem;
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-links a {
  text-decoration: none;
  color: #333;
}

/* --- Mobile --- */
@media (max-width: 768px) {
  .menu {
    flex-direction: column;
  }
  .menu-header {
    width: 100%;
  }
  .menu-toggle {
    display: block;
  }

  .menu-links {
    width: 100%;
    display: none;
    flex-direction: column;
    margin-top: 0.5rem;
  }

  .menu-links.open {
    display: flex;
  }
}
</style>
