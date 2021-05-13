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
      document.documentElement.dataset.scroll = window.scrollY;
    }
    document.addEventListener('scroll', debounce(storeScroll), { passive: true });
    storeScroll();

  },
  methods:{

  }
};
</script>

<style lang="scss" scoped>



.header {
    position: fixed;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    z-index: 1;
    padding: 50px 68px;
    transition: all .2s ease-in;

  .logo {
    width: 178px;
    height: 84px;
    transition: all .2s ease-in;

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

    @media screen and (max-width: 767px) {
      font-size: 12px;
      line-height: 14px;
    }
  }

  .menu-open {
    background-image: url("../../assets/images/menu-open.svg");
  }
}

html:not([data-scroll='0']) .header {
  background-color: #000;
  padding: 20px 68px;

  .logo {
    width: 82px;
    height: 38px;
  }
}
</style>