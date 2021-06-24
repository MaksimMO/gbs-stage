
<template>
  <swiper
  @click="onModalOpen"
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
    <swiper-slide v-for="image in images" :key="image.id"  >
        <img :src="image.imageUrl"  />
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
  methods: {
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
        ::v-deep(.swiper-button-prev) {
            display: none;
        }

        ::v-deep(.swiper-button-next) {
            display: none;
        }
    }
  }



</style>>




