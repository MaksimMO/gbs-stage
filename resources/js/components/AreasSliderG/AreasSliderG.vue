
<template>
<swiper :navigation="true" class="mySwiper">
  <swiper-slide v-for="slide in slides" :key="slide.id">
    <img :src="slide.imageUrl" />
      <div class="text-block">
        <div class="current-slide-number">{{slide.id}}/{{slides.length}}</div>
        <div class="title">{{slide.title}}</div>
        <div class="description">{{slide.description}}</div>
        <router-link :to="`area-g-${slide.id}`" class="link-2">Переглянути</router-link>
    </div>
  </swiper-slide>
  </swiper>
</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';


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
      slides: [
        { id: 1, imageUrl: require("../../../assets/images/areas/area-1-g.jpg").default,
        title:'ЗОНА ЄДИНОБОРСТВ', description:"Простора ЗОНА ЄДИНОБОРСТВ з професійним рингом, індивідуальними та груповими заняттями по боксу у найкращих тренерів порадує як любителів боксу, так і новачків, які давно мріяли опанувати легендарний удар Брюса Лі." },
        { id: 2, imageUrl: require("../../../assets/images/areas/area-2-g.jpg").default,
        title:'ЗОНА ФУКЦІОНАЛЬНОГО ТРЕНІНГУ ТА КРОСФІТУ', description:"ЇЇ оснащено надсучасними тренажерами, такими як гребля від Concept2, велотренажери Rogue fitness echo Bike та біговою доріжкою Assault Air Runner AS2, що є найновішим технічним рішенням від американських інженерів." },
        { id: 3, imageUrl: require("../../../assets/images/areas/area-3-g.jpg").default,
        title:"Кардіотренування CYCLE", description:"Унікальне супер емоційне кардіотренування CYCLE зі світло- звуковим супроводом на велотренажерах бренду TechnoGym в високотехнологічній кімнаті – це повноцінна вело-гонка з приголомшливими відчуттями та точним відстеженням результатів." },
        { id: 4, imageUrl: require("../../../assets/images/areas/area-4-g.jpg").default,
        title:"Студія BARRE, ЙОГИ та ПІЛАТЕСУ",  description:"Трендовий напрям BARRE - тонке поєднання балетних вправ та силового тренування. Найбільш граційне тренування, що подарує струнке підтягнуте тіло та красиву поставу."},
      ],
    };
  },
  methods: {

  }

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
        color: #916c58;
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




