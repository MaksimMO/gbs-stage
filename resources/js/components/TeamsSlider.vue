
<template>
  <swiper :navigation="true" :slidesPerView="4" :spaceBetween="15">
    <swiper-slide v-for="trainer in trainers" :key="trainer.id">
        <TrainerItem
            :key="trainer.id"
            :trainer="trainer"
            :isOpen="isOpen"
            @isShow="(e) => change(e)"
            @isClosed="(e) => change(e)"/>
    </swiper-slide>
    <swiper-slide></swiper-slide>
  </swiper>
</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import TrainerItem from '../components/TrainerItem.vue'

import SwiperCore, {
  Navigation
} from 'swiper/core';

SwiperCore.use([Navigation]);


export default {
  emits: ['isClosed', 'isShow'],
  props: ['trainers', 'isOpen'],
  components: {
    Swiper,
    SwiperSlide,
    TrainerItem,
  },
  data() {
    return {
      isOpacity: false,
      isSelected: false,
      isHovered:false,
    };
  },
  methods: {
    change(e) {
        this.$emit('changeOpen', e);
    }
  },

}
</script>


<style lang="scss" scoped>
@import 'swiper/swiper.min.css';
@import 'swiper/components/navigation/navigation.min.css';

.swiper-container {
    width: 100%;
    height: 100%;
    position: unset;
    margin-bottom: 25px;
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
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    &:nth-child(2n){
        margin-top: 30px;
    }
    & ::v-deep(.trainer-item){
        transition: all .2s ease-in;
        position: relative;
        margin-bottom: 0;
        width: 100%;
        height: 100%;
        // &:nth-child(2n){
        //     // transform-origin: right;
        //     margin-top: 50px;
        // }

        // &:nth-child(4n+1){
        //     transform-origin: left;
        // }
        & .description{
            position: unset;
        }

        &.is-scaled{
            transform:scale(1.3);
            z-index: 101;
            margin-bottom: 0;
        }

        img{
            display:block;
            cursor: pointer;
            width:100%;
        }
    }

  }

.swiper-slide-active {
    & .trainer-item{
        transform-origin: left;
    }
}
.swiper-slide-next + .swiper-slide + .swiper-slide .trainer-item {
    transform-origin: right;
}

.swiper-slide-next + .swiper-slide .trainer-item,
.swiper-slide-next .trainer-item{
    transform-origin: center;
    // -ms-transform-origin-y: top;
    // -webkit-transform-origin-y: top;
}

// .swiper-slide-next .trainer-item {
//     transform-origin: center;
// }

.swiper-slide img {
    display: block;
    // width: 100%;
    height: auto;
    object-fit: cover;
  }


// .info{
//     transform: none;
//     position: absolute;
//     display: block;
//     width:35px;
//     height: 35px;
//     right: 10px;
//     top: 10px;
// }
// .firstName{
//     display: flex;
//     flex-direction: row;
//     justify-content: center;
//     align-items: center;
//     padding: 1px 10px;
//     font-family: Raleway;
//     font-style: normal;
//     font-weight: 600;
//     font-size: 14px;
//     line-height: 14px;
//     color: #FFFFFF;
//     // z-index: 100;
//     position: absolute;
//     width: 91px;
//     height: 16px;
//     left: 30px;
//     bottom: -4px;
//     background: #916C58;
// }
// .lastName{
//     display: flex;
//     flex-direction: row;
//     justify-content: center;
//     align-items: center;
//     padding: 1px 10px;
//     font-family: Raleway;
//     font-style: normal;
//     font-weight: 600;
//     font-size: 14px;
//     line-height: 14px;
//     letter-spacing: 0.05em;
//     color: #FFFFFF;
//     // z-index: 100;
//     position: absolute;
//     width: 91px;
//     height: 16px;
//     left: 30px;
//     bottom: -25px;
//     background: #916C58;
// }
// .descriptionTitle{
//     font-family: Raleway;
//     font-style: normal;
//     font-weight: 800;
//     font-size: 14px;
//     line-height: 24px;
//     letter-spacing: 0.05em;
//     margin: 0;
//     color: #000000;
// }
// .description{
//     display: block;
//     overflow-y: auto;
//     // max-width: 268px;
//     max-height: 200px;
//     left: 0;
//     padding: 0.94rem 1.88rem;
//     top: 328px;
//     font-family: Raleway;
//     font-style: normal;
//     font-weight: 400;
//     font-size: 14px;
//     line-height: 28px;
//     color: #000000;
//     background-color: #ffffff;

//     & p {
//         margin: 0;
//         max-height: 95px;
//     }

//     &::-webkit-scrollbar{
//         width: 10px;
//     }
//     &::-webkit-scrollbar-track{
//         margin-top: 15px;
//         margin-bottom: -100px;
//     }
//     &::-webkit-scrollbar-thumb {
//         background: url('../../assets/images/scroll.svg') no-repeat;
//     }
// }


</style>>




