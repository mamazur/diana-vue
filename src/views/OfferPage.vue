<template>
  <div>
    <HeaderBar />
    <div class="container">
      <div class="container__header container__header_detail">
        <h1>{{ $t("offer.title") }}</h1>
      </div>
      <div class="container__info--lila">
        <div class="body-large">
          {{ $t("info.box3") }}
        </div>
      </div>
      <div class="container_offer_det" id="p_title">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.p_title") }}</h2>
          <p>
            {{ $t("offer_more.hor_1") }}
          </p>
          <div class="title">{{ $t("offer_more.title") }}</div>
          <p>
            {{ $t("offer_more.hor_2") }}
          </p>
          <p>{{ $t("offer_more.time") }}</p>
        </div>
      </div>
      <div class="container_offer_det" id="ch_title">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.ch_title") }}</h2>
          <p>
            {{ $t("offer_more.hor_ch_1") }}
          </p>
          <div class="title">{{ $t("offer_more.title") }}</div>
          <p>
            {{ $t("offer_more.hor_ch_2") }}
          </p>
          <p>{{ $t("offer_more.time") }}</p>
        </div>
      </div>
      <div class="container_offer_det" id="da_title">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.da_title") }}</h2>

          <p>
            {{ $t("offer_more.da_details") }}
          </p>
          <p>{{ $t("offer_more.time") }}</p>
        </div>
      </div>
      <div class="container_offer_det" id="ps_title">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.ps_title") }}</h2>

          <p>
            {{ $t("offer_more.ps_1") }}
          </p>

          <div class="title">
            {{ $t("offer_more.ps_title_2") }}
          </div>
          <p>
            {{ $t("offer_more.ps_2") }}
          </p>
          <p>{{ $t("offer_more.time") }}</p>
        </div>
      </div>

      <div class="container_offer_det">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.pr_title") }}</h2>
          <p>
            {{ $t("offer_more.pr_1") }}
          </p>

          <div class="title">
            {{ $t("offer_more.pr_title_2") }}
          </div>
          <p>
            {{ $t("offer_more.pr_2") }}
          </p>
          <p>{{ $t("offer_more.time2") }}</p>
        </div>
      </div>
      <div class="container_offer_det">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.prs_title") }}</h2>
          <p>
            {{ $t("offer_more.prs_1") }}
          </p>
          <div class="title">{{ $t("offer_more.prs_title_2") }}</div>
          <p>
            {{ $t("offer_more.prs_2") }}
          </p>
          <p>{{ $t("offer_more.time") }}</p>
        </div>
      </div>

      <div class="container_offer_det" id="po_title">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.po_title") }}</h2>
          <p>
            {{ $t("offer_more.pro_1") }}
          </p>
          <p>{{ $t("offer_more.time") }}</p>
        </div>
      </div>
      <div class="container_offer_det" id="re_title">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.re_title") }}</h2>
          <p>
            {{ $t("offer_more.re_details") }}
          </p>
          <p>
            {{ $t("offer_more.re_details2") }}
          </p>

          <p>{{ $t("offer_more.time") }}</p>
        </div>
      </div>
      <div class="container_offer_det" id="ha_title">
        <div class="container__offer-it">
          <h2>{{ $t("offer_more.ha_title") }}</h2>
          <p>
            {{ $t("offer_more.ha_details") }}
          </p>

          <p>{{ $t("offer_more.time3") }}</p>
        </div>
      </div>

      <div class="container__info--blue">
        <div class="body-large">
          {{ $t("offer_more.conslusion") }}
        </div>
      </div>
    </div>
  </div>
</template>

<style>
</style>

<script>
import HeaderBar from "@/components/shared/HeaderBar.vue";

export default {
  name: "OfferPage",
  components: { HeaderBar },
};
</script>
