import { createI18n } from 'vue-i18n'
import de from '@/locale/de.json'
import ru from '@/locale/ru.json'
const messages = {
    de,
    ru
}
const i18n = createI18n({
    locale: 'ru',
    messages
})
export default i18n
