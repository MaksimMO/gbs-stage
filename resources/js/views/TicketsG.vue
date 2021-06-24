<template>
<Header class="header-invert"/>
  <div class="team-g">
      <section class="title">
          <h1>Абонементи</h1>
          <p>
            GBS Level – це три види клубних карт.
            Естетичні, емоційні, хардкорні, стримані, релаксуючі, автентичні,  максималістичні та вдночас мінімалістичні.
            Створені в колаборації з Нашими Клієнтами
          </p>
          <b>
            ОБИРАЙ СВІЙ РІВЕНЬ!
          </b>
      </section>
      <section class="tickets">
          <div class="level">
              <p>{{tickets[0].level}}</p>
              <img :src="tickets[0].link" alt="Level 1">
              <div class="detail" @click="openDetail(1)">Детальніше</div>
          </div>
          <div class="level">
              <p>{{tickets[1].level}}</p>
              <img :src="tickets[1].link" alt="Level 2">
              <div class="detail" @click="openDetail(2)" >Детальніше</div>
          </div>
          <div class="level">
              <p>{{tickets[2].level}}</p>
              <img :src="tickets[2].link" alt="Level 3">
              <div class="detail" @click="openDetail(3)">Детальніше</div>
          </div>
      </section>
  </div>
    <teleport to="body">
        <transition name="popup-tickets">
            <PopupTickets v-if="isModalOpen"  @closePopup="isModalOpen = false">
                <h1 class="ticket-title">Тип клубної карти: <span>{{ticketDetail.level}}</span></h1>
                <div class="ticket-discript">
                    <img :src="ticketDetail.link" :alt="ticketDetail.level">
                    <div class="ticket-period">
                        <p>Термін дії: <b>1 рік</b></p>
                        <p>Час відвідування:</p>
                        <p v-show="ticketDetail.period.time1"><b>{{ticketDetail.period.time1}}</b></p>
                        <p v-show="ticketDetail.period.time2"><b>{{ticketDetail.period.time1}}</b></p>
                        <p>Призупинення дії: <b>{{ticketDetail.period.dayOff}}</b></p>
                        <div class="ticket-period-price">
                            <p>{{ticketDetail.price}} грн</p>
                            <button @click="openOrder(ticketDetail.level)"><span>Замовити</span></button>
                        </div>
                    </div>
                </div>
                <ul class="ticket-datail">
                    <li v-for="(detail, idx)  in ticketDetail.details" :key="idx" v-html="detail"></li>
                </ul>
            </PopupTickets>
        </transition>
    </teleport>
    <teleport to="body">
      <MakeOrderPopup v-if="isModalOrderOpen" @closePopup="isModalOrderOpen = false" :choiceLevel="choiceLevel"/>
    </teleport>
<Footer/>
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import PopupTickets from '../components/PopupTickets.vue';
import MakeOrderPopup from '../components/MakeOrderPopup.vue';
export default {
    data() {
        return {
            isModalOpen: false,
            isModalOrderOpen: false,
            ticketDetail: null,
            choiceLevel: null,
            tickets: [
                {id: 1, level: 'level 1', link: require("../../assets/images/TeamG/tickets/level1.png").default,
                    period: { time1: 'пн-пт: 07:00 - 23:00', time2: 'сб-нд: 08:00 - 23:00', dayOff: '45 днів'},
                    price: '28 000',
                    details: [
                        'Безліміт на самостійне відвідування спортивного залу.',
                        '<b>Безліміт на відвідування SPA комплексу</b> (римська сольова парова, римський арома грот, російська баня, фінська сауна, лаундж зона).',
                        '<b>Гостьове відвідування</b> – 7 рази протягом терміну дії клубної карти.',
                        'Брендові рушники, брендові халати для відвідування SPA комплексу.',
                        'Користування шафами покращеного формату.',
                        '<b>Групові тренування</b> – 42 занятя* <div style="display: grid; grid-template-columns: repeat(4, 1fr); padding-left: 50px;"><p style="margin: 0;">Файтинг</p><p style="margin: 0;">Йога</p><p style="margin: 0;">Cross Fit</p><p style="margin: 0;">Барре</p><p style="margin: 0;">Сайкл</p><p style="margin: 0;">Пілатес</p><p style="margin: 0;">Games</p></div> <b>*7 видів тренувань по 6 рази протягом терміну дії клубної карти.</b>',
                        '<b>Масаж класичний</b> – 2 послуги.',
                        'Знижка 10 % на послуги “B Level”.',
                        '<b>Послуги салону краси:</b> <p style="margin: 0;"><b>Women:</b> Послуги стиліста-перукаря (стрижка або укладка) – <b>2 послуги</b><br> або нігтьовий сервіс (класичний манікюр без покриття) – <b>2 послуги</b>.</p><p style="margin: 0;"><b>Men:</b> Послуги перукаря (стрижка) – <b>2 послуги</b><br> або нігтьовий сервіс – <b>2 послуги</b>.</p>'
                    ]
                },
                {id: 2, level: 'level 2', link: require("../../assets/images/TeamG/tickets/level2.png").default,
                    period: { time1: 'пн-пт: 07:00 - 23:00', dayOff: '30 днів'},
                    price: '18 000',
                    details: [
                        'Безліміт на самостійне відвідування спортивного залу.',
                        '<b>Безліміт на відвідування SPA комплексу</b> (римська сольова парова, римський арома грот, російська баня, фінська сауна, лаундж зона) 2 рази на місяць протягом терміну дії клубної карти.',
                        '<b>Гостьове відвідування</b> – 5 рази протягом терміну дії клубної карти.',
                        'Брендові рушники, брендові халати для відвідування SPA комплексу.',
                        'Користування шафами покращеного формату.',
                        '<b>Групові тренування</b> – 21 занятя* <div style="display: grid; grid-template-columns: repeat(4, 1fr); padding-left: 50px;"><p style="margin: 0;">Файтинг</p><p style="margin: 0;">Йога</p><p style="margin: 0;">Cross Fit</p><p style="margin: 0;">Барре</p><p style="margin: 0;">Сайкл</p><p style="margin: 0;">Пілатес</p><p style="margin: 0;">Games</p></div> <b>*7 видів тренувань по 3 рази протягом терміну дії клубної карти.</b>',
                        '<b>Масаж класичний</b> – 2 послуги.',
                        'Знижка 7 % на послуги “B Level”.',
                        '<b>Послуги салону краси:</b> <p style="margin: 0;"><b>Women:</b> Послуги стиліста-перукаря (стрижка або укладка) – <b>1 послуги</b><br> або нігтьовий сервіс (класичний манікюр без покриття) – <b>1 послуги</b>.</p><p style="margin: 0;"><b>Men:</b> Послуги перукаря (стрижка) – <b>1 послуги</b><br> або нігтьовий сервіс – <b>1 послуги</b>.</p>'
                    ]
                },
                {id: 3, level: 'level 3',link: require("../../assets/images/TeamG/tickets/level3.png").default,
                    period: { time1: 'пн-пт: 07:00 - 1:00', dayOff: '30 днів'},
                    price: '12 000',
                    details: [
                        'Безліміт на самостійне відвідування спортивного залу.',
                        '<b>Безліміт на відвідування SPA комплексу</b> (римська сольова парова, римський арома грот, російська баня, фінська сауна, лаундж зона) 1 рази на місяць протягом терміну дії клубної карти.',
                        '<b>Гостьове відвідування</b> – 2 рази протягом терміну дії клубної карти.',
                        'Брендові рушники, брендові халати для відвідування SPA комплексу.',
                        'Користування шафами покращеного формату.',
                        '<b>Групові тренування</b> – 14 занятя* <div style="display: grid; grid-template-columns: repeat(4, 1fr); padding-left: 50px;"><p style="margin: 0;">Файтинг</p><p style="margin: 0;">Йога</p><p style="margin: 0;">Cross Fit</p><p style="margin: 0;">Барре</p><p style="margin: 0;">Сайкл</p><p style="margin: 0;">Пілатес</p><p style="margin: 0;">Games</p></div> <b>*7 видів тренувань по 2 рази протягом терміну дії клубної карти.</b>',
                        'Знижка 5 % на послуги “B Level”.',
                        '<b>Послуги салону краси:</b> <p style="margin: 0;"><b>Women:</b> Послуги стиліста-перукаря (стрижка або укладка) – <b>1 послуги</b><br> або нігтьовий сервіс (класичний манікюр без покриття) – <b>1 послуги</b>.</p><p style="margin: 0;"><b>Men:</b> Послуги перукаря (стрижка) – <b>1 послуги</b><br> або нігтьовий сервіс – <b>1 послуги</b>.</p>'
                    ]
                }
            ]
        }
    },
    methods: {
        openDetail(idLevel) {
            this.ticketDetail = this.tickets.filter((ticket) => ticket.id === idLevel)[0];
            this.isModalOpen = true;
        },
        openOrder(level) {
            this.isModalOpen = false;
            this.isModalOrderOpen = true;
            this.choiceLevel = level;
        }
    },
    components: {
        Header,
        Footer,
        PopupTickets,
        MakeOrderPopup
    }
}

</script>

<style lang="scss" scoped>
    .team-g {
        padding-top: 208px;
        background-color: #FFFFFF !important;
    }
    .title {
        padding: 0 7.81vw;
        margin-bottom: 60px;
    }
    .title > h1 {
        font-weight: 600;
        font-style: normal;
        font-family: 'Oswald';
        font-size: 52px;
        margin: 0;
        margin-left: 96px;
        margin-bottom: 30px;
        line-height: 54px;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
    }
    .title > p {
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
        margin-bottom: 10px;
        font-family: 'Raleway';
        font-style: normal;
        font-weight: normal;
        line-height: 28px;
        letter-spacing: 0.05em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
    }
    .title > b {
        font-style: normal;
        font-size: 14px;
        font-family: 'Raleway';
        font-style: normal;
        font-weight: bold;
        line-height: 28px;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
    }
    .tickets {
        grid-template-columns: repeat(3, 321px);
        grid-column-gap: 64px;
        display: grid;
        justify-content: center;
        padding: 0 7.81vw;
        & p {
            text-transform: uppercase;
            margin: 0;
            margin-bottom: 20px;
            padding-left: 10px;
            font-family: Oswald;
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 36px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #916C58;
        }
        & img {
            max-width: 321px;
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        & .detail {
            font-family: Raleway;
            font-weight: bold;
            font-size: 12px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            text-decoration: none;
            color: #000;
            display: flex;
            align-items: center;
            margin-bottom: 60px;
            padding-right: 20px;
            float: right;
            cursor: pointer;
            &:active{
                color: #916C58;
            }

            &:after{
                content: '';
                width: 31px;
                height:16px;
                background: url("../../assets/homeView/arrow-right.svg") no-repeat;
                margin-left: 15px;
            }
        }
    }
    .ticket-title {
        font-family: Oswald;
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 36px;
        text-align: center;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #916C58;
        margin: 0 auto;
        margin-bottom: 28px;
        width: 100%;
        & span {
            text-transform: uppercase;
        }
    }
    .ticket-discript {
        width: 100%;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 25px;
        display: flex;
        margin-bottom: 50px;
        & img {
            max-width: 321px;
            width: 100%;
            margin-left: 20px;
        }
        & .ticket-period {
            width: 100%;
            & p {
                margin: 0;
                line-height: 22px;
                font-family: Raleway;
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                letter-spacing: 0.05em;
                font-feature-settings: 'pnum' on, 'lnum' on;
                color: #000000;
            }
        }
        & .ticket-period-price{
            display: flex;
            grid-column-gap: 25px;
            align-items: center;
            margin-top: 20px;
            & p{
               font-family: Raleway;
                font-style: normal;
                font-weight: 800;
                font-size: 18px;
                line-height: 28px;
                letter-spacing: 0.05em;
                font-feature-settings: 'pnum' on, 'lnum' on;
                color: #916C58;
                margin: 0;
            }
            & button {
                width: 200px;
                height: 46px;
                & span {
                   font-family: Raleway;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 14px;
                    line-height: 16px;
                    letter-spacing: 0.1em;
                    text-transform: uppercase;
                    color: #FFFFFF;
                }
            }
        }
    }
    .ticket-datail {
        list-style: none;
        & li {
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }

        & li::before {
            content: "\2BC0";
            color: #916C58;
            font-weight: bold;
            font-size: 8px;
            display: inline-block;
            width: 1.5em;
            margin-left: -1em;
        }
    }

    .popup-tickets-enter-active,
    .popup-tickets-leave-active {
        transition: all .2s ease;
    }
    .popup-tickets-enter-from,
    .popup-tickets-leave-to {
        opacity: 0;
    }
    @media screen and (max-width: 1023px) and (min-width: 768px) {
        .team-g {
            padding-top: 108px;
            height: 65%;
        }
        .title {
            padding: 0 50px;
            margin-bottom: 40px;
        }
        .title > h1 {
            font-size: 49px;
            margin-left: 57px;
            margin-bottom: 20px;
            line-height: 54px;
        }
        .title > p {
            font-size: 12px;
            margin-bottom: 15px;
            line-height: 22px;
        }
        .title > b {
            font-size: 12px;
            line-height: 22px;
        }
        .tickets {
            grid-template-columns: repeat(3, 171px);
            grid-column-gap: 57px;
            justify-content: center;
            padding: 0 50px;
            & p {
                margin-bottom: 20px;
                padding-left: 10px;
                font-size: 22px;
                line-height: 32px;
            }
            & img {
                max-width: 171px;
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }
            & .detail {
                padding-right: 10px;
            }
        }
        .ticket-title {
            font-size: 22px;
            line-height: 33px;
        }
        .ticket-discript {
            & img {
                max-width: 268px;
            }
            & .ticket-period {
                width: 100%;
                & p {
                    font-size: 12px;
                }
            }
            & .ticket-period-price{
                grid-column-gap: 20px;
                & p{
                    font-size: 16px;
                    line-height: 22px;
                }
                & button {
                    width: 200px;
                    height: 46px;
                }
            }
        }
        .ticket-datail {
            & li {
                font-size: 12px;
                line-height: 22px;
            }
        }
    }
    @media screen and (max-width: 767px){
        .team-g {
            padding-top: 108px;
        }
        .title {
            padding: 0 15px;
            margin-bottom: 50px;
        }
        .title > h1 {
            font-size: 32px;
            margin-left: 50px;
            margin-bottom: 20px;
            line-height: 48px;
        }
        .title > p {
            font-size: 12px;
            margin-bottom: 20px;
            line-height: 18px;
        }
        .title > b {
            font-size: 12px;
            line-height: 18px;
        }
        .tickets {
            grid-template-columns: repeat(1, 290px);
            justify-content: center;
            padding: 0 15px;
            & p {
                margin-bottom: 20px;
                padding-left: 10px;
                font-size: 18px;
                line-height: 27px;
            }
            & img {
                max-width: 290px;
                width: 100%;
                height: auto;
                margin-bottom: 30px;
            }
            & .detail {
                padding-right: 10px;
            }
        }
        .ticket-title {
            font-size: 18px;
            line-height: 27px;
            margin-top: 40px;
        }
        .ticket-discript {
            position: relative;
            left: -250px;
            & img {
                max-width: 268px;
            }
            & .ticket-period {
                width: 100%;
                & p {
                    font-size: 12px;
                }
            }
            & .ticket-period-price{
                grid-column-gap: 20px;
                display: inline-block;
                & p{
                    font-size: 16px;
                    line-height: 22px;
                    margin-bottom: 30px;
                }
                & button {
                    width: 200px;
                    height: 46px;
                }
            }
        }
        .ticket-datail {
            padding: 0 15px;
            & li {
                font-size: 12px;
                line-height: 18px;
            }
        }
    }
    .footer {
        height: 234px;
    }
</style>

