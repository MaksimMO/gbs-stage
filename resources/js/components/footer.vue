<template>
<div class="footer">
  <div class="line-1">
    <div :class="`logo ${level}`"></div>
    <div class="timetable">Години роботи</div>
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <PhoneLink />
    <!-- <div class="social-networks"></div> -->
    <SocialNetworks  class="social-networks"/>
  </div>
  <div class="line-2">
      <router-link class="link-1" to="/about-us-g">Про нас</router-link>
      <router-link class="link-1" to="/areas-g">Зонування</router-link>
      <router-link class="link-1" to="/team-g">Наша команда</router-link>
      <router-link class="link-1" to="/">тренажери</router-link>
      <!-- <router-link class="link-1" to="/">Комфорт і чистота</router-link>
      <router-link class="link-1" to="/">Фітнес бар</router-link>
      <router-link class="link-1" to="/">Безпека та мед кабінет</router-link> -->
  </div>

  <hr>

  <div class="line-3">
    <div class="text-1">
      © 2021 Всі права захищені
    </div>

    <div class="design-text">
      Дизайн:
      <div class="design-logo"> </div>
    </div>


  </div>


</div>
</template>

<script>
import PhoneLink from "./PhoneLink.vue";
import SocialNetworks from "./SocialNetworks.vue";
export default {
  data() {
    return {
      level: "g",
    };
  },
  components: {
    PhoneLink,
    SocialNetworks
  },
};
</script>

<style lang="scss">
.footer{
    padding: 30px 150px;
    color: #fff;
    background-color: #000;



.line-1{
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    align-items: end;
    justify-items: center;


  .logo {
    height: 43px;
    background-size: contain;
    background-repeat: no-repeat;
    justify-self: normal;

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

  .timetable{
    font-family: Raleway;
    font-size: 14px;
    font-style: normal;
    font-weight: 600;
    letter-spacing: 0.1em;
  }

  .address {
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-align: center;
    letter-spacing: 0.1em;
    white-space: nowrap;
  }

  .social-networks{
    width: 108px;
    height:16px;
    background-image: url("../../assets/images/social-icons.svg");
    justify-self: end;
  }

  }

  .line-2{
    margin-top: 40px;
    display: flex;
    justify-content: center;
    align-items: center;

    .link-1{
      text-align: center;

      color: #FFFFFF;
      opacity: 0.55;
      text-decoration: none;
      font-family: Raleway;
      font-weight: 600;
      font-size: 14px;
      line-height: 16px;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transition:opacity .2s ease-in;

      margin-right:60px;

      &:last-of-type{
        margin-right: 0;
      }

      &:hover{
        opacity:1;
      }
    }
  }

hr{
  background: #FFFFFF;
  opacity: 0.15;
  height: 1px;
  margin: 30px 0;
}
  .line-3{
    display: grid;
    grid-template-columns: 1fr 1fr;



    font-family: Raleway;
    font-style: normal;
    font-weight: 500;
    font-size: 12px;
    line-height: 14px;

    letter-spacing: 0.1em;
    text-transform: uppercase;
    font-feature-settings: 'pnum' on, 'lnum' on;
    color: #FFFFFF;

    .text-1{
    }


    .design-text{
      display: flex;
      align-items: flex-end;
      justify-self: end;

      .design-logo{
        margin-left: 12px;
        height: 23px;
        width: 71px;
        background: url("../../assets/images/design-logo.svg") no-repeat;
      }
    }
  }
}
</style>