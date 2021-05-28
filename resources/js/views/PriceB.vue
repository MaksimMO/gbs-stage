<template>
<Header class="header-invert"/>
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
                <ul v-for="(price)  in prices" :key="price.id">
                    <p class="сhapter">{{price.сhapter}}</p>
                    <li  v-for="(list)  in price.lists" :key="list.id">
                        <p class="type-name">{{list.name}}</p>
                        <!-- <p class="line-dotted"></p> -->
                        <p class="type-price">{{list.price}} грн</p>
                    </li>
                </ul>
            </transition-group>
        </div>
      </section>
    </div>
<Footer/>
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
export default {
    data() {
        return {
            direction: 'cosmetology',
            prices: [
                {id: 0, direction: "cosmetology", сhapter: 'Консультації', lists: [
                    {name: 'Первинна консультація трихолога', price: '700'},
                    {name: 'Вторинна консультація трихолога', price: '400'},
                    {name: 'Первинна консультація косметолога', price: '500'},
                    {name: 'Вторинна консультація трихолога', price: '300'}
                ]},
                {id: 1, direction: "cosmetology", сhapter: 'Контурна пластика обличчя', lists: [
                    {name: 'Belotero Balance (1 мл)', price: '7 200'},
                    {name: 'Belotero Volume (1 мл)', price: '5 700'},
                    {name: 'Belotero Lips Shape (0.6 мл)', price: '4 350'},
                    {name: 'Chroma Saypha Volume Plus (1 мл)', price: '5 500'},
                    {name: 'Chroma Saypha Volume (1 мл)', price: '5 700'},
                    {name: 'Juvederm Volbella з лідокаїном (1 мл)', price: '5 800'},
                    {name: 'Juvederm Volift Retouch (0.55 мл)', price: '4 500'},
                    {name: 'Juvederm Volift з лідокаїном (1 мл)', price: '4 700'},
                    {name: 'Juvederm Voluma з лідокаїном (1 мл)', price: '5 800'},
                ]},
                // {id: 2, direction: "cosmetology", сhapter: 'Консультації', list: [
                //     {name: 'Первинна консультація трихолога', price: 700},
                //     {name: 'Вторинна консультація трихолога', price: 400},
                //     {name: 'Первинна консультація косметолога', price: 500},
                //     {name: 'Вторинна консультація трихолога', price: 300}
                // ]},
                // {id: 3, direction: "cosmetology", сhapter: 'Консультації', list: [
                //     {name: 'Первинна консультація трихолога', price: 700},
                //     {name: 'Вторинна консультація трихолога', price: 400},
                //     {name: 'Первинна консультація косметолога', price: 500},
                //     {name: 'Вторинна консультація трихолога', price: 300}
                // ]},
                // {id: 4, direction: "cosmetology", сhapter: 'Консультації', list: [
                //     {name: 'Первинна консультація трихолога', price: 700},
                //     {name: 'Вторинна консультація трихолога', price: 400},
                //     {name: 'Первинна консультація косметолога', price: 500},
                //     {name: 'Вторинна консультація трихолога', price: 300}
                // ]},
                // {id: 5, direction: "cosmetology", сhapter: 'Консультації', list: [
                //     {name: 'Первинна консультація трихолога', price: 700},
                //     {name: 'Вторинна консультація трихолога', price: 400},
                //     {name: 'Первинна консультація косметолога', price: 500},
                //     {name: 'Вторинна консультація трихолога', price: 300}
                // ]},
                // {id: 6, direction: "cosmetology", сhapter: 'Консультації', list: [
                //     {name: 'Первинна консультація трихолога', price: 700},
                //     {name: 'Вторинна консультація трихолога', price: 400},
                //     {name: 'Первинна консультація косметолога', price: 500},
                //     {name: 'Вторинна консультація трихолога', price: 300}
                // ]},
            ]
        }
    },
    // mounted() {
    //     console.log('isMobile', this.$root.$data.isMobile);
    // },
    methods: {
        change(e) {
            this.isOpen = e;
        },
        // openDetail(idSimulator) {
        //     this.simulatorDetail = this.simulators.filter((simulator) => simulator.id === idSimulator)[0];
        //     this.isModalOpen = true;
        // }
    },
    computed: {
        directionCheck () {
            return this.simulators.filter((simulator) => simulator.direction === this.direction);
        },
    },
    components: {
        Header,
        Footer
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
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 15px;
            display: grid;
            &>ul {
                list-style-type: none;
                padding: 0;
                &>p{
                    margin: 0;
                    font-family: Oswald;
                    font-weight: 600;
                    font-size: 24px;
                    line-height: 54px;
                    letter-spacing: 0.02em;
                    font-feature-settings: 'pnum' on, 'lnum' on;
                }
                &>li{
                    font-family: Raleway;
                    font-weight: normal;
                    width: 100%;
                    font-size: 14px;
                    line-height: 28px;
                    letter-spacing: 0.05em;
                    // display: inline-block;
                    overflow: hidden;
                    &::after {
                        content:'............................................................................................................................................................................................................................';
                        display: block;
                        white-space: nowrap;
                        overflow: hidden;
                    }
                    // & .line-dotted {
                    //     display: table-cell;
                    //     overflow: auto;
                    //     width: 100%;
                    //     margin: 0;
                    //     border-bottom: 1px dotted;
                    // }
                    & .type-name {
                        float:left;
                        margin: 0;
                        margin-right: 10px;
                        // display: table-cell;
                    }
                    & .type-price {
                        float:right;
                        // min-width: 85px;
                        // text-align: right;
                        // display: table-cell;
                        margin: 0;
                        margin-left: 10px;
                    }
                }
            }
            // list-style-type: none;
            // overflow: visible;
            // grid-template-columns: repeat(4, 1fr);
            // grid-column-gap: 15px;
            // grid-row-gap: 40px;
            // display: grid;
            // padding: 0;
            // &>div {
            //     cursor: pointer;
            // }
            // & li img {
            //     display:block;
            //     width:100%;
            // }
            // & li div{
            //     font-family: Oswald;
            //     font-style: normal;
            //     font-weight: 600;
            //     font-size: 18px;
            //     line-height: 27px;
            //     letter-spacing: 0.02em;
            //     font-feature-settings: 'pnum' on, 'lnum' on;
            //     color: #000000;
            //     padding: 10px 5px 0 5px;
            // }
        }
    }
    @media screen and (max-width: 768px){
      .price-direction {
        font-size: 14px;
        padding: 0 15px;
        & > .direction {
            display: grid;
            grid-column-gap: 20px;
            grid-template-columns: repeat(2, 1fr);
            grid-row-gap: 22px;
            border-bottom: none;
            & li {
                padding-bottom: 5px;
                &:hover {
                    color: #916C58;
                }
            }
        }
        .invert-color{
            color: #916C58;
            border-bottom: solid 2px #916C58;
        }
        & .simulator {
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 30px;
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

    .footer {
        height: 234px;
    }
</style>

