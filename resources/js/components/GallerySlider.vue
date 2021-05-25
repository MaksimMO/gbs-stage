
<template>
  <swiper
    :navigation="true"
    :slidesPerView="2"
    :spaceBetween="15"
    :breakpoints="{
        '640': {
            'slidesPerView': 2,
            'spaceBetween': 15
        },
        '768': {
            'slidesPerView': 3,
            'spaceBetween': 15
        },
        '1024': {
            'slidesPerView': 3,
            'spaceBetween': 15
        },
        '1440': {
            'slidesPerView': 3,
            'spaceBetween': 15
        },
        '2560': {
            'slidesPerView': 4,
            'spaceBetween': 15
        }
    }"
  >
    <swiper-slide v-for="image in images" :key="image.id">
        <img :src="image.imageUrl" />
    </swiper-slide>
    <swiper-slide></swiper-slide>
  </swiper>
</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';


import SwiperCore, {
  Navigation
} from 'swiper/core';

SwiperCore.use([Navigation]);


export default {
    props: ['images'],
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      isOpacity: false,
    };
  },
  methods: {

  },

}
</script>


<style lang="scss" scoped>
@import 'swiper/swiper.min.css';
@import 'swiper/components/navigation/navigation.min.css';

.swiper-container {
    width: 100%;
    max-height: 380px;
    height: 100%;
    margin-bottom: 60px;
    position: unset;
    ::v-deep(.swiper-button-prev) {
        --swiper-navigation-size: 20px;
        --swiper-navigation-color: #000;
        opacity: 1;
        left: 60px !important;
    }
    ::v-deep(.swiper-button-next) {
        --swiper-navigation-size: 20px;
        --swiper-navigation-color: #000;
        opacity: 1;
        right: 60px !important;
    }
}



.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
  }


.swiper-slide img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
  }



</style>>




