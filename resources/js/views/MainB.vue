<template>
  <Header />
  <div class="view-main-b">
  <section class="top-image-container">
    <!-- <img class="top-image" src="../../assets/images/main-b-background.jpg" alt=""> -->
    <video-background
          src="/video/b-level-main.mp4"
          poster="../../assets/images/main-b-background.jpg"
          class="top-image"
      >
      </video-background>
    <img class="skew-image-1" src="../../assets/images/popup-corner.svg" alt="">
    <div class="water-text">
        <p class="top-text">Твій рівень</p>
        <p class="down-text">краси</p>
    </div>
    <div class="vector1"></div>
    <div class="vector2"></div>
    <div class="vector3"></div>
  </section>

    <section class="about-us">
        <div class="title">
            Про нас
            <div class="line-background"></div>
        </div>
        <div class="container-text">
            <p>
                Сучасний beauty-простір у м. Вінниці, де на вас чекають найкращі beauty- майстри України,
                найпопулярніша європейська косметика та найновіші технології світової індустрії краси.
                Ідеальні стрижки, фарбування волосся, чоловічі процедури від кращих барберів,
                безпечний манікюр та педикюр або стильний мейкап,  пілінг для обличчя чи райський масаж для всього тіла?
                На вас чекають просторі кабінети з панорамними вікнами, паралельні сервіси для економії часу,
                консультації спеціалістів та косметика для домашнього догляду.
            </p>
        </div>
        <div class="about-us-warning">
            <img class="top-image-warning" src="../../assets/images/warning.svg" alt="">
            <p>
                Салон відкритий як для членів клубу, так і для гостей без клубних карт.
            </p>
        </div>
    </section>
    <section class="image-container-aboutUs">
        <img class="image" src="../../assets/images/aboutUs-b-main.jpg" alt="">
        <img class="skew-image" src="../../assets/images/popup-corner.svg" alt="">
        <div class="text-image">
            <p>
                Nulla sed augue vehicula, feugiat nisi sed, commodo dolor.
            </p>
        </div>
    </section>
    <section class="gallery-slider">
        <GallerySlider :images="gallery" />
    </section>
    <section class="brand-makeup">
        <h1>Ми довіряємо найкращим</h1>
        <BrandMakeupSlider />
        <!-- <h1>SEO текст</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Fusce vitae justo ut lacus commodo dignissim quis ut ipsum.
            Pellentesque a tortor vitae arcu dictum faucibus.
            Cras ornare ex in mattis egestas. Nulla lobortis nisi in turpis feugiat, at rutrum elit sagittis.
            Ut consequat finibus metus id consectetur. Suspendisse nisl erat, condimentum sit amet luctus eu, luctus ut ipsum.
            Ut tempus rhoncus lectus, nec porttitor diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Sed nec hendrerit neque...
        </p>
        <router-link class="link-1" to="/">Більше</router-link> -->
    </section>
  </div>
  <Footer :level="'b'"/>

</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import GallerySlider from '../components/GallerySlider.vue';
import BrandMakeupSlider from '../components/BrandMakeupSlider.vue';
import VideoBackground from 'vue-responsive-video-background-player';

let preloadedAssets = [
        require('../../assets/images/main-b-background.jpg').default,
        require('../../assets/images/popup-corner.svg').default,
        require('../../assets/images/aboutUs-b-main.jpg').default,
        require('../../assets/images/popup-corner.svg').default,
        require("../../assets/images/TeamB/gallery/overlay/150-43-1-min.jpg").default,
        require("../../assets/images/TeamB/gallery/overlay/150-34-1-min.jpg").default,
        require("../../assets/images/TeamB/gallery/overlay/150-35-1-min.jpg").default,
        require("../../assets/images/TeamB/gallery/overlay/150-37-1-min.jpg").default,
        require("../../assets/images/TeamB/gallery/overlay/150-38-1-min.jpg").default,
        require("../../assets/images/TeamB/gallery/overlay/150-42-1-min.jpg").default,
        require("../../assets/images/TeamB/gallery/overlay/150-31-1-min.jpg").default
    ];

export default {

  data(){
    return{
      isOpen: false,
      gallery: [
            require("../../assets/images/TeamB/gallery/overlay/150-43-1-min.jpg").default,
            require("../../assets/images/TeamB/gallery/overlay/150-34-1-min.jpg").default,
            require("../../assets/images/TeamB/gallery/overlay/150-35-1-min.jpg").default,
            require("../../assets/images/TeamB/gallery/overlay/150-37-1-min.jpg").default,
            require("../../assets/images/TeamB/gallery/overlay/150-38-1-min.jpg").default,
            require("../../assets/images/TeamB/gallery/overlay/150-42-1-min.jpg").default,
            require("../../assets/images/TeamB/gallery/overlay/150-31-1-min.jpg").default
        ]
    }

  },
  mounted(){
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
  components:{
    Header,
    Footer,
    GallerySlider,
    BrandMakeupSlider,
    VideoBackground
  },
  methods: {
      change(e) {
          this.isOpen = e;
      }
  },
}

</script>

<style lang="scss" scoped>
.view-main-b {
    overflow: hidden;
    background-color: #FFFFFF;
}




.top-image-container{
  position: relative;

  .top-image{
    width: 100%;
    height:100vh;

    //reset inline mode for image
    display: block;
  }

  .skew-image-1{
    position: absolute;
    bottom: -27px;
    left: 100px;
  }

  .water-text{
    position: absolute;
    font-family: Raleway;
    font-style: normal;
    font-weight: 900;
    font-size: 7.5vw;
    line-height: 8.802vw;
    text-align: right;
    bottom: -7.5vw;
    right: 7.8125vw;
    color: transparent;
    & .top-text {
        margin: 0;
        -webkit-text-stroke-color: #fff;
        -webkit-text-stroke-width: 0.5px;
    }
    & .down-text {
        margin: 0;
        -webkit-text-stroke-color: #916C58;
        -webkit-text-stroke-width: 1px;
    }
  }
  .vector1 {
    position: absolute;
    width: 66.085vw; //1268.85px;
    height: 7.515vw; //144.29px;
    right: -35.9375vw; //-690px;
    bottom: 26.594vw; //510.62px;
    background: linear-gradient(172.97deg, rgba(255, 255, 255, 0.25) 2.64%, rgba(255, 255, 255, 0) 48.7%);
    transform: rotate(-75.49deg);
  }
  .vector2 {
    position: absolute;
    width: 66.085vw; //1268.85px;
    height: 3.705vw; //71.145px;
    right: -28.828vw; //-553.5px;
    bottom: 23.365vw; //448.62px;
    background: linear-gradient(172.97deg, rgba(255, 255, 255, 0.25) 2.64%, rgba(255, 255, 255, 0) 48.7%);
    transform: rotate(-75.49deg);
  }
  .vector3 {
    position: absolute;
    width: 66.085vw; //1268.85px;
    height: 3.705vw; //71.145px;
    right: -24.01vw; //-461px;
    bottom: 19.198vw; //368.62px;
    background: linear-gradient(172.97deg, rgba(255, 255, 255, 0.25) 2.64%, rgba(255, 255, 255, 0) 48.7%);
    transform: rotate(-75.49deg);
  }
}

.about-us{
  background-color: #ffff;
  padding: 80px 150px 60px;
  display: flex;
  flex-direction: column;

  .title{
    font-family: Oswald;
    font-style: normal;
    font-weight: 600;
    font-size: 48px;
    line-height: 54px;
    letter-spacing: 0.02em;
    font-feature-settings: 'pnum' on, 'lnum' on;
    color: #000000;
    position: relative;
    margin-bottom: 30px;
    padding-left: 96px;
    padding-bottom: 19px;
    & .line-background {
        position: absolute;
        bottom: 0;
        right: -170px;
        left:66px;
        // width: 1545px; //74.8599vw;
        height: 83px;
        background: #916C58;
        opacity: 0.07;
        transform: skew(-18deg);
    }
  }

  .container-text{
    font-family: Raleway;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 32px;
    letter-spacing: 0.05em;
    font-feature-settings: 'pnum' on, 'lnum' on;
    color: #000000;
    & p {
        margin: 0;
    }
  }
  .about-us-warning {
      display: flex;
        font-family: Raleway;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 32px;
        letter-spacing: 0.05em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
        & p{
            margin: 0;
            margin-left: 22px;
        }
  }

}

.image-container-aboutUs{
    position: relative;
    margin-bottom: 60px;
    padding-left: 246px;
    background-color: #FFFFFF;

    .image{
        width: 100%;
        max-height: 570px;
        display: block;
    }

    .skew-image{
        position: absolute;
        bottom: -27px;
        right: 150px;
    }

    .text-image{
        position: absolute;
        left: -25px;
        bottom: 20px;
        width: 67.2vw;//67.3%
        height: 5.2vw;//83px
        background: #916C58;
        transform: skew(-25deg);
        text-align: right;
        font-family: 'Oswald';
        font-style: normal;
        font-weight: 500;
        font-size: 2.25vw;//36px
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #FFFFFF;
        &>p{
            line-height: 5.2vw;//83px
            margin: 0;
            margin-right: 60px;
            transform: skew(25deg);
        }
    }
}

.gallery-slider {
    position: relative;
    padding: 0 7.81vw;
    margin-bottom: 60px;
    background-color: #FFFFFF;
}

.brand-makeup {
    background-color: #FFFFFF;
    margin-bottom: 60px;
    & h1 {
        font-family: Oswald;
        font-style: normal;
        font-weight: 600;
        font-size: 48px;
        line-height: 54px;
        text-align: center;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
        margin: 60px 0 40px 0;
    }
    & p {
        font-family: Raleway;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 28px;
        letter-spacing: 0.05em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
        padding: 0 7.81vw;
        margin-bottom: 20px;
    }
    .link-1{
        font-family: Raleway;
        font-weight: bold;
        font-size: 12px;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        text-decoration: none;
        color: #000;
        display: flex;
        align-items: center;
        margin-bottom: 60px;
        padding: 0 9.61vw;
        float: right;

        &:active{
            color: #916C58;
        }

        &:after{
            content: '';
            width: 31px;
            height:16px;
            background: url("../../assets/homeView/arrow-right.svg") no-repeat;
            margin-left: 15px;
        }
    }
}

@media screen and (max-width: 1023px) and (min-width: 768px) {
    .top-image-container{
        .skew-image-1{
            left: 32px;
            bottom: -16px;
            width: 37px;
            height: 32px;
        }
    }
    .about-us{
        padding: 80px 50px 50px;
        .title{
            font-size: 45px;
            margin-bottom: 20px;
            // & .line-background {
            //     width: 805px;
            // }
        }
        .container-text{
            font-size: 16px;
            line-height: 26px;
        }
        .about-us-warning {
            font-size: 16px;
            line-height: 26px;
            & p{
                margin: 0;
                margin-left: 18px;
            }
            & .top-image-warning{
                height: 19px;
            }
        }

    }
    .image-container-aboutUs{
        margin-bottom: 50px;
        padding-left: 107px;

        .image{
            width: 100%;
            max-height: 316px;
        }

        .skew-image{
            width: 52px;
            height: 45px;
            right: 25px;
        }

        .text-image{
            position: absolute;
            left: -25px;
            bottom: 20px;
            width: 506px;//67.3%
            height: 56px;//83px
            font-size: 18px;//36px
            &>p{
                line-height: 56px;//83px
                margin-right: 30px;
            }
        }
    }
    .gallery-slider {
        padding: 0 50px;
    }

    .brand-makeup {
        & h1 {
            font-size: 45px;
            color: #000000;
            margin: 50px 0 30px 0;
        }
        & p {
            font-size: 12px;
            line-height: 22px;
            padding: 0 50px;
        }
        .link-1{
            font-size: 10px;
            margin-bottom: 50px;
            padding: 0 50px;
        }
    }
}

@media screen and (max-width: 767px){
    .top-image-container{
        .top-image{
            max-height: 80vh;
            content: url('../../assets/images/main-b-background-320.jpg');
        }
        .skew-image-1{
            left: 15px;
            bottom: -15px;
            width: 35px;
            height: 30px;
        }
    }
    .about-us{
        padding: 54px 15px 50px;
        .title{
            font-size: 24px;
            line-height: 36px;
            margin-bottom: 30px;
            padding-left: 0;
            padding-bottom: 0;
            & .line-background {
                height: 33px;
            }
        }
        .container-text{
            font-size: 14px;
            line-height: 22px;
        }
        .about-us-warning {
            font-size: 14px;
            line-height: 22px;
            & p{
                margin: 0;
                margin-left: 18px;
            }
            & .top-image-warning{
                height: 19px;
            }
        }

    }
    .image-container-aboutUs{
        margin-bottom: 73px;
        padding: 0;

        .image{
            width: 100%;
            max-height: 214px;
        }

        .skew-image{
            width: 35px;
            height: 30px;
            right: 15px;
            bottom: -15px;
        }

        .text-image{
            text-align: left;
            bottom: -35px;
            width: 57.3%;//67.3%
            height: auto;//83px
            font-size: 18px;//36px
            &>p{
                line-height: 24px;
                margin-left: 45px;
                margin-right: 0;
            }
        }
    }
    .gallery-slider {
        padding: 0 15px;
    }

    .brand-makeup {
        & h1 {
            font-size: 24px;
            line-height: 36px;
            color: #000000;
            margin: 50px 0 20px 0;
        }
        & p {
            font-size: 12px;
            line-height: 18px;
            padding: 0 15px;
        }
        .link-1{
            font-size: 10px;
            margin-bottom: 50px;
            padding: 0 15px;
        }
    }
}

</style>
