<script setup lang="ts">
import cert1 from '@/assets/images/cert1.jpg'
import cert2 from '@/assets/images/cert2.jpg'
import cert3 from '@/assets/images/cert3.jpg'
import cert4 from '@/assets/images/cert4.jpg'
import cert5 from '@/assets/images/cert5.jpg'
import cert6 from '@/assets/images/cert6.jpg'
import OfferItem from '@/components/OfferItem.vue'
import type { CertificateImage, OfferItemData } from '@/types'
import { useI18n } from 'vue-i18n'

const offerItems: OfferItemData[] = [
  { titleKey: 'p_title', detailsKey: 'p_details', link: '/offer#p_title' },
  { titleKey: 'ps_title', detailsKey: 'ps_details', link: '/offer#ps_title' },
  { titleKey: 'prs_title', detailsKey: 'prs_details', link: '/offer#prs_title' },
  { titleKey: 'po_title', detailsKey: 'po_details', link: '/offer#po_title' },
  { titleKey: 'ha_title', detailsKey: 'ha_details', link: '/offer#ha_title' },
  { titleKey: 'ch_title', detailsKey: 'ch_details', link: '/offer#ch_title' },
  { titleKey: 'da_title', detailsKey: 'da_details', link: '/offer#da_title' },
  { titleKey: 'pr_title', detailsKey: 'pr_details', link: '/offer' },
  { titleKey: 're_title', detailsKey: 're_details', link: '/offer' },
]

const certificates: CertificateImage[] = [
  { src: cert2, alt: 'Certificate 2' },
  { src: cert3, alt: 'Certificate 3' },
  { src: cert1, alt: 'Certificate 1' },
  { src: cert4, alt: 'Certificate 4' },
  { src: cert5, alt: 'Certificate 5' },
  { src: cert6, alt: 'Certificate 6' },
]

const certStyle = {
  height: '400px',
  borderRadius: '5px',
  margin: '1rem',
}

const { tm } = useI18n()

const paragraphs = tm('astrology.paragraphs') as string[]
</script>
<template>
  <div class="container">
    <div class="container__item header">
      <h1>
        {{ $t('message.hello') }}
      </h1>
      >
      <a href="./#contact"
        ><button class="button__warning">
          {{ $t('message.contact') }}
        </button></a
      >
    </div>
    <div class="container__item">
      <div class="container__offer grid">
        <div class="container__me">
          <h2>{{ $t('message.welcome') }}</h2>
          <aside>
            <img src="@/assets/images/me.jpg" class="me" />
            <img src="@/assets/images/dav.png" class="dav" />
          </aside>
          <div class="title">{{ $t('message.me') }}</div>
          <p>
            {{ $t('message.me_details') }}
          </p>
        </div>
        <div class="container__me">
          <div class="title">{{ $t('astrology.title') }}</div>
          <p v-for="(line, i) in paragraphs" :key="i">
            {{ line }}
          </p>
        </div>
      </div>
    </div>
    <div class="container__item">
      <h2>{{ $t('certificates.title') }}</h2>
      <img
        v-for="(cert, i) in certificates"
        :key="i"
        :src="cert.src"
        :alt="cert.alt"
        :style="certStyle"
      />
    </div>
    <div class="container__item info--lila">
      <div class="body-large">
        {{ $t('info.box1') }}
      </div>
    </div>
    <div class="container__item">
      <h2>{{ $t('offer.title') }}</h2>

      <div class="container__offer grid">
        <OfferItem
          v-for="item in offerItems"
          :key="item.titleKey"
          :title="$t(`offer.${item.titleKey}`)"
          :details="$t(`offer.${item.detailsKey}`)"
          :link="item.link"
        />
      </div>
    </div>
    <div class="container__item info--blue">
      <div class="body-large">
        {{ $t('info.box2') }}
      </div>
    </div>
    <div class="container__item" id="contact">
      <h2>{{ $t('contact.title') }}</h2>
      <div class="body-large">
        {{ $t('contact.details') }}
      </div>
      <div class="container__contact-img">
        <a href="https://www.facebook.com/Astrologin-Diana-Galkin-105996178601378" target="_blank"
          ><img
            src="@/assets/images/facebook.svg"
            style="margin-bottom: -5px; margin-right: 5px; height: 24px"
        /></a>
        <a href="https://www.instagram.com/dianagalkin_astro/" target="_blank"
          ><img
            src="@/assets/images/instagram.svg"
            style="margin-bottom: -5px; margin-right: 5px; height: 24px"
        /></a>
        <a href="mailto: dianagalkin.astrolog@gmail.com" target="_blank"
          ><img
            src="@/assets/images/email.svg"
            style="margin-bottom: -5px; margin-right: 5px; height: 24px"
        /></a>
        <a href="tel: +491570882277" target="_blank"
          ><img
            src="@/assets/images/phone.svg"
            style="margin-bottom: -5px; margin-right: 5px; height: 24px"
        /></a>
      </div>
      <p>
        {{ $t('contact.details_big') }}
      </p>
    </div>
    <div class="container__item info--lila">
      <div class="body-large">
        {{ $t('info.box3') }}
      </div>
    </div>
  </div>
</template>

<style scoped>
.container {
  margin: auto;
  background: var(--white);
  user-select: none;
}
.container__item {
  padding: 4rem;
}

.header {
  background: url('@/assets/images/header_bcgrd.webp') center/cover no-repeat;
  min-height: 400px;
  margin: 0;
  padding: 24px;
  color: var(--background);
  text-align: center;
}

.container__offer.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 4rem;
}

.container__offer.grid > * {
  display: flex;
  flex-direction: column;
  height: 100%;
}
aside {
  display: flex;
  align-items: end;
  .me {
    border-radius: 50%;
    height: 175px;
    width: 175px;
  }
  .dav {
    width: 50%;
    height: 50%;
  }
}

.info--lila {
  color: var(--white);
  background: linear-gradient(
    109.6deg,
    rgba(41, 125, 182, 1) 3.6%,
    rgba(77, 58, 151, 1) 51%,
    rgba(103, 55, 115, 1) 92.9%
  );
}

.info--blue {
  color: var(--white);
  background: linear-gradient(110.1deg, rgba(30, 2, 83, 1) 44.2%, rgba(198, 55, 160, 1) 138.2%);
}

@media (max-width: 676px) {
  .container__offer.grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 4rem;
  }
}
</style>
