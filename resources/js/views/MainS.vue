<template>
  <Header />
  <div class="view-main-s">
  <section class="top-image-container">
    <img class="top-image" src="../../assets/images/main-s-background.jpg" alt="">
    <img class="skew-image-1" src="../../assets/images/popup-corner.svg" alt="">
    <div class="water-text">
        <p class="top-text">Твій рівень</p>
        <p class="down-text">відпочинку</p>
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
              SPA-зона S LEVEL – особливий рівень надзвичайно чуттєвих емоцій.
              Римська сольова парова, Римський Арома Грот,  російська баня, фінська сауна, крижаний пілінг,  душ вражень, lounge бар, зона відпочинку – комплекс найкращих технічних рішень, дизайнерських новинок, послуг для відновлення здоров'я і краси.
            </p>
        </div>
        <div class="about-us-warning">
            <img class="top-image" src="../../assets/images/warning.svg" alt="">
            <p>
                Даний перелік послуг доступний для власників клубних карт.
            </p>
        </div>
    </section>


   <section class="gallery-slider">
        <GallerySlider :images="gallery" />
    </section>

  <div class="areas-slider">
      <AreasSliderG />
      <img class="skew-image-1" src="../../assets/images/popup-corner.svg" alt="">
  </div>

    <div class="seo-text">
      <div class="title">
        SEO текст
      </div>
      <div class="text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae justo ut lacus commodo dignissim quis ut ipsum. Pellentesque a tortor vitae arcu dictum faucibus. Cras ornare ex in mattis egestas. Nulla lobortis nisi in turpis feugiat, at rutrum elit sagittis. Ut consequat finibus metus id consectetur. Suspendisse nisl erat, condimentum sit amet luctus eu, luctus ut ipsum. Ut tempus rhoncus lectus, nec porttitor diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec hendrerit neque...
      </div>
    </div>


  </div>
  <Footer/>

</template>

<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
import AreasSliderG from '../components/AreasG/AreasSliderG.vue'
import GallerySlider from '../components/GallerySlider.vue';


export default {

  data(){
    return{
      gallery: [
          { id: 1, imageUrl: require("../../assets/images/main-s/foto-1.jpg").default },
          { id: 2, imageUrl: require("../../assets/images/main-s/foto-2.jpg").default },
          { id: 3, imageUrl: require("../../assets/images/main-s/foto-3.jpg").default },
          { id: 4, imageUrl: require("../../assets/images/main-s/foto-4.jpg").default },
          { id: 5, imageUrl: require("../../assets/images/main-s/foto-5.jpg").default },
          { id: 6, imageUrl: require("../../assets/images/main-s/foto-6.jpg").default },
      ]
    }

  },

  components:{
    Header,
    Footer,
    AreasSliderG,
    GallerySlider
  },
  methods: {
      change(e) {
          this.isOpen = e;
      }
  },
}

</script>

<style lang="scss" scoped>


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


      .link-2{
        font-family: Raleway;
        font-weight: 800;
        font-size: 14px;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        text-decoration:none;
        width: max-content;
        color:#fff;
        transition: all 0.2s linear;
        position: relative;
        cursor: pointer;
        z-index: 1;

        &:before{
            content: "";
            position: absolute;
            bottom: 0;
            left: -8px;
            width: calc(100% + 16px);
            height: 50%;
            background: #916C58;
            z-index: -1;
            transition: all 0.2s linear;
        }
        &:hover:before{
            height: 100%;
        }
        &:active{
            color: #000;
        }
    }


.top-image-container{
  position: relative;

  .top-image{
    width: 100%;

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
        width: 1545px; //74.8599vw;
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
    font-size: 14px;
    line-height: 28px;
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
        font-size: 14px;
        line-height: 28px;
        letter-spacing: 0.05em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
        & p{
            margin: 0;
            margin-left: 22px;
        }
  }

}

    .areas-slider{
      // height: 570px;
      position: relative;

      .skew-image-1{
        position: absolute;
        bottom: -28px;
        right: 115px;
        z-index: 1;
      }
    }

    .seo-text{
      background-color: #fff;
      padding-top:60px;

      .title{
          font-family: Oswald;
          font-size: 52px;
          font-weight: 600;
          line-height: 54px;
          letter-spacing: 0.02em;
          text-align: center;
      }
      .text{
        font-family: Raleway;
        font-size: 14px;
        font-weight: 400;
        line-height: 28px;
        letter-spacing: 0.05em;
        padding: 30px 94px 150px;
      }
    }

</style>
