
<template>
<swiper :navigation="true" class="mySwiper">
  <swiper-slide v-for="slide in slides" :key="slide.id">
    <img :src="slide.imageUrl" />
    <div class="current-slide">
      {{slide.id}}/{{slides.length}}

    </div>
      <div class="text-block">
        <div class="title">{{slide.title}}</div>
        <div class="description">{{slide.description}}</div>
        <!-- <div class="link-2">Переглянути</div> -->
        <router-link :to="`area-g-${slide.id}`" class="link-2">Переглянути</router-link>
    </div>
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
      slides: [
        { id: 1, imageUrl: require("../../../assets/images/areas/area-1-g.jpg").default,
        title:'ЗОНА ЄДИНОБОРСТВ', description:"Простора ЗОНА ЄДИНОБОРСТВ з професійним рингом, індивідуальними та груповими заняттями по боксу у найкращих тренерів порадує як любителів боксу, так і новачків, які давно мріяли опанувати легендарний удар Брюса Лі." },
        { id: 2, imageUrl: require("../../../assets/images/areas/area-2-g.jpg").default,
        title:'ЗОНА ФУКЦІОНАЛЬНОГО ТРЕНІНГУ ТА КРОСФІТУ', description:"ЇЇ оснащено надсучасними тренажерами, такими як гребля від Concept2, велотренажери Rogue fitness echo Bike та біговою доріжкою Assault Air Runner AS2, що є найновішим технічним рішенням від американських інженерів." },
        { id: 3, imageUrl: require("../../../assets/images/areas/area-3-g.jpg").default,
        title:"Кардіотренування CYCLE", description:"Унікальне супер емоційне кардіотренування CYCLE зі світло- звуковим супроводом на велотренажерах бренду TechnoGym в високотехнологічній кімнаті – це повноцінна вело-гонка з приголомшливими відчуттями та точним відстеженням результатів." },
        { id: 4, imageUrl: require("../../../assets/images/areas/area-4-g.jpg").default,
        title:"Студія BARRE, ЙОГИ та ПІЛАТЕСУ",  description:"Трендовий напрям BARRE - тонке поєднання балетних вправ та силового тренування. Найбільш граційне тренування, що подарує струнке підтягнуте тіло та красиву поставу."},
      ],
    };
  },
  methods: {

  }

}
</script>

<style lang="scss" scoped>
@import './style.scss';
@import 'swiper/swiper.min.css';
@import 'swiper/components/navigation/navigation.min.css'


</style>




