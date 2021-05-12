<template>
<div  class="header">
  <div>
    <div :class="`logo ${level}`"></div>
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <PhoneLink />
    <div class="appointment">Записатися</div>
    <div class="lang">UA</div>
    <div :class="{'close-opened':isOpen, 'menu-open': !isOpen}" @click="isOpen = !isOpen"></div>
  </div>
  <Menu v-show="isOpen" />
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
    background-color: #000;
    padding: 3.13rem 4.25rem 1.87rem 4.25rem;
}
.header > div {
    position: fixed;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    z-index: 1;

  .logo {
    width: 178px;
    height: 84px;
    // background-size: cover;
    // background-repeat: no-repeat;
    // background-position: center;
    // flex-grow: 1;
    // background-size: 178px 84px;

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
    margin-left: 15%;

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
        background: linear-gradient(transparent 50%, #916C58 50%);
        width: 138px;
        text-align: center;
        transition: all .6s ease-out;
        cursor:pointer;
        &:hover{
            background-color:#916C58;
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
    width: 28px;
    height: 28px;
  }
}
</style>
