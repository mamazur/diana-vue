import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import { createI18n } from 'vue-i18n'
import de from '@/locale/de.json'
import ru from '@/locale/ru.json'
const messages = {
  de,
  ru,
}
const i18n = createI18n({
  locale: 'ru',
  messages,
})

const app = createApp(App)

app.use(router)
app.use(i18n)

app.mount('#app')
