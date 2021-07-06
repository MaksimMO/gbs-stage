<template>
<div class="footer">
  <div class="line-1">
    <router-link :to="`/main-${$root.$data.area}`" class="logo-link-wrapper">
      <div :class="`logo ${$root.$data.area}`"></div>
    </router-link>

    <div class="timetable"><span>Пн - Пт з 07:00 до 23:00</span> <span>Сб - Нд з 08:00 до 23:00</span></div>
    <div class="address"><span>ТСК “МАГІГРАНД”,</span> <span>вул. Келецька, 78В</span></div>
    <PhoneLink />
    <div class="social-networks">
      <a href="https://www.facebook.com/gbs.level" class="facebook"></a>
      <a href="https://www.instagram.com/gbs.level" class="instagram"></a>
    </div>
  </div>
  <div v-if="$root.$data.area == 'g'" class="line-2">
      <router-link class="link-1" to="/about-us-g">Про нас</router-link>
      <router-link class="link-1" to="/areas-g">Зонування</router-link>
      <router-link class="link-1" to="/team-g">Наша команда</router-link>
      <router-link class="link-1" to="/simulators-g">тренажери</router-link>

  </div>
  <div v-if="$root.$data.area == 'b'" class="line-2">
      <router-link class="link-1" to="/main-b">Наша команда</router-link>
      <router-link class="link-1" to="/price-b">Ціни</router-link>
      <router-link class="link-1" to="/contacts-b">Контакти</router-link>
  </div>

  <div v-if="$root.$data.area == 's'" class="line-2">
      <router-link class="link-1" to="/about-us-s">Про нас</router-link>
      <router-link class="link-1" to="/areas-s">Послуги</router-link>
      <router-link class="link-1" to="/contacts-s">Контакти</router-link>
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
export default {
  data() {
    return {
    };
  },
  mounted(){

  },
  components: {
    PhoneLink
  },
};
</script>

<style lang="scss" scoped>
.footer{
    padding: 30px 150px;
    color: #fff;
    background-color: #000;
    overflow: hidden;

    @media screen and (min-width:768px) and (max-width:1023px){
      padding: 17px 50px;
    }



.line-1{
    display: flex;
    grid-column-gap: 10px;
    justify-content: space-between;
    align-items: flex-end;
  .logo-link-wrapper{
      justify-self: normal;
    .logo {
      height: 43px;
      width: 89px;
      background-size: contain;
      background-repeat: no-repeat;

    @media screen and (min-width:768px) and (max-width:1023px){
          height: 23px;
          width: 48px;
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
  }

  .timetable{
    font-family: Raleway;
    font-size: 14px;
    font-style: normal;
    font-weight: 600;
    letter-spacing: 0.1em;
    text-align: center;
    span{
      white-space: nowrap;
    }

    @media screen and (min-width:768px) and (max-width:1023px){
      display: none;

    }
  }

  .address {
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-align: center;
    letter-spacing: 0.1em;
    span{
      white-space:nowrap;
    }


  }
  .phone-link{
    flex-shrink: 0;
  }

  .social-networks{
    justify-self: end;
    display: grid;
    grid-template-columns: repeat(2, 16px);
    grid-column-gap: 35px;

    & > a{
      text-decoration: none;
      width: 16px;
      height:16px;

      &.facebook{
        background-image: url("../../assets/images/facebook.svg");
      }

      &.instagram{
        background-image: url("../../assets/images/instagram.svg");
      }


    }

  }

  }

  .line-2{
    margin-top: 40px;
    display: flex;
    justify-content: center;
    align-items: center;

    @media screen and (min-width:768px) and (max-width:1023px){
      margin-top: 23px;
    }

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

    @media screen and (min-width:768px) and (max-width:1023px){
      font-size: 11px;
      line-height: 13px;
    }

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

  @media screen and (min-width:768px) and (max-width:1023px){
    margin: 16px 0;
  }
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

    @media screen and (min-width:768px) and (max-width:1023px){
      font-size: 10px;
    }

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
