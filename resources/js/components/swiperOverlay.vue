
<template>
<div class="overlay-swiper">

  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="close" @click="$emit('closePopup')">
      <g >
          <rect y="26.8701" width="38" height="1" transform="rotate(-45 0 26.8701)" fill="white"/>
          <rect width="38" height="1" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 27.5771 26.8701)" fill="white"/>
      </g>
  </svg>

  <swiper
    :navigation="{ nextEl: '.swiper-navigation-next-1', prevEl: '.swiper-navigation-prev-1'}"
    @init="swiperInit"
  >
  <swiper-slide v-for="(imageUrl, index) in slides" :key="index"  >
      <img :src="imageUrl" />
  </swiper-slide>

      <div class="swiper-navigation-prev-1"> </div>
      <div class="swiper-navigation-next-1"> </div>
  </swiper>
</div>


</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';


export default {
  props: ['slides','indexToShowFrom'],
  components: {
    Swiper,
    SwiperSlide,
  },
  data(){

  },
  methods: {
    swiperInit(e,y){
      e.slideTo(this.indexToShowFrom, 0)
    }

  },
  beforeMount(){
      document.body.classList.add('overfllow-hidden');
  },

  unmounted(){
      document.body.classList.remove('overfllow-hidden');
  }

}
</script>


<style lang="scss" scoped>
@import 'swiper/swiper.min.css';

.overlay-swiper{
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    z-index: 999;
    background-color: black;
    display: flex;
    // flex-direction: column;
    justify-content: center;
    align-items: center;

.swiper-container {
    // margin: 0 30px;
    // box-sizing: border-box;
    // width: 80%;
    // height: 70%;

    @media screen and (max-width: 767px) {
      // width: initial;
      // height: 80%;
      // height: initial;
    }
}

// ::v-deep(.swiper-container) {
//   align-items: center;
// }

// ::v-deep(.swiper-wrapper){
//   align-items: center;
// }


.swiper-navigation-prev-1,
.swiper-navigation-next-1 {
    position: absolute;
    top: 50%;
    z-index: 10;
    cursor: pointer;

    @media screen and (max-width: 767px) {
      display: none;
    }
  }

  .swiper-navigation-prev-1 {
    left: 40px;
    height: 24px;
    width: 32px;
    background: url("../../assets/images/arrow-right-1.svg") no-repeat;
    transform: rotate(180deg);
  }
  .swiper-navigation-next-1{
    right: 40px;
    height: 24px;
    width: 32px;
    background: url("../../assets/images/arrow-right-1.svg") no-repeat;
  }


.swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;

  padding: 0 60px;
  box-sizing:border-box;
  @media screen and (max-width: 767px) {
      padding: 0;
    }
}

.swiper-slide img {
  width: 100%;
  height: 100%;
  object-fit: contain;
    // @media screen and (max-width: 767px) {
    //       height: initial;
    //       width: 100%
    // }
}

  .close {
    position: absolute;
    right: 30px;
    top: 30px;
    opacity: .5;
    transition: opacity 100ms ease-in;
    cursor:pointer;
    &:hover {
            opacity: 1;
    }
  }

}
</style>>




