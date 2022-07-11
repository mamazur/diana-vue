<template>
  <div>
    <HeaderBar />
    <div class="container">
      <div class="container__header">
        <h1>
          {{ $t("message.hello") }}
        </h1>
        >
        <a href="./index.html#contact"
          ><button class="button__warning">
            {{ $t("message.contact") }}
          </button></a
        >
      </div>
      <div class="container__me" id="me">
        <div class="container__me-left">
          <h2>{{ $t("message.welcome") }}</h2>
          <div class="container__me-left-img">
            <img src="@/assets/me.jpg" />
            <div class="title">{{ $t("message.me") }}</div>
            <p>
              {{ $t("message.me_details") }}
            </p>
          </div>
        </div>
        <div class="container__me-right">
          <div class="title">{{ $t("astrology.title") }}</div>
          <p>
            {{ $t("astrology.p1") }}
          </p>
          <p>
            {{ $t("astrology.p2") }}
          </p>
          <p>
            {{ $t("astrology.p3") }}
          </p>
          <p>
            {{ $t("astrology.p4") }}
          </p>
        </div>
      </div>
      <div class="container__certificates" id="cert">
        <h2>{{ $t("certificates.title") }}</h2>

        <div class="container__contact-img">
          <img
            src="@/assets/cert2.jpg"
            style="height: 400px; border-radius: 5px; margin: 1rem"
          />
          <img
            src="@/assets/cert3.jpg"
            style="height: 400px; border-radius: 5px; margin: 1rem"
          />
          <img
            src="@/assets/cert1.jpg"
            style="height: 400px; border-radius: 5px; margin: 1rem"
          />
        </div>
      </div>
      <div class="container__info--lila">
        <div class="body-large">
          {{ $t("info.box1") }}
        </div>
      </div>
      <div class="container_offer" id="offer">
        <div class="container__offer-left">
          <h2>{{ $t("offer.title") }}</h2>
          <OfferItem
            :title="$t('offer.p_title')"
            :details="$t('offer.p_details')"
            link="/offer#personal-horoscope"
          />
          <OfferItem
            :title="$t('offer.ps_title')"
            :details="$t('offer.ps_details')"
            link="/offer#partner"
          />
          <OfferItem
            :title="$t('offer.po_title')"
            :details="$t('offer.po_details')"
            link="/offer#profession"
          />
        </div>
        <div class="container__offer-right">
          <OfferItem
            :title="$t('offer.da_title')"
            :details="$t('offer.da_details')"
            link="/offer#event-date"
          />
          <OfferItem
            :title="$t('offer.pr_title')"
            :details="$t('offer.pr_details')"
            link="/offer#personal-outlook"
          />
          <OfferItem
            :title="$t('offer.re_title')"
            :details="$t('offer.re_details')"
            link="/offer#birth"
          />
        </div>
      </div>
      <div class="container__info--blue">
        <div class="body-large">
          {{ $t("info.box2") }}
        </div>
      </div>
      <div class="container__contact" id="contact">
        <h2>{{ $t("contact.title") }}</h2>
        <div class="body-large">
          {{ $t("contact.details") }}
        </div>
        <div class="container__contact-img">
          <a
            href="https://www.facebook.com/Astrologin-Diana-Galkin-105996178601378"
            target="_blank"
            ><img
              src="@/assets/style/facebook.svg"
              style="margin-bottom: -5px; margin-right: 5px; height: 24px"
          /></a>
          <a href="https://www.instagram.com/dianagalkin_astro/" target="_blank"
            ><img
              src="@/assets/style/instagram.svg"
              style="margin-bottom: -5px; margin-right: 5px; height: 24px"
          /></a>
          <a href="mailto: dianagalkin.astrolog@gmail.com" target="_blank"
            ><img
              src="@/assets/style/email.svg"
              style="margin-bottom: -5px; margin-right: 5px; height: 24px"
          /></a>
          <a href="tel: +491570882277" target="_blank"
            ><img
              src="@/assets/style/phone.svg"
              style="margin-bottom: -5px; margin-right: 5px; height: 24px"
          /></a>
        </div>
        <p>
          {{ $t("contact.details_big") }}
        </p>
      </div>
      <div class="container__info--lila">
        <div class="body-large">
          {{ $t("info.box3") }}
        </div>
      </div>
    </div>
  </div>
</template>

<style>
</style>

<script>
import HeaderBar from "@/components/shared/HeaderBar.vue";
import OfferItem from "@/components/OfferItem.vue";
export default {
  name: "HomePage",
  components: { HeaderBar, OfferItem },
};
</script>
