<script lang="ts" setup>
import type { OfferSection } from '@/types'

const offers: OfferSection[] = [
  {
    id: 'p_title',
    titleKey: 'p_title',
    paragraphKeys: ['hor_1', 'hor_2'],
    sectionTitleKey: 'title',
    timeKey: 'time',
  },
  {
    id: 'ch_title',
    titleKey: 'ch_title',
    paragraphKeys: ['hor_ch_1', 'hor_ch_2'],
    sectionTitleKey: 'title',
    timeKey: 'time',
  },
  {
    id: 'da_title',
    titleKey: 'da_title',
    paragraphKeys: ['da_details'],
    timeKey: 'time',
  },
  {
    id: 'ps_title',
    titleKey: 'ps_title',
    paragraphKeys: ['ps_1', 'ps_2'],
    sectionTitleKey: 'ps_title_2',
    timeKey: 'time',
  },
  {
    titleKey: 'pr_title',
    paragraphKeys: ['pr_1', 'pr_2'],
    sectionTitleKey: 'pr_title_2',
    timeKey: 'time2',
  },
  {
    titleKey: 'prs_title',
    paragraphKeys: ['prs_1', 'prs_2'],
    sectionTitleKey: 'prs_title_2',
    timeKey: 'time',
  },
  {
    id: 'po_title',
    titleKey: 'po_title',
    paragraphKeys: ['pro_1'],
    timeKey: 'time',
  },
  {
    id: 're_title',
    titleKey: 're_title',
    paragraphKeys: ['re_details', 're_details2'],
    timeKey: 'time',
  },
  {
    id: 'ha_title',
    titleKey: 'ha_title',
    paragraphKeys: ['ha_details'],
    timeKey: 'time3',
  },
]
</script>

<template>
  <div class="container">
    <div class="container__header container__header_detail">
      <h1>{{ $t('offer.title') }}</h1>
    </div>

    <div class="container__info--lila">
      <div class="body-large">{{ $t('info.box3') }}</div>
    </div>

    <div v-for="offer in offers" :key="offer.id" class="container_offer_det" :id="offer.id">
      <div class="container__offer-it">
        <h2>{{ $t(`offer_more.${offer.titleKey}`) }}</h2>

        <p v-for="(p, i) in offer.paragraphKeys" :key="i">
          {{ $t(`offer_more.${p}`) }}
        </p>

        <div v-if="offer.sectionTitleKey" class="title">
          {{ $t(`offer_more.${offer.sectionTitleKey}`) }}
        </div>

        <p v-if="offer.sectionTextKey">
          {{ $t(`offer_more.${offer.sectionTextKey}`) }}
        </p>

        <p>{{ $t(`offer_more.${offer.timeKey ?? 'time'}`) }}</p>
      </div>
    </div>

    <div class="container__info--blue">
      <div class="body-large">{{ $t('offer_more.conslusion') }}</div>
    </div>
  </div>
</template>

<style scoped>
.container {
  margin: auto;
  background: var(--white);
  user-select: none;
}
.container__header {
  position: relative;
  background: url('@/assets/images/header_bcgrd.webp');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  height: 400px;
}

.container__header_detail {
  height: 400px;
}

.container__header > h1 {
  position: absolute;
  color: var(--background);
  text-align: center;
}

.container__header_detail > h1 {
  top: 15%;
}

.container_offer_det {
  padding: 4rem;
}

.container_offer_det:nth-child(even) {
  background-color: var(--primary-light);
}
.container__info--lila {
  background: var(--primary);
  color: var(--white);

  background-image: linear-gradient(
    109.6deg,
    rgba(41, 125, 182, 1) 3.6%,
    rgba(77, 58, 151, 1) 51%,
    rgba(103, 55, 115, 1) 92.9%
  );
}

.container__info--blue {
  background: var(--secondary);
  color: var(--white);
  background-image: linear-gradient(
    110.1deg,
    rgba(30, 2, 83, 1) 44.2%,
    rgba(198, 55, 160, 1) 138.2%
  );
}
.container__info--lila > .body-large,
.container__info--blue > .body-large {
  padding: 4rem 12rem 4rem 4rem;
}
</style>
