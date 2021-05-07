<template>
  <swiper
    class="parallax-slider"
    :navigation="{ nextEl: '.nextArrow', prevEl: '.prevArrow' }"
    parallax
    grabCursor
    @swiper="onSwiperInitialized"
  >
    <div class="parallax-slider-navigation">
      <div class="nav-indicator prevArrow">
        back
      </div>
      <div class="nav-indicator nextArrow">
        right
      </div>
    </div>
    <swiper-slide
      class="parallax-slide"
      v-for="image in images"
      :key="image.id"
    >
      <div
        class="parallax-slide-image"
        :data-swiper-parallax="parallaxAmount"
        :data-swiper-parallax-opacity="0.5"
      >
        <img :src="image.imageUrl" />
      </div>
    </swiper-slide>
  </swiper>
</template>

<script>
import SwiperCore, { Navigation, Parallax } from "swiper";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/swiper.scss";
import "swiper/components/navigation/navigation.scss";

SwiperCore.use([Navigation, Parallax]);

export default {
  data() {
    return {
      parallaxSwiperWidth: 0,
      images: [
        { id: 1, imageUrl: require("../../../assets/images/areas/areaG-1.jpg").default },
        { id: 2, imageUrl: require("../../../assets/images/areas/areaG-2.jpg").default },
        { id: 3, imageUrl: require("../../../assets/images/areas/areaG-3.jpg").default },
        { id: 4, imageUrl: require("../../../assets/images/areas/areaG-4.jpg").default },
      ],
    };
  },
  computed: {
    parallaxAmount() {
      return this.parallaxSwiperWidth * 0.5;
    },
  },
  components: {
    Swiper,
    SwiperSlide,
  },
  methods: {
    onSwiperInitialized(swiper) {
      this.parallaxSwiperWidth = swiper.width;
    },
  },
};
</script>

<style scoped>
.parallax-slider {
  position: relative;
}
.parallax-slide {
  height: 500px !important;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.parallax-slider-navigation {
  position: absolute;
  top: 50%;
  z-index: 2;
  left: 0;
  right: 0;
  margin: auto;
  display: flex;
  justify-content: space-between;
  height: 0;
}

.parallax-slide-image {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}
.nav-indicator {
  height: 40px;
  width: 40px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  background-color: #6b77f6;
  color: #ffffff;
  border-radius: 40px;
  cursor: pointer;
  position: relative;
  transform: translateY(-50%);
}
</style>
