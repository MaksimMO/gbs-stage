import {createI18n} from 'vue-i18n'


export const i18n = createI18n({
    locale:'ua',
    messages:{
        en:{
            msg:'hello world'
        },
        ua:{
            msg:'привіт світ'
        }
    }
})