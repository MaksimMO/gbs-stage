<template>
<div  :class="['header', {'is-open':isOpen, 'isScroll': scrollYdata != 0 && !isOpen}]">
  <div :class="['main']">
    <router-link :to="`/main-${$root.$data.area}`" v-show="!isOpen">
    <div :class="`logo ${$root.$data.area}`"></div>
    </router-link>
    <!-- <LanguageSwitcher :class="{'is-open':isOpen}" v-show="isOpen"/> -->
    <PhoneLink :class="{'is-open':isOpen}"/>
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
