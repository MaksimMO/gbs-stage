<template>

<Header class="header-invert" />
<Breadcrumb :area="area.title"/>
<div :class="['view-area-s', `area-s-${area.id}`]">

    <div class="title">{{area.title}}</div>
    <div class="description" v-html="area.description"></div>
    <img class="big-image" :src="area.imageUrl" />

    <section class="gallery-slider">
        <GallerySlider :images="area.photos" />
    </section>

    <div class="open-popup-container">
        <div class="open-popup-title">
            Не зволікай, <br> запишись вже сьогодні
        </div>
        <div class="open-popup-text">
           Обери свій рівень!
        </div>
        <button @click="isMakeOrderPopupOpen=true"><span>Записатись</span></button>
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
import areas from "../components/AreasS/areas.js";
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
    mounted() {
        if (areas.find((item)=> item.id === Number(this.id)).photos === undefined) {
            document.querySelector('.gallery-slider').style.display = 'none';
        }
    },

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
.view-area-s{
  background-color: #fff;
  padding: 208px 0 0;
  @media screen and (max-width:767px){
    padding: 110px 0 0;
}
@media screen and (max-width: 1023px) and (min-width: 768px) {
    padding: 110px 0 0;
}

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
        @media screen and (max-width:767px){
            margin-bottom: 20px;
            font-size: 32px;
            line-height: 48px;
            margin-left: 65px;
        }
        @media screen and (max-width: 1023px) and (min-width: 768px) {
            font-size: 49px;
            line-height: 54px;
        }
    }
    .description{
        padding: 0 150px;
        font-family: Raleway;
        font-size: 18px;
        line-height: 32px;
        letter-spacing: 0.05em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
        @media screen and (max-width:767px){
            font-size: 14px;
            line-height: 22px;
            padding: 0 15px;
        }
        @media screen and (max-width: 1023px) and (min-width: 768px) {
            font-size: 16px;
            line-height: 26px;
        }
    }

    .big-image{
        width: 88%;
        margin-left: auto;
        display: block;
        margin-top: 60px;
        margin-bottom: 60px;
        @media screen and (max-width:767px){
            margin-left: unset;
            margin-top: 50px;
            margin-bottom: 30px;
            width: 100%;
            font-size: 12px;
            line-height: 18px;
        }
        @media screen and (max-width: 1023px) and (min-width: 768px) {

        }
    }



    .gallery-slider {
        position: relative;
        padding: 0 7.81vw;
    }

    .open-popup-container{
        // width: max-content;
        background: #f9f8f7;
        padding: 60px 0;
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
            @media screen and (max-width:767px){
                font-size: 30px;
                line-height: 36px;
            }
            @media screen and (max-width: 1023px) and (min-width: 768px) {
                font-size: 45px;
                line-height: 54px;
            }
        }

        .open-popup-text{
            margin: 30px 0;
            font-family: Raleway;
            font-size: 18px;
            line-height: 32px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;

        }
    }
}

</style>
