import { createApp } from 'vue'
import App from './App.vue'
import i18n from "@/i18n"
import router from "@/router"
const app = createApp(App)
app.use(i18n)
app.use(router)
app.mount('#app')
require('@/assets/css/style.css')
require('@/assets/css/container.css')
require('@/assets/css/fonts.css')
require('@/assets/css/navigation.css')

