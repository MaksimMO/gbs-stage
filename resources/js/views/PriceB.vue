<template>
<Header class="header-invert"/>
<Breadcrumb />
  <div class="price-b">
      <section class="title">
          <h1>Ціни на послуги в BLevel</h1>
      </section>
      <section class="price-direction">
          <ul class="direction">
            <li @click="direction = 'cosmetology'" :class="{'invert-color': direction == 'cosmetology'}">Cosmetology</li>
            <li @click="direction = 'hair'" :class="{'invert-color': direction == 'hair'}">Hair</li>
            <li @click="direction = 'nails'" :class="{'invert-color': direction == 'nails'}">Nails</li>
            <li @click="direction = 'care_yon_ka'" :class="{'invert-color': direction == 'care_yon_ka'}">Догляд Yon-Ka</li>
            <li @click="direction = 'make_up_brows'" :class="{'invert-color': direction == 'make_up_brows'}">Make Up &#38; Brows</li>
        </ul>

        <div class="price">
            <transition-group name="list-price">
                <div class="left">
                    <ul v-for="(price)  in directionCheckLeft" :key="price.id">
                        <p class="сhapter">{{price.сhapter}}</p>
                        <div class="subtitle" v-show="price.subtiteles" v-for="(subtitel, idx)  in price.subtiteles" :key="idx">
                            <p>{{subtitel.name}}</p>
                            <li v-for="(list)  in subtitel.lists" :key="list.id">
                                <div class="type-name">{{list.name}}</div>
                                <div class="line-dotted"></div>
                                <div class="type-price">{{list.price}} грн</div>
                            </li>
                        </div>
                        <li v-show="price.lists"  v-for="(list)  in price.lists" :key="list.id">
                            <div class="type-name">{{list.name}}</div>
                            <div class="line-dotted"></div>
                            <div class="type-price">{{list.price}} грн</div>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <ul v-for="(price)  in directionCheckRight" :key="price.id">
                        <p class="сhapter">{{price.сhapter}}</p>
                        <div class="subtitle" v-show="price.subtiteles" v-for="(subtitel, idx)  in price.subtiteles" :key="idx">
                            <p>{{subtitel.name}}</p>
                            <li v-for="(list)  in subtitel.lists" :key="list.id">
                                <div class="type-name">{{list.name}}</div>
                                <div class="line-dotted"></div>
                                <div class="type-price">{{list.price}} грн</div>
                            </li>
                        </div>
                        <li v-show="price.lists"  v-for="(list)  in price.lists" :key="list.id">
                            <div class="type-name">{{list.name}}</div>
                            <div class="line-dotted"></div>
                            <div class="type-price">{{list.price}} грн</div>
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
            direction: 'cosmetology',
            prices: [
                {id: 0, direction: "cosmetology", side: 'left', сhapter: 'Консультації', lists: [
                    {name: 'Первинна консультація трихолога', price: '700'},
                    {name: 'Вторинна консультація трихолога', price: '400'},
                    {name: 'Первинна консультація косметолога', price: '500'},
                    {name: 'Вторинна консультація трихолога', price: '300'}
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
            grid-template-columns: repeat(2, 444px);
            grid-column-gap: 134px;
            display: grid;
            min-height: 47.8vh;
            &>.left>ul,
            &>.right>ul {
                list-style-type: none;
                padding: 0;
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
                        font-size: 14px;
                        line-height: 28px;
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
                    font-size: 14px;
                    line-height: 28px;
                    letter-spacing: 0.05em;
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 10px;
                    & .line-dotted {
                        flex: 1 0;
                        border-bottom: 1px dotted #000;
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
                width: 50%;
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
                    &>.сhapter{
                        font-size: 12px;
                        line-height: 18px;
                    }
                    &>.subtitle {
                        &>p {
                            font-size: 10px;
                            line-height: 18px;
                        }
                    }
                    &>li,
                    &>.subtitle>li{
                        font-size: 12px;
                        line-height: 18px;
                    }
                }
            }
        }
    }

    // .list-price-enter-active,
    // .list-price-leave-active {
    //     transition: all .2s ease;
    // }
    // .list-price-enter-from,
    // .list-price-leave-to {
    //     opacity: 0;
    // }

    // .footer {
    //     height: 234px;
    // }
</style>

