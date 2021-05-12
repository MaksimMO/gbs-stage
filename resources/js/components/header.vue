<template>
<div  :class="['header', {'is-open':isOpen}]">
  <div :class="['main', {'is-open':isOpen}]">
    <div :class="`logo ${level}`"></div>
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <PhoneLink />
    <div class="appointment">Записатися</div>
    <div class="lang">UA</div>
    <div :class="{'close-opened':isOpen, 'menu-open': !isOpen}" @click="isOpen = !isOpen"></div>
  </div>
  <transition name="slide-fade">
    <Menu v-show="isOpen" />
  </transition>
</div>
</template>

<script>
import PhoneLink from "./PhoneLink.vue";
import Menu from "./Menu.vue";
export default {
    // props: ['isOpen'],
  data() {
    return {
      level: "g",
      isOpen: false,
    };
  },
  components: {
    PhoneLink,
    Menu,
  },
};
</script>

<style lang="scss">
.header{
    position: fixed;
    top: 0;
    box-sizing: border-box;
    width: 100%;
    z-index: 100;
    color: #000;
    padding: 50px 58px 30px 58px;
    background-color: transparent;
    transition: all 0.6s ease;
}
.is-open{
   background-color: #000 !important;
   color: #fff !important;
}
.header:hover{
    background-color: #000;
    color: #fff;
    &>.menu-open{
        filter: brightness(1);
    }
}
.header:hover .main {
    color: #fff;
    background-color: #000;
    &>.menu-open{
        filter: brightness(1);
    }
}
.main {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #000;
    background-color: transparent;
    transition: all 0.8s ease;
    &:hover>.menu-open{
        filter: invert(0%) sepia(93%) saturate(0%) hue-rotate(227deg) brightness(106%) contrast(106%);
        &:hover{
            filter: none;
            cursor: pointer;
            background-image: url("../../assets/images/menu-open-gold.svg");
        }
    }
  .logo {
    width: 178px;
    height: 84px;

    @media screen and (max-width: 767px) {
      width: 90px;
      height: 42px;
      background-size: 92px 42px;
      flex-grow: unset;
    }

    &.g {
      background-image: url("../../assets/images/g-level.svg");
    }
    &.b {
      background-image: url("../../assets/images/b-level.svg");
    }
    &.s {
      background-image: url("../../assets/images/s-level.svg");
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
        width: 138px;
        text-align: center;
        transition: all 0.6s linear;
        position: relative;
        cursor:pointer;
        z-index: 1;

        &:before{
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: #916C58;
            z-index: -1;
            transition: all 0.6s linear;
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
  }
  .close-opened {
    background-image: url("../../assets/images/menu-close.svg");
    background-repeat: no-repeat;
    width: 38px;
    height: 38px;
    &:hover {
        cursor: pointer;
        filter: brightness(1);
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
</style>
