
<template>
  <swiper
    :loop="true"
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
            'slidesPerView': 4,
            'spaceBetween': 15
        },
        '1441': {
            'slidesPerView': 4,
            'spaceBetween': 15
        }
    }"
>
    <swiper-slide v-for="trainer in trainers" :key="trainer.id">
        <TrainerItem
            :key="trainer.id"
            :trainer="trainer"
            :isOpen="isOpen"
            :isSlider="true"
            @isShow="(e) => change(e)"
            @isClosed="(e) => change(e)"/>
    </swiper-slide>
    <!-- <swiper-slide></swiper-slide> -->
  </swiper>
</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import TrainerItem from '../components/TrainerItem.vue'

import SwiperCore, {Navigation} from 'swiper/core';

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
    // width: 100%;
    // height: 100%;
    // position: unset;
    // margin-bottom: 25px;
    overflow: unset;
    padding:0 42px;
    z-index: 2;

    .swiper-slide {
        -webkit-tap-highlight-color:  rgba(255, 255, 255, 0);
    }




    ::v-deep(.swiper-button-prev), ::v-deep(.swiper-button-next) {
        --swiper-navigation-size: 20px;
        --swiper-navigation-color: #000;
        opacity: 1;
    }

}


@media screen and (max-width:767px){
            ::v-deep(.swiper-button-prev){
                    background-image: url('../../assets/images/btn-slider-prev.svg');
                    top: -40px;
                    left: calc(100% - 155px) !important;
                    display: initial;
                    width: 66px;
                    height: 46px;

                    &::after{
                    display: none;
                    }
            }

            ::v-deep(.swiper-button-next){
                background-image: url('../../assets/images/btn-slider-next.svg');
                top: -40px;
                display: initial;
                width: 66px;
                height: 46px;

                    &::after{
                    display: none;
                    }
            }

        }

.swiper-slide {
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    -webkit-tap-highlight-color:  rgba(255, 255, 255, 0);

    &:nth-child(2n){

        margin-top: 30px;

        @media screen and (max-width:767px){
            margin-top: initial;
        }
    }
    & ::v-deep(.trainer-item){
        transition: all .2s ease-in;
        position: relative;
        margin-bottom: 0;
        width: 100%;
        height: 100%;

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

::v-deep(.swiper-slide-prev) {
    transition: all .2s ease-in;
    pointer-events: none;
    opacity: 0;
}

::v-deep(.swiper-slide-next + .swiper-slide + .swiper-slide + .swiper-slide){
    transition: all .2s ease-in;
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

@media screen and (max-width: 1024px) and (min-width: 768px) {

    .swiper-container {
        padding: 0 30px;
    }

    .swiper-slide-next + .swiper-slide + .swiper-slide{
        transition: all .2s ease-in;
        pointer-events: none;
        opacity: 0;
    }
  }


  @media screen and (max-width: 767px) {
    .swiper-container {
        padding: 0;
    }

    // .swiper-slide-next + .swiper-slide{
    //     transition: all .2s ease-in;
    //     pointer-events: none;
    //     opacity: 0;
    // }
   }

</style>>




