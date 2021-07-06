<template>
<Header class="header-invert"/>
<Breadcrumb />
  <div :class="{'team-g': !$root.$data.isMobile, 'team-g-mobile': $root.$data.isMobile}">
      <section class="title">
          <h1>Наша команда</h1>
          <p>
            Команда G LEVEL - це професійні тренера та інструктори, кандидати та майстри спорту,
            під керівництвом яких ви досягнете вражаючих результатів в найбільш оптимальні строки без ризику для здоров'я.
          </p>
          <b>
            Це ті, хто вас мотивує і знущається, а ще робить вас здоровими та красивими!
          </b>
      </section>
      <section>
          <TrainerList
            :trainers="trainers"
            :isOpen="isOpen"
            @changeOpen="(e) => change(e)"/>
      </section>
  </div>
<Footer/>
</template>

<script>
import TrainerList from '../components/TrainersList';
import Header from '../components/Header.vue';
import Breadcrumb from '../components/Breadcrumb.vue';
import Footer from '../components/Footer.vue';
import { preloadLinkVideo } from '../utils.js';
let preloadedAssets = [
        require('../../assets/images/TeamG/Vladimir_Leskov.jpg').default,
        require('../../assets/images/TeamG/Olga_Depeshko.jpg').default,
        require('../../assets/images/TeamG/Olga_Martsenyuk.jpg').default,
        require('../../assets/images/TeamG/Mikhail_Galagan.jpg').default,
        require('../../assets/images/TeamG/Olga_Osadchuk.jpg').default,
        require('../../assets/images/TeamG/valentine.jpg').default,
        require('../../assets/images/TeamG/Melnyk_Serhiy.jpg').default,
        require('../../assets/images/TeamG/Olena_Semenchuk.jpg').default,
        require('../../assets/images/TeamG/Nechko_Vasil.jpg').default,
        require('../../assets/images/TeamG/Gornushkina_Julia.jpg').default,
        require('../../assets/images/TeamG/Dementieva_Elena.jpg').default,
        require('../../assets/images/TeamG/image-not-found.jpg').default
    ]
let preloadedVideo = [
        'Vladimir_Leskov.MOV',
        'Olga_Depeshko.MOV',
        'Olga_Martsenyuk.MOV',
        'Mikhail_Galagan.MOV',
        'Olga_Osadchuk.MOV',
        'valentine.MOV',
        'Melnyk_Serhiy.MOV',
        'Olena_Semenchuk.MOV',
        'Nechko_Vasil.MOV',
        'Gornushkina_Julia.MOV'
    ]
export default {
    emits: ['changeOpen'],
    data() {
        return {
            isOpen: false,
            trainers: [
                {id: 0, link: "Vladimir_Leskov.jpg", linkVideo: "Vladimir_Leskov.MOV"},
                {id: 1, link: "Olga_Depeshko.jpg", linkVideo: "Olga_Depeshko.MOV"},
                {id: 2, link: "Olga_Martsenyuk.jpg", linkVideo: "Olga_Martsenyuk.MOV"},
                {id: 3, link: "Mikhail_Galagan.jpg", linkVideo: "Mikhail_Galagan.MOV"},
                {id: 4, link: "Olga_Osadchuk.jpg", linkVideo: "Olga_Osadchuk.MOV"},
                {id: 5, link: "valentine.jpg", linkVideo: "valentine.MOV"},
                {id: 6, link: "Melnyk_Serhiy.jpg", linkVideo: "Melnyk_Serhiy.MOV"},
                {id: 7, link: "Olena_Semenchuk.jpg", linkVideo: "Olena_Semenchuk.MOV"},
                {id: 8, link: "Nechko_Vasil.jpg", linkVideo: "Nechko_Vasil.MOV"},
                {id: 9, link: "Gornushkina_Julia.jpg", linkVideo: "Gornushkina_Julia.MOV"},
                {id: 10, link: "Dementieva_Elena.jpg"},
                {id: 11, link: "image-not-found.jpg"},
                {id: 12, link: "image-not-found.jpg"}
            ],
        }
    },
    mounted(){
        preloadedVideo.map(urlVideo => (preloadLinkVideo(urlVideo, 'video')));
    },
    methods: {
        change(e) {
            this.isOpen = e;
        },
    },
    beforeRouteEnter(to, from, next) {
        const cacheImage = (url) =>{
            return new Promise((resolve, reject) => {
                let img = new Image()
                img.onload = resolve;
                img.src = url;
            });
        }
        console.log("wait to show loader for 0.6s")
        let postponeTimelId = setTimeout(()=>{
            console.log("show loader")
            window.vm.$data.isLoading=true
        },600);


        Promise.all(preloadedAssets.map((urlImg) => (cacheImage(urlImg)))).finally(()=>{

            clearTimeout(postponeTimelId);
            if (window.vm.$data.isLoading){
                console.log("hide loader")
                window.vm.$data.isLoading=false;
            }
            next();
        });
    },
    components: {
        TrainerList,
        Header,
        Breadcrumb,
        Footer
    }
}

</script>

<style lang="scss" scoped>
    .team-g {
        padding-top: 208px;
        background-color: #FFFFFF !important;
        .title {
            padding: 0 7.81vw;
            margin-bottom: 60px;
        }
        .title > h1 {
            font-weight: 600;
            font-style: normal;
            font-family: 'Oswald';
            font-size: 52px;
            margin: 0;
            margin-left: 96px;
            margin-bottom: 30px;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        .title > p {
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            margin-bottom: 10px;
            font-family: 'Raleway';
            font-style: normal;
            font-weight: normal;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        .title > b {
            font-style: normal;
            font-size: 14px;
            font-family: 'Raleway';
            font-style: normal;
            font-weight: bold;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    @media screen and (max-width: 1023px) and (min-width: 768px) {
        .team-g {
            .title {
                padding: 0 50px;
                margin-bottom: 40px;
            }
            .title > h1 {
                font-size: 49px;
                margin-left: 57px;
                margin-bottom: 20px;
                line-height: 54px;
            }
            .title > p {
                font-size: 12px;
                margin-bottom: 15px;
                line-height: 22px;
            }
            .title > b {
                font-size: 12px;
                line-height: 22px;
            }
        }
    }
    @media screen and (max-width: 767px){
        .team-g {
            .title {
                padding: 0 15px;
                margin-bottom: 50px;
            }
            .title > h1 {
                font-size: 32px;
                margin-left: 50px;
                margin-bottom: 20px;
                line-height: 48px;
            }
            .title > p {
                font-size: 12px;
                margin-bottom: 10px;
                line-height: 18px;
            }
            .title > b {
                font-size: 12px;
                line-height: 18px;
            }
        }
    }
    .team-g-mobile {
        padding-top: 108px;
        background-color: #FFFFFF !important;
        .title {
            padding: 0 15px;
            margin-bottom: 50px;
        }
        .title > h1 {
            font-weight: 600;
            font-style: normal;
            font-family: 'Oswald';
            font-size: 32px;
            margin: 0;
            margin-left: 50px;
            margin-bottom: 20px;
            line-height: 48px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        .title > p {
            font-weight: 400;
            font-style: normal;
            font-size: 12px;
            margin-bottom: 10px;
            font-family: 'Raleway';
            font-style: normal;
            font-weight: normal;
            line-height: 18px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        .title > b {
            font-style: normal;
            font-size: 12px;
            font-family: 'Raleway';
            font-style: normal;
            font-weight: bold;
            line-height: 18px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }

</style>

