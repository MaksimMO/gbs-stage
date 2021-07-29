<template>
<div  :class="['header', {'is-open':isOpen, 'isScroll': scrollYdata != 0 && !isOpen}]">
  <div :class="['main']">
    <router-link :to="`/main-${$root.$data.area}`" v-show="!isOpen">
    <div :class="`logo ${$root.$data.area}`"></div>
    </router-link>
    <!-- <LanguageSwitcher :class="{'is-open':isOpen}" v-show="isOpen"/> -->
    <PhoneLink :class="{'is-open':isOpen}"/>
    <router-link :to="`/my-account`" class="my-account-link">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.0778 8.9407L14.5345 10.5119C15.427 10.9176 16 11.8075 16 12.7878V13.5C16 14.8807 14.8807 16 13.5 16H2.5C1.11929 16 0 14.8807 0 13.5V12.7878C0 11.8075 0.573007 10.9176 1.46549 10.5119L4.92216 8.9407C3.75209 8.02554 3 6.6006 3 5C3 2.23858 5.23858 0 8 0C10.7614 0 13 2.23858 13 5C13 6.6006 12.2479 8.02554 11.0778 8.9407ZM5.96127 9.56684L1.8793 11.4223C1.3438 11.6657 1 12.1996 1 12.7878V13.5C1 14.3284 1.67157 15 2.5 15H13.5C14.3284 15 15 14.3284 15 13.5V12.7878C15 12.1996 14.6562 11.6657 14.1207 11.4223L10.0387 9.56684C9.41611 9.84521 8.72613 10 8 10C7.27387 10 6.58389 9.84521 5.96127 9.56684ZM8 9C10.2091 9 12 7.20914 12 5C12 2.79086 10.2091 1 8 1C5.79086 1 4 2.79086 4 5C4 7.20914 5.79086 9 8 9Z" fill="white"/>
      </svg>
    </router-link>

    <div :class="{'close-opened':isOpen, 'menu-open': !isOpen}" @click="isOpen = !isOpen"></div>
  </div>
  <transition name="menu-mobile">
    <MenuGmobile @setOnCloseFalse="isOpen = false" v-show="isOpen && $root.$data.area == 'g'" />
  </transition>
  <transition name="menu-mobile">
    <MenuBmobile @setOnCloseFalse="isOpen = false" v-show="isOpen && $root.$data.area == 'b'" />
  </transition>
  <transition name="menu-mobile">
    <MenuSmobile @setOnCloseFalse="isOpen = false" v-show="isOpen && $root.$data.area == 's'" />
  </transition>
</div>



</template>

<script>
import PhoneLink from "./PhoneLink.vue";
import MenuGmobile from "./MenuGmobile.vue";
import MenuBmobile from "./MenuBmobile.vue";
import MenuSmobile from "./MenuSmobile.vue";
import LanguageSwitcher from "./LanguageSwitcher.vue";
import { preloadLink } from '../utils.js';

export default {
  data() {
    return {
      isOpen: false,
      scrollYdata: 0
    };
  },
  components: {
    PhoneLink,
    MenuGmobile,
    MenuBmobile,
    MenuSmobile,
    LanguageSwitcher,
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



    preloadLink(require(`../../assets/feedBackFormView/background-${this.$root.$data.area}.jpg`).default)
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
    padding: 30px 15px;
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
   height: 100%;

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
        width: 50px;
        height: 23px;
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
  .menu-open {
    background-image: url("../../assets/images/menu-open.svg");
    width: 30px;
    height: 21px;
    &:hover{
        filter: none;
        cursor: pointer;
        background-image: url("../../assets/images/menu-open-gold.svg");
    }
  }
  .close-opened {
    background-image: url("../../assets/homeView/arrow-right.svg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 100%;
    width: 30px;
    height: 21px;
    &:hover {
        cursor: pointer;
        background-image: url("../../assets/homeView/arrow-right.svg");
    }
  }
}
.menu-mobile-enter-active,
.menu-mobile-leave-active {
    transition: all .2s ease;
}
.menu-mobile-enter-from,
.menu-mobile-leave-to {
    opacity: 0;
    transform: translateY(-30px);
}

.isScroll {
  background-color: #000;
  padding: 30px 15px;
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
        width: 50px;
        height: 23px;
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

</style>
