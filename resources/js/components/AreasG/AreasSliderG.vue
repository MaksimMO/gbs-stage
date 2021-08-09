
<template>
<swiper
  :loop="true"
  :navigation="true"
  :pagination="{'type': 'fraction'}"

  class="mySwiper"
>
  <swiper-slide v-for="slide in slides" :key="slide.id" @click="$router.push(`/areas-g/${slide.id}`)">
    <img :src="slide.imageUrl" />
     <button @click.stop="$router.push(`/areas-g`)"><span>Всі напрямки</span></button>
      <div class="text-block">
        <div class="title">{{slide.title}}</div>
        <div class="description" v-html="slide.description"></div>
        <router-link  :to="`/areas-g/${slide.id}`" class="link-2">Переглянути</router-link>
    </div>
  </swiper-slide>
  </swiper>

</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import areas from './areas.js';


import SwiperCore, {
  Navigation, Pagination, Autoplay
} from 'swiper/core';

SwiperCore.use([Autoplay, Navigation, Pagination]);


export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      slides:areas
    };
  },
}
</script>

<style lang="scss" scoped>
@import 'swiper/swiper.min.css';
@import 'swiper/components/navigation/navigation.min.css';

.mySwiper {
  width: 100%;


  ::v-deep(.swiper-button-prev),
  ::v-deep(.swiper-button-next) {
    --swiper-navigation-size: 25px;
    --swiper-navigation-color: #fff;
    opacity: 0.45;
  }

  ::v-deep(.swiper-button-prev) {
    left: 60px !important;

      @media screen and (max-width:767px){
        left: calc(100% - 80px) !important;
        top: 35px;
      }
  }

  ::v-deep(.swiper-button-next) {
    right: 60px !important;

      @media screen and (max-width:767px){
        right: 15px !important;
        top: 35px;
      }
  }

    ::v-deep(.swiper-pagination-fraction){
      position: absolute;
      left: 120px;
      top: 25px;
      font-family: Raleway;
      font-size: 18px;
      letter-spacing: 0.05em;
      font-feature-settings: "pnum" on, "lnum" on;
      color: #ffffff;
      opacity: 0.45;
      z-index: 2;

      @media screen and (max-width:767px){
        left: 15px;
      }

      span:nth-of-type(1){
        font-size: 1.5em;
      }
  }

  ::v-deep(.swiper-slide) {
    text-align: center;
    font-size: 18px;
    background: #fff;

    display: flex;
    justify-content: center;
    align-items: center;
    cursor:pointer;

    img {
      display: block;
      width: 100%;
      // height: 100%;
      object-fit: cover;


      @media screen and (max-width:767px){
        height: 446px;
      }
    }

    button{
      position: absolute;
      right: 50px;
      bottom: 70px;
      z-index: 1;

      @media screen and (max-width:767px){
        right: unset;
        left: calc(50% - 120px);
        bottom: 40px;
      }
      @media screen and (max-width: 1024px) and (min-width: 768px) {
        bottom: 20px;
      }
    }


    .text-block {
      position: absolute;
      box-sizing: border-box;
      left: 0;
      bottom: 0;
      width: 65%;
      height: 100%;
      padding: 0 0 64px 120px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;

      @media screen and (max-width:767px){
        padding: 0 15px 0 15px;
        width: 100%;
        padding-bottom: 124px;
      }
      @media screen and (max-width: 1024px) and (min-width: 768px) {
       width: 85%;
       padding-bottom: 40px;
      }

      .title {
        font-family: Oswald;
        font-weight: 600;
        font-size: 64px;
        line-height: 96px;
        letter-spacing: 0.01em;
        font-feature-settings: "pnum" on, "lnum" on;
        color: #FFFFFF;

        opacity: 0.8;

        text-align: left;
        align-self: end;
        margin-bottom: 30px;

        @media screen and (max-width:767px){
          font-size: 36px;
          line-height: 54px;
        }
        @media screen and (max-width: 1280px) and (min-width: 768px) {
          font-size: 45px;
          line-height: 54px;
          margin-bottom: 20px;
        }
      }

      .description {
        font-family: Raleway;
        text-align: left;
        font-size: 18px;
        line-height: 32px;
        letter-spacing: 0.05em;
        font-feature-settings: "pnum" on, "lnum" on;
        color: #ffffff;

        @media screen and (max-width:767px){
          font-size: 14px;
          line-height: 22px;
        }
        @media screen and (max-width: 1280px) and (min-width: 768px) {
          font-size: 16px;
          line-height: 26px;
        }
      }

      .link-2 {
        font-family: Raleway;
        font-weight: 800;
        font-size: 14px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        text-decoration: none;
        width: max-content;
        color: #fff;
        padding: 3px;
        transition: all 0.2s linear;
        position: relative;
        cursor: pointer;
        z-index: 3;
        margin-top: 30px;

        @media screen and (max-width: 1024px) and (min-width: 768px) {
          margin-top: 20px;
        }

        &:before {
          content: "";
          position: absolute;
          bottom: 0;
          left: -8px;
          width: calc(100% + 16px);
          height: 50%;
          background: #916c58;
          z-index: -1;
          transition: all 0.2s linear;
        }
        &:hover:before {
          height: 100%;
        }
        &:active {
          color: #000;
        }
      }
    }
  }
}

</style>




