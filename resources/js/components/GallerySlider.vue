
<template>
  <swiper :navigation="true" :slidesPerView="3" :spaceBetween="15">
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
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      isOpacity: false,
      images: [
        { id: 1, imageUrl: require("../../assets/images/TeamG/gallery/photo-1.jpg").default },
        { id: 2, imageUrl: require("../../assets/images/TeamG/gallery/photo-2.jpg").default },
        { id: 3, imageUrl: require("../../assets/images/TeamG/gallery/photo-3.jpg").default },
        { id: 4, imageUrl: require("../../assets/images/TeamG/gallery/photo-1.jpg").default },
        { id: 5, imageUrl: require("../../assets/images/TeamG/gallery/photo-2.jpg").default },
        { id: 6, imageUrl: require("../../assets/images/TeamG/gallery/photo-3.jpg").default },
        { id: 7, imageUrl: require("../../assets/images/TeamG/gallery/photo-1.jpg").default },
        { id: 8, imageUrl: require("../../assets/images/TeamG/gallery/photo-2.jpg").default },
        { id: 9, imageUrl: require("../../assets/images/TeamG/gallery/photo-3.jpg").default },
        { id: 10, imageUrl: require("../../assets/images/TeamG/gallery/photo-1.jpg").default },
        { id: 11, imageUrl: require("../../assets/images/TeamG/gallery/photo-2.jpg").default },
      ],
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
    height: auto;
    object-fit: cover;
  }



</style>>




