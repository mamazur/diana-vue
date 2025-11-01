import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'HomePage',
      component: () => import(/* webpackChunkName: "Home" */ '@/views/HomePage.vue'),
    },
    {
      path: '/offer',
      name: 'OfferPage',
      component: () => import(/* webpackChunkName: "Offer" */ '@/views/OfferPage.vue'),
    },
    {
      path: '/imprint',
      name: 'ImprintPage',
      component: () => import(/* webpackChunkName: "Imprint" */ '@/views/ImprintPage.vue'),
    },
  ],
  scrollBehavior(to, from, savedPosition) {
    if (to.hash) {
      return { el: to.hash, behavior: 'smooth' }
    }
    return { top: 0 }
  },
})

export default router
