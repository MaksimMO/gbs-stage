
<template>
  <swiper
  @init="setAspectRatio"
  @resize="setAspectRatio"
  @click="onModalOpen"
  :watchOverflow="true"
    :navigation="true"
    :slidesPerView="2"
    :spaceBetween="15"
    :breakpoints="{
        '320': {
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
        '1441': {
            'slidesPerView': 4,
            'spaceBetween': 15
        }
    }"
  >
    <swiper-slide v-for="(imageUrl, index) in images" :key="index"  >
        <img :src="imageUrl"  />
    </swiper-slide>
    <!-- <swiper-slide></swiper-slide> -->
  </swiper>

  <teleport to="body">
      <SwiperOverlay :slides="images" :indexToShowFrom="indexToShowFrom" v-if="modalOpen" @closePopup="modalOpen=false"/>
  </teleport>

</template>
<script>
import SwiperOverlay from '../components/swiperOverlay.vue';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { preloadLink } from '../utils.js';


// import SwiperCore, {
//   Navigation
// } from 'swiper/core';

// SwiperCore.use([Navigation]);


export default {
  props: ['images'],
  components: {
    Swiper,
    SwiperSlide,
    SwiperOverlay
  },
  data() {
    return {
      isOpacity: false,
      modalOpen:false,
      indexToShowFrom:undefined
    };
  },
  mounted(){
      preloadLink(require(`../../assets/images/zoom-img.svg`).default, 'image');
  },
  methods: {
    setAspectRatio(swiper){
      const widthOfSlider = swiper.slidesSizesGrid[1];
      swiper.el.style.height=`${widthOfSlider}px`

    },
    onModalOpen(e){
      if (e.clickedIndex !== undefined){
        this.modalOpen=true;
        this.indexToShowFrom=e.clickedIndex;
      }
    }
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


    &::after {
      content: url('../../assets/images/zoom-img.svg');
      display: none;
      position: absolute;
      width: 100%;
      height: 100%;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }

    &:hover::after {
        display: flex;
    }

    &:hover  img{
       filter: brightness(0.5);
    }
  }


.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition:filter .2s ease-out;
  }

  @media screen and (max-width: 1023px) and (min-width: 768px) {
      .swiper-container {
        // margin-bottom: 110px;
        ::v-deep(.swiper-button-prev) {
            left: 20px !important;
        }

        ::v-deep(.swiper-button-next) {
            right: 20px !important;
        }
    }
  }

  @media screen and (max-width: 767px) {
      .swiper-container {
          // margin-bottom: 110px;
        ::v-deep(.swiper-button-prev) {
            top: unset;
            bottom: -50px;
            left: 40% !important;
            font-weight: 900;
        }

        ::v-deep(.swiper-button-next) {
            top: unset;
            bottom: -50px;
            right: 40% !important;
            font-weight: 900;
        }
    }
  }



</style>>




