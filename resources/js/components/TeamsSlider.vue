
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
    overflow: unset;
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
        // & .description{
        //     position: unset;
        // }

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
.swiper-slide-prev {
    pointer-events: none;
    opacity: 0;
}

.swiper-slide-next + .swiper-slide + .swiper-slide + .swiper-slide{
    pointer-events: none;
    opacity: 0;
}
.swiper-slide-next + .swiper-slide + .swiper-slide .trainer-item {
    transform-origin: right;
}

.swiper-slide-next + .swiper-slide .trainer-item,
.swiper-slide-next .trainer-item{
    transform-origin: center;
}


.swiper-slide img {
    display: block;
    // width: 100%;
    height: auto;
    object-fit: cover;
  }

</style>>




