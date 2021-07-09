
<template>
<div class="overlay-swiper">

<div class="close" @click="$emit('closePopup')" ></div>
  <swiper
    :navigation="{ nextEl: '.swiper-navigation-next-1', prevEl: '.swiper-navigation-prev-1'}"
    @init="swiperInit"
  >
  <swiper-slide v-for="image in slides" :key="image.id"  >
      <img v-show="!image.imageUrlOverlay" :src="image.imageUrl" />
      <img v-show="image.imageUrlOverlay" :src="image.imageUrlOverlay" />
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

// ::v-deep(.swiper-wrapper){
//   width:80%;
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
    left: 15px;
    height: 8px;
    width: 31px;
    background: url("../../assets/images/arrow-right-1.svg") no-repeat;
    transform: rotate(180deg);
  }
  .swiper-navigation-next-1{
    right: 15px;
    height: 8px;
    width: 31px;
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
    background-image: url("../../assets/images/menu-close.svg");
    background-repeat: no-repeat;
    width: 26px;
    height: 26px;
    position: absolute;
    right: 60px;
    top: 60px;
    &:hover {
        cursor: pointer;
        filter: brightness(1);
    }

    @media screen and (max-width: 767px) {
      right: 20px;
      top: 20px;
    }
  }

}
</style>>




