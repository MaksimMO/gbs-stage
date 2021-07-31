<template>
<div  :class="['header', {'is-open':isOpen, 'isScroll': scrollYdata != 0 && !isOpen}]">
  <div :class="['main']">
    <router-link :to="`/main-${$root.$data.area}`" v-show="!isOpen">
    <div :class="`logo ${$root.$data.area}`"></div>
    </router-link>
    <!-- <LanguageSwitcher :class="{'is-open':isOpen}" v-show="isOpen"/> -->
    <PhoneLink :class="{'is-open':isOpen}"/>
    <div class="at-left">
      <router-link :to="`/my-account`" class="my-account-link">
      <svg width="46" height="24" viewBox="0 0 46 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M26.0778 12.9407L29.5345 14.5119C30.427 14.9176 31 15.8075 31 16.7878V17.5C31 18.8807 29.8807 20 28.5 20H17.5C16.1193 20 15 18.8807 15 17.5V16.7878C15 15.8075 15.573 14.9176 16.4655 14.5119L19.9222 12.9407C18.7521 12.0255 18 10.6006 18 9C18 6.23858 20.2386 4 23 4C25.7614 4 28 6.23858 28 9C28 10.6006 27.2479 12.0255 26.0778 12.9407ZM20.9613 13.5668L16.8793 15.4223C16.3438 15.6657 16 16.1996 16 16.7878V17.5C16 18.3284 16.6716 19 17.5 19H28.5C29.3284 19 30 18.3284 30 17.5V16.7878C30 16.1996 29.6562 15.6657 29.1207 15.4223L25.0387 13.5668C24.4161 13.8452 23.7261 14 23 14C22.2739 14 21.5839 13.8452 20.9613 13.5668ZM23 13C25.2091 13 27 11.2091 27 9C27 6.79086 25.2091 5 23 5C20.7909 5 19 6.79086 19 9C19 11.2091 20.7909 13 23 13Z" />
        <rect opacity="0.15" x="45" width="1" height="21" />
        <rect opacity="0.15" width="1" height="21" />
      </svg>
      </router-link>

      <div :class="{'close-opened':isOpen, 'menu-open': !isOpen}" @click="isOpen = !isOpen"></div>
    </div>
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

    .at-left{
      display: flex;
      column-gap: 20px;

      .my-account-link{
        fill:black;
      }
    }

}

.header-invert {
    color: #000 !important;
    & .phone-link{
        // position: relative;
        color: #000;
    }
    & .phone-link::before {
        // left: -25px;
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
