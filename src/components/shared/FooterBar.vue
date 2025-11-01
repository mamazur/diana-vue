<template>
  <footer>
    <div class="footer__left">
      <a href="/"
        ><img
          src="@/assets/images/brightness.svg"
          style="margin-bottom: -5px; margin-right: 5px; height: 24px"
          alt="Dekoratives Element im Footer"
        />{{ $t('message.name') }} - {{ new Date().getFullYear() }}</a
      >
    </div>
    <div class="footer__right">
      <div class="impressum">
        <router-link to="/imprint">Impressum & Datenschutz</router-link>
      </div>
    </div>
  </footer>
</template>
<style scoped>
footer,
.label-large {
  padding: 1rem;
  display: flex;
  font-family: 'Inter', sans-serif;
  justify-content: space-between;
  flex-direction: row;
  background: var(--white);
}

.footer__right,
.footer__left {
  display: flex;
  flex-direction: row;
  align-items: center;
}

.footer__right > div,
.footer__left {
  font-size: 0.8rem;
}

.footer__right > div,
.footer__left > div {
  margin-right: 1rem;
}
</style>
