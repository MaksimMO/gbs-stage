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
      <a href="https://www.facebook.com/gbs.level" class="facebook" target="_blank">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5.5V3.5C9 2.948 9.448 2.5 10 2.5H11V0H9C7.343 0 6 1.343 6 3V5.5H4V8H6V16H9V8H11L12 5.5H9Z" fill="white"/>
        </svg>
      </a>
      <a href="https://www.instagram.com/gbs.level" class="instagram" target="_blank">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 0H5C2.239 0 0 2.239 0 5V11C0 13.761 2.239 16 5 16H11C13.761 16 16 13.761 16 11V5C16 2.239 13.761 0 11 0ZM14.5 11C14.5 12.93 12.93 14.5 11 14.5H5C3.07 14.5 1.5 12.93 1.5 11V5C1.5 3.07 3.07 1.5 5 1.5H11C12.93 1.5 14.5 3.07 14.5 5V11Z" fill="white"/>
            <path d="M8 4C5.791 4 4 5.791 4 8C4 10.209 5.791 12 8 12C10.209 12 12 10.209 12 8C12 5.791 10.209 4 8 4ZM8 10.5C6.622 10.5 5.5 9.378 5.5 8C5.5 6.621 6.622 5.5 8 5.5C9.378 5.5 10.5 6.621 10.5 8C10.5 9.378 9.378 10.5 8 10.5Z" fill="white"/>
            <path d="M12.3 4.23298C12.5944 4.23298 12.833 3.99435 12.833 3.69999C12.833 3.40562 12.5944 3.16699 12.3 3.16699C12.0057 3.16699 11.767 3.40562 11.767 3.69999C11.767 3.99435 12.0057 4.23298 12.3 4.23298Z" fill="white"/>
        </svg>
      </a>
    </div>
  </div>
  <div v-if="$root.$data.area == 'g'" class="line-2">
      <router-link class="link-1" to="/about-us-g">Про нас</router-link>
      <router-link class="link-1" to="/areas-g">Зонування</router-link>
      <router-link class="link-1" to="/team-g">Наша команда</router-link>
      <router-link class="link-1" to="/simulators-g">тренажери</router-link>
      <router-link class="link-1" to="/tickets-g">Абонементи</router-link>
      <router-link class="link-1" to="/schedule-gbs">Розклад</router-link>
      <router-link class="link-1" to="/contacts-g">Контакти</router-link>
  </div>
  <div v-if="$root.$data.area == 'b'" class="line-2">
      <router-link class="link-1" to="/price-b">Ціни</router-link>
      <router-link class="link-1" to="/contacts-b">Контакти</router-link>
  </div>

  <div v-if="$root.$data.area == 's'" class="line-2">
      <router-link class="link-1" to="/areas-s">Послуги</router-link>
      <router-link class="link-1" to="/price-s">Ціни</router-link>
      <router-link class="link-1" to="/contacts-s">Контакти</router-link>
  </div>

  <hr>

  <div class="line-3">
    <div class="text-1">
      © 2021 Всі права захищені
    </div>

    <div class="design-text">
      Дизайн:
      <a href="https://www.instagram.com/malina_studio_lviv/?utm_medium=copy_link" target="_blank" class="design-logo"> </a>
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
    display: flex;
    column-gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
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
        // background-image: url("../../assets/images/facebook.svg");
        &:hover svg > path {
            fill: #916C58;
        }
      }

      &.instagram{
        // background-image: url("../../assets/images/instagram.svg");
        &:hover svg > path {
            fill: #916C58;
        }
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
        display: block;
        margin-left: 12px;
        height: 23px;
        width: 71px;
        background: url("../../assets/images/design-logo.svg") no-repeat;
      }
    }
  }
}
</style>
