import { createWebHistory, createRouter } from "vue-router";

const routes = [
    {
        path: "/",
        name: "HomePage",
        component: () => import(/* webpackChunkName: "Home" */ '@/views/HomePage.vue')
    },
    {
        path: "/offer",
        name: "OfferPage",
        component: () => import(/* webpackChunkName: "Offer" */ '@/views/OfferPage.vue')
    },
    {
        path: "/imprint",
        name: "ImprintPage",
        component: () => import(/* webpackChunkName: "Imprint" */ '@/views/ImprintPage.vue')
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
