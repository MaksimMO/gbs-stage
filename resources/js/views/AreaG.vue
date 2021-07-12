<template>

<Header class="header-invert" />
<Breadcrumb :area="area.title"/>
<div :class="['view-area-g', `area-g-${area.id}`]">

    <div class="title">{{area.title}}</div>
    <div class="description">{{area.description}}</div>
    <img class="big-image" :src="area.imageUrl" />

    <section class="gallery-slider" v-if="area.photos?.length">
        <GallerySlider :images="area.photos" />
    </section>

    <div class="open-popup-container">
        <div class="open-popup-title">
            Не зволікай, <br> запишись вже сьогодні
        </div>
        <div class="open-popup-text">
            Програма YClientS може забезпечити швидку організацію онлайн залах
        </div>
        <button @click="isMakeOrderPopupOpen=true"><span>Записатись на тренування</span></button>
    </div>


</div>
<Footer />

<teleport to="body">
    <MakeOrderPopup v-if="isMakeOrderPopupOpen" @closePopup="isMakeOrderPopupOpen=false"/>
</teleport>

<teleport to="body">
    <SwiperOverlay v-if="modalOpen" @closePopup="modalOpen=false"/>
</teleport>


</template>

<script>
import areas from "../components/AreasG/areas.js";
import Header from "../components/Header.vue";
import Footer from "../components/Footer.vue";
import GallerySlider from '../components/GallerySlider.vue';
import SwiperOverlay from '../components/swiperOverlay.vue';
import MakeOrderPopup from '../components/MakeOrderPopup.vue';
import Breadcrumb from '../components/Breadcrumb.vue';


export default {

    data(){
        return {
            areas,
            modalOpen:false,
            isMakeOrderPopupOpen:false,
        }

    },
    props:['id'],

    computed:{
        area(){
            return areas.find((item)=> item.id === Number(this.id) );
        }

    },
    components:{
        GallerySlider,
        Header,
        Footer,
        SwiperOverlay,
        MakeOrderPopup,
        Breadcrumb
    }
}
</script>

<style lang='scss' scoped>
.view-area-g{
  background-color: #fff;
  padding: 208px 0 60px;

    .title{
        font-family: Oswald;
        font-weight: 600;
        font-size: 52px;
        line-height: 54px;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
        margin-bottom: 30px;
        margin-left: 216px;
    }
    .description{
        padding: 0 150px;
        font-family: Raleway;
        font-size: 14px;
        line-height: 28px;
        letter-spacing: 0.05em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
    }

    .big-image{
        width:88%;
        margin-left: auto;
        display: block;
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .gallery-slider {
        position: relative;
        padding: 0 7.81vw;
    }

    .open-popup-container{
        width: max-content;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;

        .open-popup-title{
            font-family: Oswald;
            font-weight: 600;
            font-size: 64px;
            line-height: 64px;
            text-align: center;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }

        .open-popup-text{
            margin: 30px 0;
            font-family: Raleway;
            font-size: 14px;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
}

</style>
