
<template>
<swiper :navigation="true" class="mySwiper">
  <swiper-slide v-for="image in images" :key="image.id">
    <img :src="image.imageUrl" />
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
      images: [
        { id: 1, imageUrl: require("../../../assets/images/areas/areaG-1.jpg").default },
        { id: 2, imageUrl: require("../../../assets/images/areas/areaG-2.jpg").default },
        { id: 3, imageUrl: require("../../../assets/images/areas/areaG-3.jpg").default },
        { id: 4, imageUrl: require("../../../assets/images/areas/areaG-4.jpg").default },
      ],
    };
  },
  methods: {

  }

}
</script>

<style lang="scss" scoped>
@import './style.css';
@import 'swiper/swiper.min.css';
@import 'swiper/components/navigation/navigation.min.css'

// @import 'swiper/swiper.scss';
</style>>




