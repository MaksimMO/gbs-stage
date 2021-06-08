
<template>
<swiper :navigation="true" class="mySwiper">
  <swiper-slide v-for="slide in slides" :key="slide.id">
    <img :src="slide.imageUrl" />
      <div class="text-block">
        <div class="current-slide-number">{{slide.id}}/{{slides.length}}</div>
        <div class="title">{{slide.title}}</div>
        <div class="description">{{slide.description}}</div>
        <router-link  :to="`/areas-s/${slide.id}`" class="link-2">Переглянути</router-link>



    </div>
  </swiper-slide>
  </swiper>

</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import areas from './areas.js';


import SwiperCore, {
  Navigation
} from 'swiper/core';

SwiperCore.use([Navigation]);


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

<style lang="scss">
@import 'swiper/swiper.min.css';
@import 'swiper/components/navigation/navigation.min.css';

.mySwiper {
  width: 100%;

  .swiper-button-prev,
  .swiper-button-next {
    --swiper-navigation-size: 25px;
    --swiper-navigation-color: #fff;
    opacity: 0.45;
  }

  .swiper-button-prev {
    left: 60px !important;
  }

  .swiper-button-next {
    right: 60px !important;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    display: flex;
    justify-content: center;
    align-items: center;

    img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .current-slide-number {
      align-self: end;
      text-align: left;
      font-family: Raleway;
      font-size: 24px;
      letter-spacing: 0.05em;
      font-feature-settings: "pnum" on, "lnum" on;
      color: #ffffff;
      opacity: 0.45;
    }

    .text-block {
      position: absolute;
      box-sizing: border-box;
      left: 0;
      width: 65%;
      height: 100%;
      padding: 0 0 64px 120px;
      display: grid;
      grid-template-rows: minmax(min-content, 92px) 1fr 1fr min-content;

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
      }

      .description {
        font-family: Raleway;
        text-align: left;
        font-size: 14px;
        line-height: 28px;
        letter-spacing: 0.05em;
        font-feature-settings: "pnum" on, "lnum" on;
        color: #ffffff;
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
        transition: all 0.2s linear;
        position: relative;
        cursor: pointer;
        z-index: 1;
        margin-top: 30px;

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




