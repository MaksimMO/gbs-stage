import {createI18n} from 'vue-i18n'
import ua from './locales/ua.json';
import ru from './locales/ru.json';


export const i18n = createI18n({
    locale:'ua',
    messages:{
        en:{
            msg:'hello world'
        },
        ua,
        ru
    }
})
