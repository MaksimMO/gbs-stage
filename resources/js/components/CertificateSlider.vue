
<template>
  <swiper :navigation="true" :slidesPerView="'auto'">
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
        { id: 1, imageUrl: require("../../assets/images/TeamG/certificate/certificate1.png").default },
        { id: 2, imageUrl: require("../../assets/images/TeamG/certificate/certificate2.png").default },
        { id: 3, imageUrl: require("../../assets/images/TeamG/certificate/certificate3.png").default },
        { id: 4, imageUrl: require("../../assets/images/TeamG/certificate/certificate1.png").default },
        { id: 5, imageUrl: require("../../assets/images/TeamG/certificate/certificate2.png").default },
        { id: 6, imageUrl: require("../../assets/images/TeamG/certificate/certificate3.png").default },
        { id: 7, imageUrl: require("../../assets/images/TeamG/certificate/certificate1.png").default },
        { id: 8, imageUrl: require("../../assets/images/TeamG/certificate/certificate2.png").default },
        { id: 9, imageUrl: require("../../assets/images/TeamG/certificate/certificate3.png").default },
        { id: 10, imageUrl: require("../../assets/images/TeamG/certificate/certificate3.png").default },
        { id: 11, imageUrl: require("../../assets/images/TeamG/certificate/certificate3.png").default },
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
    border-top: solid 2px #F3EFEC;
    border-bottom: solid 2px #F3EFEC;
  }

.swiper-button-prev, .swiper-button-next{
    --swiper-navigation-size: 20px;
    --swiper-navigation-color: #000;
    opacity: 1;

}

.swiper-button-prev{
    left: 62px !important;
}

.swiper-button-next{
    right: 58px !important;
}

.swiper-wrapper {
    left: 250px;
}


.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-left: solid 2px #F3EFEC;
    border-right: solid 2px #F3EFEC;
    padding: 0 39px 0 39px;
    max-width: 18.7vw !important;
    height: auto;
  }

.swiper-slide-prev img {
    opacity: 0.5;
}

.swiper-slide-next + .swiper-slide + .swiper-slide {
      img{
            opacity: 0.5;
        }
  }

.isOpacity {
   opacity: 0.5;
}

.swiper-slide img {
    display: block;
    max-width: 18.7vw !important;
    height: auto;
    object-fit: cover;
  }



</style>>




