<template>
<Header class="header-invert"/>
<Breadcrumb />
  <div class="price-s">
      <section class="title">
          <h1>Ціни на послуги в SLevel</h1>
      </section>
      <section class="price-direction">
        <ul class="direction">
            <li @click="direction = 'massage'" :class="{'invert-color': direction == 'massage'}">Масаж</li>
            <li @click="direction = 'author_massage'" :class="{'invert-color': direction == 'author_massage'}">Авторський масаж</li>
            <li @click="direction = 'facial_treatments'" :class="{'invert-color': direction == 'facial_treatments'}">Процедури для обличчя</li>
            <li @click="direction = 'body_treatments'" :class="{'invert-color': direction == 'body_treatments'}">Процедури для тіла</li>
        </ul>

        <div class="price">
            <transition-group name="list-price-s" tag="ul">
                    <!-- <ul v-for="(price)  in directionCheck" :key="price.id"> -->
                        <p v-show="directionCheck.duration">{{directionCheck.duration}}</p>
                        <li v-show="directionCheck.lists"  v-for="(list)  in directionCheck.lists" :key="list.id">
                            <div>
                                <div class="type-name">{{list.name}}</div>
                                <div class="line-dotted"></div>
                                <div class="type-price">{{list.price}} грн</div>
                            </div>
                            <div class="list-discrip" v-show="list.discrip">{{list.discrip}}</div>
                        </li>
                        <span v-show="directionCheck.footnote">{{directionCheck.footnote}}</span>
                    <!-- </ul> -->
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
            direction: 'massage',
            prices: [
                {id: 0, direction: "massage", lists: [
                    {name: 'Загальний (60хв)', price: '700'},
                    {name: 'Антицелюлітний (60хв)', price: '530'},
                    {name: 'Спортивний(60хв)', price: '550'},
                    {name: 'Лімфодренажний (60)', price: '580'},
                    {name: 'Масаж стоп(25хв)', price: '280'},
                    {name: 'Масаж обличчя (30хв)', price: '450'},
                    {name: 'Масаж голови(25хв)', price: '390'},
                    {name: 'Масаж спини (30хв)', price: '350'},
                    {name: 'Масаж з віником (15хв)', price: '290'},
                    {name: 'Віник (1шт)', price: '30'}
                ]},
                {id: 1, direction: "author_massage", duration: 'Тривалість: 80 - 90 хв', footnote: '* авторські масажі лише по попередньому запису', lists: [
                    {name: 'Аюрведичний лімфодренажний', price: '880'},
                    {name: 'Гавайський масаж Lomi-Lomi Nui', price: '1 250'},
                    {name: 'Глибоко-м’язовий масаж', price: '880'}
                ]},
                {id: 2, direction: "facial_treatments", lists: [
                    {name: 'Intermezzo', price: '870', discrip: 'Ароматичне блаженство, очищення, м’який пілінг і наостанок ароматичне пробудження, 15-20 хв'},
                    {name: 'Escale Beauty Очищення/Сяяння', price: '870', discrip: 'Ароматичне блаженство, очищення шкіри, м’який пілінг, масаж обличчя та шиї, маска і наостанок ароматичне пробудження, 30хв '},
                    {name: 'Escale Beauty Зволоження', price: '870', discrip: 'Ароматичне блаженство, очищення шкіри, м’який пілінг, масаж обличчя та шиї, маска і наостанок ароматичне пробудження, 30хв'},
                    {name: 'Escale Beauty Anti-aging', price: '570', discrip: 'Ароматичне блаженство, очищення шкіри, м’який пілінг, масаж обличчя та шиї, маска і наостанок ароматичне пробудження, 30хв'}
                ]},
                {id: 3, direction: "body_treatments", lists: [
                    {name: 'Aroma-Luxe', price: '680', discrip: '100% розслабляючий ручний масаж з ексклюзивними методиками, 60 хв'},
                    {name: 'Aroma-Relax', price: '680', discrip: 'Розслабляюча техніка з гарячими вулканічними каменями, компресом на ступні, масажем тіла та ароматичним пробудженням, 60 хв'},
                    {name: 'Aroma-Sculptant', price: '720', discrip: 'Тонізуючий і скульптурований масаж з використанням бамбукових палочок на ногах, 60 хв'},
                    {name: 'Phyto-Minceur', price: '1 080', discrip: 'Процедура для схуднення з використанням ароматичного обгортування та спеціальних лімфодренажних технік, 60 хв'},
                    {name: 'Hydralessence Body', price: '1 190', discrip: 'Процедура глибокого зволоження, а також теплий компрес на ступні, ексфоліація, масаж тіла та ароматичне пробудження, 60 хв'},
                    {name: 'Phyto-Fermete', price: '1 520', discrip: 'Зміцнююча процедура з використанням ароматичного обгортування і спеціальних ліфтингових технік, 60 хв'},
                    {name: 'Спа-масаж з маслом свічок Yon-ka', price: '870'}
                ]},
            ]
        }
    },
    computed: {
        directionCheck () {
            return this.prices.filter((price) => price.direction === this.direction)[0];
        }
    },
    components: {
        Header,
        Footer,
        Breadcrumb
    }
}

</script>

<style lang="scss" scoped>
    .price-s {
        padding-top: 208px;
        background-color: #FFFFFF !important;
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
                width: 50%;
                min-height: 47.8vh;
                margin-bottom: 60px;
                &>ul {
                    list-style-type: none;
                    padding: 0;
                    font-family: Raleway;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 14px;
                    line-height: 28px;
                    letter-spacing: 0.05em;
                    font-feature-settings: 'pnum' on, 'lnum' on;
                    color: #000000;
                    &>li {
                        font-family: Raleway;
                        font-weight: normal;
                        width: 100%;
                        font-size: 14px;
                        line-height: 28px;
                        letter-spacing: 0.05em;
                        justify-content: space-between;
                        margin-bottom: 10px;
                        &>.list-discrip {
                            font-size: 12px;
                            line-height: 14px;
                            width: 80%;
                        }
                        &>div{
                            display: flex;
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
        }
    }


    @media screen and (max-width: 1023px) and (min-width: 768px){
        .price-s {
            padding-top: 108px;
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
                padding: 0 50px;
                & > .direction {
                    border-bottom: none;
                    text-align: left;
                    & li {
                        padding-bottom: 10px;
                    }
                }
                & .price{
                    text-align: left;
                    display: block;
                    width: 50%;
                }
            }
        }
    }
    @media screen and (max-width: 767px){
        .price-s {
            padding-top: 108px;
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
                        font-size: 12px;
                        line-height: 18px;
                    }
                }
                & .price{
                    text-align: left;
                    display: block;
                    width: 100%;
                    &>ul {
                        font-size: 12px;
                        line-height: 18px;
                        &>li {
                            font-size: 12px;
                            line-height: 18px;
                            &>.list-discrip {
                                font-size: 10px;
                                line-height: 14px;
                                max-width: 370px;
                            }
                            &>div{
                                display: flex;
                                & .line-dotted {
                                    height: 14px;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    .list-price-s-enter-active,
    .list-price-s-leave-active {
        transition: all .2s ease;
    }
    .list-price-s-enter-from,
    .list-price-s-leave-to {
        opacity: 0;
    }
</style>

