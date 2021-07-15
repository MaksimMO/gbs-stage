<template>
<div class="footer">
    <NavigationMobile />
    <!-- <div class="timetable">Години роботи</div> -->
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <PhoneLink />
    <div class="social-networks">
      <a href="https://www.facebook.com/gbs.level" class="facebook" target="_blank"></a>
      <a href="https://www.instagram.com/gbs.level" class="instagram" target="_blank"></a>
    </div>
  <hr>
  <div class="text-1">
    © 2021 Всі права захищені
  </div>

  <div class="design-text">
    Дизайн:
    <a href="https://www.instagram.com/malina_studio_lviv/?utm_medium=copy_link" target="_blank" class="design-logo"> </a>
  </div>
</div>
</template>

<script>
import PhoneLink from "./PhoneLink.vue";
import NavigationMobile from './navigationMobile.vue'
export default {
  data() {
    return {
    };
  },
  mounted(){

  },
  components: {
    PhoneLink,
    NavigationMobile
  },
};
</script>

<style lang="scss" scoped>
.footer{
    padding: 40px 35px;
    color: #fff;
    background-color: #000;

    display: flex;
    flex-direction: column;
    align-items: center;


// .line-1{
//     display: flex;
//     flex-direction: column;
//     align-items: center;

    // display: grid;
    // grid-template-columns: repeat(5, 1fr);
    // align-items: end;
    // justify-items: center;


  // .logo {
  //   height: 43px;
  //   background-size: contain;
  //   background-repeat: no-repeat;
  //   justify-self: normal;

  //   &.g {
  //     background-image: url("../../assets/images/g-level.svg");
  //   }
  //   &.b {
  //     background-image: url("../../assets/images/b-level.svg");
  //   }
  //   &.s {
  //     background-image: url("../../assets/images/s-level.svg");
  //   }
  // }

  // .timetable {
  //   margin-top: 40px;
  //   font-family: Raleway;
  //   font-size: 14px;
  //   font-style: normal;
  //   font-weight: 600;
  //   letter-spacing: 0.1em;
  // }

  .address {
    margin-top: 30px;
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-align: center;
    letter-spacing: 0.1em;
    white-space: nowrap;
  }

  .phone-link{
    margin-top: 32px;
  }

  .social-networks{
    justify-self: end;
    display: grid;
    grid-template-columns: repeat(2, 16px);
    grid-column-gap: 35px;
    margin-top: 32px;

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
  margin: 40px 0;
  align-self: stretch;
}

    .design-text{
      margin-top: 29px;
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
</style>
