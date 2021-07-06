
<template>
  <swiper :navigation="true" :slidesPerView="'auto'" >
    <swiper-slide v-for="image in images" :key="image.id" @click="checkClick">
        <img :src="image.imageUrl"/>
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
        { id: 1, imageUrl: require("../../assets/images/TeamB/brandMakeUp/loreal.jpg").default },
        { id: 2, imageUrl: require("../../assets/images/TeamB/brandMakeUp/dior.jpg").default },
        { id: 3, imageUrl: require("../../assets/images/TeamB/brandMakeUp/academie.jpg").default },
        { id: 4, imageUrl: require("../../assets/images/TeamB/brandMakeUp/american_crew.jpg").default },
        { id: 5, imageUrl: require("../../assets/images/TeamB/brandMakeUp/clarins.jpg").default },
        { id: 6, imageUrl: require("../../assets/images/TeamB/brandMakeUp/depot.jpg").default },
        { id: 7, imageUrl: require("../../assets/images/TeamB/brandMakeUp/helena.jpg").default },
        { id: 8, imageUrl: require("../../assets/images/TeamB/brandMakeUp/holy-land-logo-8.jpg").default },
        { id: 9, imageUrl: require("../../assets/images/TeamB/brandMakeUp/kerastase-vector-logo.jpg").default },
        { id: 10, imageUrl: require("../../assets/images/TeamB/brandMakeUp/lancome_paris.jpg").default },
        { id: 11, imageUrl: require("../../assets/images/TeamB/brandMakeUp/lebel_Logo.jpg").default },
        { id: 12, imageUrl: require("../../assets/images/TeamB/brandMakeUp/logo_black.jpg").default },
        { id: 13, imageUrl: require("../../assets/images/TeamB/brandMakeUp/luxio.jpg").default },
        { id: 14, imageUrl: require("../../assets/images/TeamB/brandMakeUp/napura_black.jpg").default },
        { id: 15, imageUrl: require("../../assets/images/TeamB/brandMakeUp/semilac-logo-super_nowe.jpg").default },
        { id: 16, imageUrl: require("../../assets/images/TeamB/brandMakeUp/Shiseido_logo_red.jpg").default },
        { id: 17, imageUrl: require("../../assets/images/TeamB/brandMakeUp/yonka.jpg").default },
      ],
    };
  },
  methods: {
      checkClick() {
          console.log('click sertificate');
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
    border-top: solid 2px #F3EFEC;
    border-bottom: solid 2px #F3EFEC;
    ::v-deep(.swiper-button-prev) {
        --swiper-navigation-size: 20px;
        --swiper-navigation-color: #000;
        opacity: 1;
        left: 62px !important;
    }
    ::v-deep(.swiper-button-next) {
        --swiper-navigation-size: 20px;
        --swiper-navigation-color: #000;
        opacity: 1;
        right: 58px !important;
    }
    ::v-deep(.swiper-wrapper) {
        left: 250px;
    }
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
    padding: 40px 39px;
    max-width: 18.7vw !important;
    height: auto;
    // &::after {
    //     content: url('../../assets/images/zoom-img.svg');
    //     display: none;
    //     position: absolute;
    //     background-color: rgba(0, 0, 0, 0.1);
    //     width: 100%;
    //     height: 100%;
    //     justify-content: center;
    //     align-items: center;
    //     cursor: pointer;
    // }
    // &:hover::after {
    //     display: flex;
    // }
  }

.swiper-slide-prev {
    pointer-events: none;
    &::after {
        content: '';
        position: unset;
        display: none;
        background-color: unset;
        width: unset;
        height: unset;
    }
    & img {
        opacity: 0.15;
    }
}

.swiper-slide-next + .swiper-slide + .swiper-slide {
    pointer-events: none;
    &::after {
        content: '';
        position: unset;
        background-color: unset;
        width: unset;
        height: unset;
        display: none;
    }
    & img{
        opacity: 0.15;
    }
  }

.swiper-slide img {
    display: block;
    max-width: 18.7vw !important;
    height: auto;
    object-fit: cover;
  }

@media screen and (max-width: 1023px) and (min-width: 768px) {
    .swiper-container {
        ::v-deep(.swiper-button-prev) {
            display: none;
        }
        ::v-deep(.swiper-button-next) {
            display: none;
        }
        ::v-deep(.swiper-wrapper) {
            left: 200px;
        }
    }
    .swiper-slide-next + .swiper-slide {
        pointer-events: none;
        &::after {
            content: '';
            position: unset;
            background-color: unset;
            width: unset;
            height: unset;
            display: none;
        }
        & img{
            opacity: 0.5;
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
        ::v-deep(.swiper-wrapper) {
            left: 150px;
        }
    }
    .swiper-slide-next + .swiper-slide {
        pointer-events: none;
        &::after {
            content: '';
            position: unset;
            background-color: unset;
            width: unset;
            height: unset;
            display: none;
        }
        & img{
            opacity: 0.5;
        }
    }
  }

  @media screen and (max-width: 425px) {
    .swiper-container {
        ::v-deep(.swiper-button-prev) {
            display: none;
        }
        ::v-deep(.swiper-button-next) {
            display: none;
        }
        ::v-deep(.swiper-wrapper) {
            left: 130px;
        }
    }
    .swiper-slide-next {
        pointer-events: none;
        &::after {
            content: '';
            position: unset;
            background-color: unset;
            width: unset;
            height: unset;
            display: none;
        }
        & img{
            opacity: 0.5;
        }
    }
  }


</style>




