<template>
  <div class="header">
    <div :class="`logo ${level}`"></div>
    <PhoneLink />
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <div class="appointment">Записатися</div>
    <div class="lang">UA</div>
    <div class="menu-open"></div>
  </div>
</template>

<script>
import PhoneLink from "./PhoneLink.vue";
export default {
  data() {
    return {
      level: "g",
    };
  },
  components: {
    PhoneLink,
  },
};
</script>

<style lang="scss">
.header {
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

    @media screen and (max-width: 767px) {
      font-size: 12px;
      line-height: 14px;
    }
  }

  .menu-open {
    background-image: url("../../assets/images/menu-open.svg");
  }
}
</style>