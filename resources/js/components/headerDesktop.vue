<template>
<div  :class="['header', {'is-open':isOpen, 'isScroll': scrollYdata != 0 && !isOpen}]" v-if="!$root.$data.isMobile">
  <div :class="['main']">

     <router-link :to="`/main-${$root.$data.area}`">
        <div :class="`logo ${$root.$data.area}`"></div>
     </router-link>

    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <PhoneLink :class="{'is-open':isOpen}"/>
    <div class="appointment" @click="modalOpen=true">Залишити заявку</div>
    <teleport to="body">
      <MakeOrderPopup v-if="modalOpen" @closePopup="modalOpen=false"/>
    </teleport>
    <LanguageSwitcher :class="{'is-open':isOpen}"/>
    <div :class="{'close-opened':isOpen, 'menu-open': !isOpen}" @click="isOpen = !isOpen"></div>
  </div>
  <transition name="slide-fade">
    <MenuG v-show="isOpen && $root.$data.area == 'g'" />
  </transition>
  <transition name="slide-fade">
    <MenuB v-show="isOpen && $root.$data.area == 'b'" />
  </transition>
  <transition name="slide-fade">
    <MenuS v-show="isOpen && $root.$data.area == 's'" />
  </transition>
</div>
</template>

<script>
import PhoneLink from "./PhoneLink.vue";
import MenuG from "./MenuG.vue";
import MenuB from "./MenuB.vue";
import MenuS from "./MenuS.vue";
import LanguageSwitcher from "./LanguageSwitcher.vue";
import MakeOrderPopup from './MakeOrderPopup.vue'
import { preloadLink } from '../utils.js';


export default {
  data() {
    return {
      isOpen: false,
      scrollYdata: 0,
      modalOpen:false
    };
  },
  components: {
    PhoneLink,
    MenuG,
    MenuB,
    MenuS,
    LanguageSwitcher,
    MakeOrderPopup
  },
  mounted(){
    const debounce = (fn) => {
      let frame;

      return (...params) => {
        if (frame) {
          cancelAnimationFrame(frame);
        }
        frame = requestAnimationFrame(() => {

          fn(...params);
        });

      }
    };
    const storeScroll = () => {
        this.scrollYdata = window.scrollY;
            document.documentElement.dataset.scroll = this.scrollYdata;
    }
    document.addEventListener('scroll', debounce(storeScroll), { passive: true });
    storeScroll();


    preloadLink('feedBackFormView/background-g.png', 'image')
  },
};
</script>

<style lang="scss" scoped>
.header{
    position: fixed;
    top: 0;
    box-sizing: border-box;
    width: 100%;
    z-index: 120;
    color: #fff;
    padding: 50px 58px 30px 58px;
    background-color: transparent;
    transition: all 0.6s ease-in;
}

.header-invert {
    color: #000 !important;
    & .phone-link{
        position: relative;
        color: #000;
    }
    & .phone-link::before {
        position: absolute;
        left: -25px;
    }
    & .buttonLang {
        color: #000 !important;
    }
    & .close-opened{
        filter: brightness(0.6);
    }
    & .menu-open{
        filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(274deg) brightness(102%) contrast(105%);
    }
    & .main>a>.logo.g {
      background: url("../../assets/images/g-level-darck.svg") no-repeat;
      background-size: contain;
    }
    & .main>a>.logo.b {
      background: url("../../assets/images/b-level-darck.svg") no-repeat;
      background-size: contain;
    }
    & .main>a>.logo.s {
      background: url("../../assets/images/s-level-darck.svg") no-repeat;
      background-size: contain;
    }
}
.is-open{
   background-color: #000 !important;
   color: #fff !important;
   transition: all 0.6s ease;
   & .buttonLang{
       color: #fff !important;
   }
   & .main{
        color: #fff;
        &>.phone-link{
            color: #fff;
        }
    }
   & .main>a>.logo.g {
        background: url("../../assets/images/g-level.svg") no-repeat;
        background-size: contain;
    }
    & .main>a>.logo.b {
        background: url("../../assets/images/b-level.svg") no-repeat;
        background-size: contain;
    }
    & .main>a>.logo.s {
        background: url("../../assets/images/s-level.svg") no-repeat;
        background-size: contain;
    }
}

.main {
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.6s ease;
    &>a>.logo {
        width: 178px;
        height: 84px;
        transition: all 0.6s ease-in;
    &.g {
      background: url("../../assets/images/g-level.svg") no-repeat;
      background-size: contain;
    }
    &.b {
      background: url("../../assets/images/b-level.svg") no-repeat ;
      background-size: contain;
    }
    &.s {
      background: url("../../assets/images/s-level.svg") no-repeat;
      background-size: contain;
    }
  }
  .address {
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-align: center;
    letter-spacing: 0.1em;
    margin-left: 7%;
    margin-right: 2%;

    @media screen and (max-width: 767px) {
      font-size: 12px;
      line-height: 14px;
    }
  }
    .appointment{
        font-family: Raleway;
        font-style: normal;
        font-weight: 800;
        font-size: 14px;
        line-height: 16px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 3px;
        // width: 138px;
        text-align: center;
        transition: all 0.6s linear;
        position: relative;
        cursor:pointer;
        z-index: 1;

        &:before{
            content: '';
            position: absolute;
            bottom: 0;
            left: -2%;
            width: 104%;
            height: 50%;
            background: #916C58;
            z-index: -1;
            transition: all 0.2s linear;
        }
        &:hover:before{
            height: 100%;
        }
        &:active{
            color: #000;
        }
    }
  .menu-open {
    background-image: url("../../assets/images/menu-open.svg");
    width: 38px;
    height: 21px;
    &:hover{
        filter: none;
        cursor: pointer;
        background-image: url("../../assets/images/menu-open-gold.svg");
    }
  }
  .close-opened {
    background-image: url("../../assets/images/menu-close.svg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 100%;
    width: 38px;
    height: 38px;
    &:hover {
        cursor: pointer;
        background-image: url("../../assets/images/menu-close-white.svg");
    }
  }
}
.slide-fade-enter-active {
  animation: show-in 0.6s;
}

.slide-fade-leave-active {
  animation: show-in 0.6s reverse;
}

@keyframes show-in {
  0% {
    transform: translateY(-30px);
    opacity: 0.5;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

.isScroll {
  background-color: #000;
  padding: 20px 68px;
  color: #FFFFFF;
  .main {
    color: #FFFFFF;
    &>.phone-link {
        color: #FFFFFF;
        &:hover {
            color: #916C58;
        }
    }
    &>.selectLang>.buttonLang {
        color: #FFFFFF;
    }
    &>.menu-open{
        filter: none;
    }
  }
    & .main>a>.logo {
        width: 82px;
        height: 38px;
        &.g {
            background: url("../../assets/images/g-level.svg") no-repeat;
            background-size: contain;
        }
        &.b {
            background: url("../../assets/images/b-level.svg") no-repeat;
            background-size: contain;
        }
        &.s {
            background: url("../../assets/images/s-level.svg") no-repeat;
            background-size: contain;
        }
    }
}

@media screen and (max-width: 1023px) and (min-width: 768px) {
    .header {
        opacity: .8;
        padding: 27px 20px;
    }
    .main {
        &>a>.logo {
            width: 72px;
            height: 33px;
        }
    }
    .address {
        display: none;
    }
    .isScroll {
        & .main>a>.logo {
            width: 72px;
            height: 33px;
        }
    }
}

@media screen and (max-width: 767px){
    .header {
        opacity: .8;
        padding: 27px 20px;
    }
    .main {
        &>a>.logo {
            width: 72px;
            height: 33px;
        }
    }
    .address {
        display: none;
    }
    .isScroll {
        & .main>a>.logo {
            width: 72px;
            height: 33px;
        }
    }
}


// html:not([data-scroll='0']) .header, .header-invert.main {
//   background-color: #000;
//   padding: 20px 68px;
//   color: #FFFFFF;
//   .main {
//     color: #FFFFFF;
//     &>.phone-link {
//         color: #FFFFFF;
//         &:hover {
//             color: #916C58;
//         }
//     }
//     &>.selectLang>.buttonLang {
//         color: #FFFFFF;
//     }
//     &>.menu-open{
//         filter: none;
//     }
//   }
//   .logo {
//     width: 82px;
//     height: 38px;
//     &.g {
//       background: url("../../assets/images/g-level.svg") no-repeat;
//       background-size: contain;
//     }
//   }
// }
</style>
