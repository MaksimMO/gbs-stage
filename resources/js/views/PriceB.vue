<template>
<Header class="header-invert"/>
<Breadcrumb />
  <div class="price-b">
      <section class="title">
          <h1>Ціни на послуги в BLevel</h1>
      </section>
      <section class="price-direction">
          <ul class="direction">
            <li @click="direction = 'nails'" :class="{'invert-color': direction == 'nails'}">Nails</li>
            <li @click="direction = 'hair'" :class="{'invert-color': direction == 'hair'}">Hair</li>
            <li @click="direction = 'make_up_brows'" :class="{'invert-color': direction == 'make_up_brows'}">Make Up &#38; Brows</li>
            <li @click="direction = 'cosmetology'" :class="{'invert-color': direction == 'cosmetology'}">Cosmetology</li>
            <li @click="direction = 'care_yon_ka'" :class="{'invert-color': direction == 'care_yon_ka'}">Догляд Yon-Ka</li>
        </ul>

        <div class="price">
            <transition-group name="list-price">
                <div class="left">
                    <ul v-for="(price)  in directionCheckLeft" :key="price.id">
                        <p v-show="price.сhapter" class="сhapter">{{price.сhapter}}</p>
                        <p v-show="price.level" class="level"><span v-html="price.level"></span></p>
                        <div class="subtitle" v-show="price.subtiteles" v-for="(subtitel, idx)  in price.subtiteles" :key="idx">
                            <p>{{subtitel.name}}</p>
                            <li v-for="(list)  in subtitel.lists" :key="list.id">
                                <div>
                                    <div class="type-name">{{list.name}}</div>
                                    <div class="line-dotted"></div>
                                    <div class="type-price">{{list.price}} грн</div>
                                </div>
                            </li>
                        </div>
                        <li v-show="price.lists"  v-for="(list)  in price.lists" :key="list.id">
                            <div>
                                <div class="type-name">{{list.name}}</div>
                                <div class="line-dotted"></div>
                                <div class="type-price">{{list.price}} грн</div>
                            </div>
                            <div class="list-discrip" v-show="list.discrip">{{list.discrip}}</div>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <ul v-for="(price)  in directionCheckRight" :key="price.id">
                        <p v-show="price.сhapter" class="сhapter">{{price.сhapter}}</p>
                        <p v-show="price.level" class="level" ><span v-html="price.level"></span></p>
                        <div class="subtitle" v-show="price.subtiteles" v-for="(subtitel, idx)  in price.subtiteles" :key="idx">
                            <p>{{subtitel.name}}</p>
                            <li v-for="(list)  in subtitel.lists" :key="list.id">
                                <div>
                                    <div class="type-name">{{list.name}}</div>
                                    <div class="line-dotted"></div>
                                    <div class="type-price">{{list.price}} грн</div>
                                </div>
                                <div class="list-discrip" v-show="list.discrip">{{list.discrip}}</div>
                            </li>
                        </div>
                        <li v-show="price.lists"  v-for="(list)  in price.lists" :key="list.id">
                            <div>
                                <div class="type-name">{{list.name}}</div>
                                <div class="line-dotted"></div>
                                <div class="type-price">{{list.price}} грн</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </transition-group>
        </div>
      </section>
    </div>
<Footer/>
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import Breadcrumb from '../components/Breadcrumb.vue';

export default {
    data() {
        return {
            direction: 'nails',
            prices: [
                {id: 0, direction: "cosmetology", side: 'left', сhapter: 'Консультації', lists: [
                    {name: 'Первинна консультація трихолога', price: '700'},
                    {name: 'Вторинна консультація трихолога', price: '400'},
                    {name: 'Первинна консультація косметолога', price: '500'},
                    {name: 'Вторинна консультація косметолога', price: '300'}
                ]},
                {id: 1, direction: "cosmetology", side: 'left', сhapter: 'Контурна пластика обличчя', lists: [
                    {name: 'Belotero Balance (1 мл)', price: '7 200'},
                    {name: 'Belotero Volume (1 мл)', price: '5 700'},
                    {name: 'Belotero Lips Shape (0.6 мл)', price: '4 350'},
                    {name: 'Chroma Saypha Volume Plus (1 мл)', price: '5 500'},
                    {name: 'Chroma Saypha Volume (1 мл)', price: '5 700'},
                    {name: 'Juvederm Volbella з лідокаїном (1 мл)', price: '5 800'},
                    {name: 'Juvederm Volift Retouch (0.55 мл)', price: '4 500'},
                    {name: 'Juvederm Volift з лідокаїном (1 мл)', price: '4 700'},
                    {name: 'Juvederm Voluma з лідокаїном (1 мл)', price: '5 800'}
                ]},
                {id: 2, direction: "cosmetology", side: 'left', сhapter: 'Біоревіталізація', lists: [
                    {name: 'Hyalual 0.55% (1.5 мл)', price: '2 200'},
                    {name: 'Hyalual 1,1% (2 мл)', price: '3 000'},
                    {name: 'Hyalual 1,8% (2 мл)', price: '3 500'},
                    {name: 'Meso-Wharton (1.5 мл)', price: '4 400'},
                    {name: 'Meso-Xantin (1.5 мл)', price: '4 300'},
                    {name: 'Rejuran Hyalual (2 мл)', price: '5 800'}
                ]},
                {id: 3, direction: "cosmetology", side: 'left', сhapter: 'Плазмотерапія', lists: [
                    {name: 'Плазмотерапія волосистої частини голови (1 пробірка)', price: '1 300'},
                    {name: 'Плазмотерапія лиця (1 пробірка)', price: '1 300'}
                ]},
                {id: 4, direction: "cosmetology", side: 'right', сhapter: 'Догляд Holy Land', lists: [
                    {name: 'Чистка', price: '600'},
                    {name: 'Догляд Holy Land з вітаміном С', price: '870'},
                    {name: 'Догляд Holy Land ліфтинг та зволоження', price: '1 000'},
                    {name: 'Пілінг Deep', price: '700'},
                    {name: 'Пілінг Professional', price: '700'},
                    {name: 'Чищення обличчя з пілінгом', price: '800'}
                ]},
                {id: 5, direction: "cosmetology", side: 'right', сhapter: 'Мезотерапія', lists: [
                    {name: 'PBSerum Triada', price: '2 800'},
                    {name: 'PBSerum Slim', price: '1 200'},
                    {name: 'PBSerum Drain', price: '1 200'},
                    {name: 'PBSerum Smooth', price: '1 200'},
                    {name: 'RRS Whitening', price: '2 270'},
                    {name: 'RRS Cellustrix', price: '1 400'},
                    {name: 'RRS Eyes', price: '1 360'},
                    {name: 'RRS Eyes з пілінгом Innoaesthetics', price: '1 400'},
                    {name: 'RRS Hair', price: '900'},
                    {name: 'Toskani Hair', price: '900'}
                ]},
                {id: 6, direction: "cosmetology", side: 'right', сhapter: 'Ботулінотерапія', subtiteles: [
                    {name: 'Ботокс Allergan', lists: [
                        {name: '1 зона', price: '2 500'},
                        {name: '2 зони', price: '4 400'},
                        {name: '3 зони', price: '6 500'},
                        {name: 'Корекція 1 зона', price: '900'}
                    ]},
                    {name: 'Ботокс Dysport', lists: [
                        {name: 'Лоб', price: '2 800'},
                        {name: 'Міжбрів’я', price: '3 000'},
                        {name: 'Очі', price: '2 500'}
                    ]},
                ]},
                {id: 7, direction: "nails", side: 'left', level: 'Майстер/Топ‑Майстер', lists: [
                    {name: 'Манікюр та покриття гель-лаком', price: '400/450'},
                    {name: 'Манікюр', price: '200/300'},
                    {name: 'Покриття гель-лаком', price: '250/300'},
                    {name: 'Нарощення нігтів', price: '550/600'},
                    {name: 'Зняття гель-лаку', price: '50'},
                    {name: 'Зняття нарощених нігтів', price: '100'},
                    {name: 'Довжина', price: '30'},
                    {name: 'Ремонт нігтя', price: '50'},
                    {name: 'Частковий ремонт нігтя', price: '10'},
                    {name: 'Укріплення гелем/ акрігелем', price: '50'},
                    {name: 'Стемпінг, акварель, наклейка, каміння (1 палець)', price: '15'},
                    {name: 'Фрацузький, лунний манікюр', price: '50'},
                    {name: 'Дизайн аерографом', price: '100'},
                    {name: 'Педикюр та покриття гель-лаком', price: '500/550'},
                    {name: 'Педикюр без обробки стоп', price: '300/350'},
                    {name: 'Педикюр без покриття', price: '250/300'},
                    {name: 'Чоловічий манікюр', price: '250/300'},
                    {name: 'Чоловічий педикюр «Clearance»', price: '500/550'}
                ]},
                {id: 8, direction: "make_up_brows", side: 'left', lists: [
                    {name: 'Експрес макіяж', price: '400'},
                    {name: 'Денний макіяж', price: '500'},
                    {name: 'Вечірній макіяж', price: '650'},
                    {name: 'Весільний макіяж', price: '800'},
                    {name: 'Накладні вії', price: '100'},
                    {name: 'Корекція брів', price: '150'},
                    {name: 'Проріджування брів', price: '100'},
                    {name: 'Корекція та фарбування брів', price: '250'},
                    {name: 'Ламінування брів', price: '500'},
                    {name: 'Ламінування вій + Ботокс', price: '800'},
                    {name: 'Фарбування вій', price: '150'},
                    {name: 'Ламінування, корекція та фарбування брів', price: '800'},
                    {name: 'Епіляція верхньої губи', price: '100'},
                    {name: 'Чоловіча корекція брів', price: '300'},
                    {name: 'Епіляція вух та носу', price: '150'}
                ]},
                {id: 9, direction: "hair", side: 'left', сhapter: 'Hair Coloring', subtiteles: [
                    {name: 'Napura', lists: [
                        {name: 'Фарбування', price: 'Від 670'},
                        {name: 'Складне фарбування ', price: 'Від 2000'}
                    ]},
                    {name: 'Loreal', lists: [
                        {name: 'Фарбування', price: 'Від 550'},
                        {name: 'Складне фарбування', price: 'Від 1900'}
                    ]},
                ]},
                {id: 10, direction: "hair", side: 'left', сhapter: 'Hair Care', subtiteles: [
                    {name: 'Kerastase', lists: [
                        {name: 'Ритуал для волосся Fusio-Dose', price: 'Від 850'}
                    ]},
                    {name: 'Napura', lists: [
                        {name: 'Біологічне очищення', price: '900'},
                        {name: 'Стимуляція росту волосся', price: '670'},
                        {name: 'Волосся Е!', price: '850'},
                        {name: 'Ні лупі', price: '1450'},
                        {name: 'Спасіння блондинок', price: '1100'},
                        {name: 'Швидка допомога 1 довжина', price: '1500'}
                    ]},
                    {name: 'Paul Mitchell', lists: [
                        {name: 'Ламінування волосся Awapuhi 1 довжина', price: '900'},
                        {name: 'Ламінування волосся Awapuhi 2 довжина', price: '1150'},
                        {name: 'Ламінування волосся Awapuhi 3 довжина', price: '1400'},
                        {name: 'Ламінування волосся Awapuhi 4 довжина', price: '1600'},
                        {name: 'HydraTriplex 1 довжина', price: '500'},
                        {name: 'HydraTriplex 2 довжина', price: '580'},
                        {name: 'HydraTriplex 3 довжина', price: '1350'},
                        {name: 'HydraTriplex 4 довжина', price: '1500'},
                        {name: 'KeraTriplex 1 довжина', price: '500'},
                        {name: 'KeraTriplex 2 довжина', price: '850'},
                        {name: 'KeraTriplex 3 довжина', price: '1350'},
                        {name: 'KeraTriplex 4 довжина', price: '1500'},
                        {name: 'HydraTriplex та KeraTriplex 1 довжина', price: '900'},
                        {name: 'HydraTriplex та KeraTriplex 2 довжина', price: '1500'},
                        {name: 'HydraTriplex та KeraTriplex 3 довжина', price: '2000'},
                        {name: 'HydraTriplex та KeraTriplex 4 довжина', price: '2400'}
                    ]},
                    {name: 'Luxliss', lists: [
                        {name: 'Кератинове вирівнювання чолки', price: '220'},
                        {name: 'Кератинове вирівнювання 2 довжина', price: '2300'},
                        {name: 'Кератинове вирівнювання 3 довжина', price: '2800'},
                        {name: 'Кератинове вирівнювання 4 довжина', price: '3300'},
                        {name: 'Ботокс 2 довжина', price: '800'},
                        {name: 'Ботокс 3 довжина', price: '1100'},
                        {name: 'Ботокс 4 довжина', price: '1400'}
                    ]},
                    {name: 'Lebel', lists: [
                        {name: 'Абсолютне щастя 1 довжина', price: '700'},
                        {name: 'Абсолютне щастя 2 довжина', price: '1100'},
                        {name: 'Абсолютне щастя 3 довжина', price: '1750'},
                        {name: 'Абсолютне щастя 4 довжина', price: '2300'}
                    ]},
                ]},
                {id: 11, direction: "hair", side: 'right', сhapter: 'Hair', lists: [
                    {name: 'Миття волосся Loreal', price: 'Від 75'},
                    {name: 'Миття волосся Paul Mitchell', price: 'Від 80'},
                    {name: 'Миття волосся Napura', price: 'Від 90'},
                    {name: 'Миття волосся Kerastase', price: 'Від 100'},
                    {name: 'Сушіння волосся', price: 'Від 100'},
                    {name: 'Вирівнювання волосся', price: 'Від 150'},
                    {name: 'Вирівнювання волосся Steampod', price: 'Від 300'},
                    {name: 'Укладання волосся', price: '200'},
                    {name: 'Укладання волосся на браш', price: 'Від 300'},
                    {name: 'Локони', price: 'Від 300'},
                    {name: 'Стрижка', price: '250'},
                    {name: 'Стрижка кінчиків', price: '150'},
                    {name: 'Стрижка чолки', price: '100'},
                    {name: 'Прикориневе гофре', price: '100'},
                    {name: 'Плетіння кіс', price: 'Від 50'},
                    {name: 'Зачіска вечірня', price: '600'},
                    {name: 'Зачіска для нареченої', price: '800'},
                    {name: 'Дитяча зачіска', price: '250'}
                ]},
                {id: 12, direction: "hair", side: 'right', сhapter: 'Men’s Hair', level: 'Майстер/Топ‑Майстер', lists: [
                    {name: 'Стрижка класична', price: '200/300'},
                    {name: 'Стрижка модельна', price: '250/300'},
                    {name: 'Стрижка під насадку', price: '150'},
                    {name: 'Стрижка бороди', price: '100'},
                    {name: 'Камуфлювання сивини', price: '250'},
                    {name: 'Окантовка', price: '100'},
                    {name: 'Миття волосся', price: '50'}
                ]},
                {id: 13, direction: "care_yon_ka", side: 'left', lists: [
                    {name: 'Intermezzo Аромаспалах', price: '900', discrip: 'Знайомство з брендом (30 хв.)'},
                    {name: 'Escale Beaute', price: '1000', discrip: 'Очищеня, Зволоженя та Anti-Age (60 хв.)'},
                    {name: 'Alpha Vital Ефект «нової шкіри»', price: '1400', discrip: 'Сяяння та відновлення шкіри з AHA з альгінатною маскою (90 хв.)'},
                    {name: 'Alpha Vital Ефект «нової шкіри»', price: '1500', discrip: 'Сяяння та відновлення шкіри з AHA з глиняною маскою (90 хв.)'},
                    {name: 'Vital Defense', price: '1500', discrip: 'Детоксикація, подолання впливу шкідливих радикалів та забруднюючих речовин (60 хв.)'},
                    {name: 'Age Correction Elastine (35-45 років)', price: '1400', discrip: 'Корекція вікових змін (90 хв.)'},
                    {name: 'Age Correction Time Resist (45-55 років)', price: '1500', discrip: 'Корекція вікових змін (90 хв.)'},
                    {name: 'Age Correction Optimizer (45-55 років)', price: '1600', discrip: 'Корекція вікових змін (90 хв.)'},
                    {name: 'Sensitive', price: '1200', discrip: 'Заспокійливий ефект, відчуття комфорту (60 хв.)'},
                    {name: 'Essential White', price: '1350', discrip: 'Ефект освітлення або корекція пігментних плям (30 хв.)'},
                    {name: 'Essential White', price: '1400', discrip: 'Ефект освітлення або корекція пігментних плям (60 хв.)'}
                ]},
            ]
        }
    },
    computed: {
        directionCheckLeft () {
            return this.prices.filter((price) => price.direction === this.direction && price.side === 'left');
        },
        directionCheckRight () {
            return this.prices.filter((price) => price.direction === this.direction && price.side === 'right');
        },
    },
    components: {
        Header,
        Footer,
        Breadcrumb
    }
}

</script>

<style lang="scss" scoped>
    .price-b {
        padding-top: 208px;
        background-color: #FFFFFF !important;
    }
    li {
        transform: none !important;
    }
    .title {
        padding: 0 7.81vw;
        margin-bottom: 60px;
        & > h1 {
            font-weight: 600;
            font-style: normal;
            font-family: Oswald;
            font-size: 52px;
            margin: 0;
            margin-left: 96px;
            margin-bottom: 30px;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    .price-direction {
        font-family: Oswald;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 27px;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        padding: 0 7.81vw;
        padding-bottom: 60px;
        & > .direction {
            flex-wrap: wrap;
            list-style-type: none;
            display: flex;
            color: #000000;
            grid-column-gap: 40px;
            align-items: center;
            text-align: center;
            padding: 0;
            cursor: pointer;
            border-bottom: solid 2px #000000;
            & > li {
                padding-bottom: 20px;
                position: relative;
                white-space: nowrap;
                &:hover {
                    color: #916C58;
                }
            }
        }
        .invert-color{
            color: #916C58;
            &::before {
                content: "";
                color: #916C58;
                position: absolute;
                bottom: -2px;
                top: 0px;
                left: 0;
                right: 0;
                border-bottom: 2px solid #916C58;
            }
        }
        & .price{
            color: #000000;
            font-feature-settings: 'pnum' on, 'lnum' on;
            font-style: normal;
            grid-template-columns: repeat(2, 2fr);
            grid-column-gap: 94px;
            display: grid;
            min-height: 47.8vh;
            &>.left>ul,
            &>.right>ul {
                list-style-type: none;
                padding: 0;
                &>.level{
                    margin: 0;
                    margin-bottom: 24px;
                    font-family: Raleway;
                    font-weight: bold;
                    font-size: 10px;
                    line-height: 12px;
                    letter-spacing: 0.05em;
                    font-feature-settings: 'pnum' on, 'lnum' on;
                    text-transform: uppercase;
                    text-align: right;
                }
                &>.сhapter{
                    margin: 0;
                    margin-bottom: 10px;
                    font-family: Oswald;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 54px;
                    letter-spacing: 0.02em;
                    font-feature-settings: 'pnum' on, 'lnum' on;
                }
                &>.subtitle {
                    &>p {
                        font-family: Raleway;
                        font-weight: 600;
                        font-size: 18px;
                        line-height: 32px;
                        letter-spacing: 0.05em;
                        margin: 0;
                        margin-bottom: 10px;
                    }
                }
                &>li,
                &>.subtitle>li{
                    font-family: Raleway;
                    font-weight: normal;
                    width: 100%;
                    font-size: 18px;
                    line-height: 32px;
                    letter-spacing: 0.05em;
                    display: inline-block;
                    justify-content: space-between;
                    margin-bottom: 10px;
                    &>.list-discrip {
                        font-size: 14px;
                        line-height: 18px;
                        width: 80%;
                    }
                    &>div {
                        display: flex;
                        & .line-dotted {
                            flex: 1 0;
                            border-bottom: 2px dotted #000;
                            height: 20px;
                            margin: 0 .4em;
                        }
                        & .type-name {
                            margin: 0;
                            max-width: 316px;
                        }
                        & .type-price {
                            margin: 0;
                            font-weight: 600;
                            white-space:nowrap;
                        }
                    }
                }
            }
        }
    }
    @media screen and (max-width: 1142px) and (min-width: 1024px){
        .price-direction {
            & .price{
                text-align: left;
                display: block;
                width: 50%;
            }
        }
    }
    @media screen and (max-width: 1023px) and (min-width: 768px){
        .price-b {
            padding-top: 108px;
        }
        .title {
            padding: 0 50px;
            margin-bottom: 30px;
            & > h1 {
                font-size: 49px;
                margin: 0;
                margin-left: 0;
            }
        }
        .price-direction {
            font-size: 14px;
            padding: 0 15px;
            & > .direction {
                border-bottom: none;
                text-align: left;
                & li {
                    padding-bottom: 10px;
                    &:hover {
                        color: #916C58;
                    }
                }
            }
            & .invert-color{
                color: #916C58;
                border-bottom: solid 2px #916C58;
            }
            & .price{
                text-align: left;
                display: block;
                width: 60%;
                &>.left>ul,
                &>.right>ul {
                    &>.сhapter{
                        font-size: 16px;
                        line-height: 26px;
                    }
                    &>.subtitle {
                        &>p {
                            font-size: 14px;
                            line-height: 22px;
                        }
                    }
                    &>li,
                    &>.subtitle>li{
                        font-size: 16px;
                        line-height: 26px;
                    }
                }
            }
        }
    }
    @media screen and (max-width: 767px){
        .price-b {
            padding-top: 108px;
        }
        .title {
            padding: 0 15px;
            margin-bottom: 20px;
            & > h1 {
                font-size: 32px;
                line-height: 48px;
                margin: 0;
                margin-left: 0;
            }
        }
        .price-direction {
            font-size: 14px;
            padding: 0 15px;
            & > .direction {
                border-bottom: none;
                text-align: left;
                & li {
                    padding-bottom: 5px;
                }
            }
            & .price{
                text-align: left;
                display: block;
                width: 100%;


                &>.left>ul,
                &>.right>ul {
                    .level span{
                        width:min-content;
                        display: inline-block;
                    }
                    &>.сhapter{
                        font-size: 14px;
                        line-height: 22px;
                    }
                    &>.subtitle {
                        &>p {
                            font-size: 12px;
                            line-height: 22px;
                        }
                    }
                    &>li,
                    &>.subtitle>li{
                        font-size: 14px;
                        line-height: 22px;
                         &>div {
                            & .line-dotted {
                                margin: 0;
                            }
                        }
                    }
                }
            }
        }
    }

    .list-price-enter-active,
    .list-price-leave-active {
        transition: all .2s ease;
    }
    .list-price-enter-from,
    .list-price-leave-to {
        opacity: 0;
    }
</style>

