<template>
  <Header/>
  <div class="view-main-g">

  <section class="top-image-container">
    <img class="top-image" src="../../assets/images/main-g-background.jpg" alt="">
    <img class="skew-image-1" src="../../assets/images/popup-corner.svg" alt="">
    <div class="water-text">
        <p class="top-text">Твій рівень</p>
        <p class="down-text">спорту</p>
    </div>
        <div class="vector1"></div>
        <div class="vector2"></div>
        <div class="vector3"></div>
  </section>

  <div class="about-us">
        <div class="title">
            Про нас
            <div class="line-background"></div>
        </div>


    <div class="columns-container">
      <div class="col-1">
        <div><span class="bold">Тренажерний зал 1700 кв.м.</span> з найновішою преміум-лінійкою обладнання від провідного світового бренду TechnoGym </div>
        <div>Простора стилізована <span class="bold">зона єдиноборств</span> з професійним рингом</div>
        <div>Окрема <span class="bold">студія для сайкл-тренування</span> з надсучасною світло- звуковою системою</div>
        <div><span class="bold">Інноваційна </span> зона функціонального тренінгу та кросфіту</div>
      </div>
      <div class="col-2">
        <div><span class="bold">Студія Barre </span>на основі балету</div>
        <!-- <div>Мед кабінет, <span class="bold">консультація лікаря</span></div> -->
        <div>Власна <span class="bold">пральня</span></div>
        <div>Система вентиляції та кондиціонування  функцією <span class="bold">очищення повітря</span></div>
        <div><span class="bold">Високий</span> рівень сервісу</div>
      </div>
    </div>
    <router-link class="link-1" to="/about-us-g">Детальніше</router-link>

  </div>

  <div class="techno-gym-container">
    <div class="col-1">
      <div class="logo"></div>
      <div class="title">Techno Gym</div>
      <div class="text">
        <span class="bold">TechnoGym</span> - лідер серед виробників тренажерів, завдяки використанню останніх наукових відкриттів та технічних досягнень. Тренажери продумані
        до найдрібніших деталей, тому на них щодня тренується більше 35 мільйонів
        спортсменів, які досягають найвищих спортивних результатів. А відтепер і ви
        зможете відчути їх унікальність.
      </div>
      <router-link class="link-2" to="/simulators-g">Детальніше</router-link>
    </div>
      <img class="skew-image-1" src="../../assets/images/techno-gym-skew-images.png" alt="">
  </div>
  <div class="our-team-container">
    <div class="water-text">
        <p class="top-text">Професіонали</p>
        <p class="down-text">своєї справи</p>
    </div>

      <div class="our-team-container_header">
          G LEVEL TEAM
        <div class="line-background"></div>
    </div>
    <!-- <div class="our-team-container_header">
      G LEVEL TEAM
    </div> -->


    <router-link class="all-our-trainers-link" to="/team-g">Переглянути всіх</router-link>


    <div class="teams-slider">
        <TeamsSlider
            :trainers="trainers"
            :isOpen="isOpen"
            @changeOpen="(e) => change(e)"
        />
    </div>

  </div>
  <div class="combat-area">
      <AreasSliderG />
      <img class="skew-image-1" src="../../assets/images/popup-corner.svg" alt="">
  </div>

  <div class="also-for-you-container">
    <div class="title">Також на Вас чекають</div>
    <div class="orders">
      <div class="order">
        <div class="icon"></div>
        <div class="title">
          Фітнес бар
        </div>
        <div class="description">
          На території комплексу два бари з професійними барменами, які з радістю задовольнять ваші потреби в здоровому харчуванні, спортивних напоях, ароматній каві, і не тільки…
        </div>
      </div>
      <div class="order">
        <div class="icon"></div>
        <div class="title">
          Безпека
        </div>
        <div class="description">
          Тренажерний зал обладнаний усім необхідним для правильних та результативних тренувань, які тільки на користь здоров’ю та фізичній формі. Вентиляція із системою очищення повітря подбає про те, щоб під час тренувань ваші легені наповнювались тільки правильним повітрям. Цілодобова охорона та персональні міні сейфи для вашого спокою та збереження цінних для вас речей.
        </div>
      </div>
      <div class="order">
        <div class="icon"></div>
        <div class="title">
          Комфорт і чистота
        </div>
        <div class="description">
          Комфортні роздягальні з великими і просторими шафами, куди поміститься одночасно ваша спортивна сумка і ділова сорочка, яка після зняття залишиться такою ж випрасуваною.
        </div>
      </div>
    </div>
  </div>
<!--
    <div class="seo-text">
      <div class="title">
        SEO текст
      </div>
      <div class="text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae justo ut lacus commodo dignissim quis ut ipsum. Pellentesque a tortor vitae arcu dictum faucibus. Cras ornare ex in mattis egestas. Nulla lobortis nisi in turpis feugiat, at rutrum elit sagittis. Ut consequat finibus metus id consectetur. Suspendisse nisl erat, condimentum sit amet luctus eu, luctus ut ipsum. Ut tempus rhoncus lectus, nec porttitor diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec hendrerit neque...
      </div>
    </div> -->

  </div>
  <Footer/>

</template>

<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
import AreasSliderG from '../components/AreasG/AreasSliderG.vue'
import TeamsSlider from '../components/TeamsSlider.vue';

            let preloadedAssets = [
                require('../../assets/images/main-g-background.jpg').default,
                require('../../assets/images/main-g-techno-gym-background.jpg').default,
                require('../../assets/images/techno-gym-skew-images.png').default,
                require('../../assets/images/areas/area-1-g.jpg').default,
            ];



           let trainers = [
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
                {id: 10, link: "image-not-found.jpg"},
                {id: 11, link: "Nina_Shevchuk.jpg", linkVideo: "Nina_Shevchuk.MOV"},
                {id: 12, link: "image-not-found.jpg"}
            ]


export default {

  data(){
    preloadedAssets.push(window.vm.$data.isMobile ? require('../../assets/images/main-g-background-768.jpg').default : require('../../assets/images/main-g-background.jpg').default);
    return{
      isOpen: false,
      trainers
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
    AreasSliderG,
    TeamsSlider
  },
  methods: {
      change(e) {
          this.isOpen = e;
      }
  },
}

</script>

<style lang="scss" scoped>
    .view-main-g{
        overflow: hidden;
        background: #FFFFFF;
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
        padding: 3px;
        transition: all 0.2s linear;
        position: relative;
        cursor: pointer;
        z-index: 1;

        @media screen and (max-width:767px){
          font-size: 12px;
        }

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
    display: block;
    object-fit: cover;


    @media screen and (max-width:767px){
      height: 80vh;
      content: url('../../assets/images/main-g-background-768.jpg');
    }

  }

  .skew-image-1{
    position: absolute;
    bottom: -27px;
    left: 100px;

    @media screen and (max-width:767px){
      bottom: -13px;
      left: 15px;
      width: 35px;
    }
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

    @media screen and (max-width:767px){
        padding: 30px 15px 15px;
    }

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

        @media screen and (max-width:767px){
          height: 33px;
        }
    }
  }

  .columns-container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 30px;

    font-family: Raleway;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 28px;
    letter-spacing: 0.05em;
    font-feature-settings: 'pnum' on, 'lnum' on;

    @media screen and (max-width:767px){
        display: block;
        font-size: 12px;
        line-height: 18px;
    }

    .col-1 > div,.col-2 > div {
      margin-bottom: 20px;
      position: relative;
      margin-left: 10px;

      &::before{
        content: '';
        height: 5px;
        width: 5px;
        background-color: #916C58;
        position: absolute;
        top: 12px;
        left: -10px;

        @media screen and (max-width:767px){
            top: 7px;
        }
      }



      span.bold{
        font-weight: 600;
      }
    }



  }

  .link-1{
    align-self: flex-end;
     @media screen and (max-width:767px){
        font-size: 10px;
    }
  }
}

.techno-gym-container{
    background-image: url("../../assets/images/main-g-techno-gym-background.jpg");
    background-size: cover;
    height: 570px;
    display: flex;
    position: relative;

    @media screen and (max-width:767px){
        background-image: url("../../assets/images/main-g-techno-gym-background-320.jpg");
        height: initial;
    }

    .col-1{

      padding: 116px 0 64px 150px;
      flex-direction: column;
      display: flex;
      justify-content: space-between;
      color: #ffff;

        @media screen and (max-width:767px){
            padding: 40px 15px 40px 15px;
        }

      .logo{
        background-image: url("../../assets/images/technogym-logo.svg");
        background-repeat: no-repeat;
        background-size: contain;
        height: 48px;

          @media screen and (max-width:767px){
            height: 23px;

        }

      }

      .title{
          font-family: Oswald;
          font-weight: 600;
          font-size: 64px;
          letter-spacing: 0.02em;
          font-feature-settings: 'pnum' on, 'lnum' on;
          color: #916C58;

          @media screen and (max-width:767px){
            font-size: 36px;
            padding: 50px 0 30px 0;
          }
      }

      .text{
        font-family: Raleway;
        font-weight: bold;
        font-size: 14px;
        line-height: 28px;
        letter-spacing: 0.1em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #FFFFFF;
          @media screen and (max-width:767px){
              font-size: 12px;
              line-height: 18px;
          }
      }

      .link-2{
        margin-top: 30px;

      }

    }

    img{
      height: 294px;
      align-self: flex-end;
      margin-bottom: -60px;

      @media screen and (max-width:767px){
        height: 105px;
        margin-bottom: initial;
        position: absolute;
        right: 0;
        bottom: -30px;
      }
    }

}
  .our-team-container{
    // height: 970px;
    // padding-top: 210px;
    // box-sizing: border-box;
    background-color: #ffff;
    // padding-bottom: 110px;
    // background: url('../../assets/images/main-g-our-team-water-text.svg') no-repeat 50px 50px, #fff;
      @media screen and (max-width:767px){
        padding-bottom: 0;
      }



    .water-text{
      margin-top: 60px;
      margin-left: 150px;


      font-family: Raleway;
      font-style: normal;
      font-weight: 900;
      font-size: 7.5vw;
      line-height: 8.802vw;
      bottom: -7.5vw;
      right: 7.8125vw;
      color: transparent;

      @media screen and (max-width:767px){
        margin-top: 50px;
        margin-left: 15px;
      }

      & .top-text {
          margin: 0;
          -webkit-text-stroke-color: #000;
          -webkit-text-stroke-width: 1px;
      }
      & .down-text {
          margin: 0;
          -webkit-text-stroke-color: #916C58;
          -webkit-text-stroke-width: 1px;
      }
    }

    .our-team-container_header{
      text-align: right;
      font-family: Oswald;
      font-weight: 600;
      font-size: 48px;
      line-height: 83px;
      letter-spacing: 0.02em;
      font-feature-settings: "pnum" on, "lnum" on;
      color: #000000;
      position: relative;
      padding-right: 96px;

      .line-background{
          position: absolute;
          bottom: 0;
          left: -170px;
          right: 66px;
          height: 83px;
          background: #916C58;
          opacity: 0.07;
          transform: skew(-18deg);
      }

      // font-family: 'Oswald';
      // height: 83px;
      // background: url('../../assets/images/rectangle-1.svg') no-repeat ;
      // color: #000000;
      // font-weight: 600;
      // font-size: 48px;

      // display: flex;
      // align-items: center;
      // justify-content: flex-end;
      // // top: 217px;
      // position: relative;
      // padding-right: 150px;
      // top: -40px;

      // @media screen and (max-width:767px){
      //   height: 36px;
      //   padding-right: 25px;
      //   font-size: 24px;
      //   top: initial;
      //   background-position: calc(100% - 50px);
      // }
    }

    .all-our-trainers-link{
      display:block;
      margin: 24px 143px 24px 0;
      font-weight: bold;
      font-size: 12px;
      line-height: 14px;
      text-align: right;
      letter-spacing: 0.05em;
      -webkit-text-decoration-line: underline;
      text-transform: uppercase;
      color: #000000;

      &:hover {
          color: #916C58;
      }

      @media screen and (max-width:767px){
        margin-bottom: 0;
        margin-right: 0;
        margin-left: 37px;
        margin-top: 15px;
        text-align: left;
      }
    }

    // .trainers-container .trainer-item:nth-of-type(even) {
    //   margin-top:25px;
    // }

    .teams-slider {
        position: relative;
        padding: 0 30px;
        z-index: 2;

      @media screen and (max-width:767px){
        padding: 20px 15px;
        margin-top: 15px;
      }



      ::v-deep(.swiper-button-prev){
        @media screen and (max-width:767px){
            background-image: url('../../assets/images/btn-slider-prev.svg');
            top: -25px;
            left: calc(100% - 155px) !important;
            display: initial;
            width: 66px;
            height: 46px;

            &::after{
              display: none;
            }
        }
      }

      ::v-deep(.swiper-button-next){
        @media screen and (max-width:767px){
          background-image: url('../../assets/images/btn-slider-next.svg');
          top: -25px;
          display: initial;
          width: 66px;
          height: 46px;

            &::after{
              display: none;
            }
        }
      }

    }

  }
    .combat-area{
.skew-image-1{
        width: 35px;
        height: 30;
        bottom: -15px;
        right: 15px;
      }


      position: relative;

      .skew-image-1{
        position: absolute;
        bottom: -28px;
        right: 115px;
        z-index: 1;

          @media screen and (max-width:767px){
            width: 35px;
            bottom: -14px;
            right: 15px;
          }
          @media screen and (max-width: 1023px) and (min-width: 768px) {
            width: 35px;
            bottom: -14px;
            right: 15px;
          }
      }
    }

    .also-for-you-container{
      padding: 90px 150px 60px;
      background-color: #fff;

      @media screen and (max-width:767px){
        padding: 60px 30px 0;
      }

      &>.title{
        font-family: Oswald;
        font-size: 48px;
        font-weight: 600;
        letter-spacing: 0.02em;
        text-align: center;
        margin-bottom: 62px;

        @media screen and (max-width:767px){
          font-size: 24px;
          line-height: 36px
        }
      }

      .orders{
        display: grid;
        grid-column-gap:75px;
        grid-template-columns: repeat(3, 1fr);

        @media screen and (max-width:767px){
          grid-template-columns: repeat(1, 1fr);
          grid-row-gap: 15px;
        }

        .order{

          .icon{
            height: 67px;
          }

          .title{
            font-family: Oswald;
            font-size: 24px;
            line-height: 54px;
            font-weight: 600;
            letter-spacing: 0.02em;
            margin: 12px 0 10px;
          }

          .description{
            font-family: Raleway;
            font-size: 14px;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
          }

          &:nth-of-type(1) .icon {
            background:url('../../assets/images/skew-icon-1.svg') no-repeat left, url('../../assets/images/smoothie.svg') no-repeat 60px;
          }

          &:nth-of-type(2) .icon {
            background: url('../../assets/images/skew-icon-1.svg') no-repeat left, url('../../assets/images/heart-beat.svg') no-repeat 60px;
          }

          &:nth-of-type(3) .icon {
            background: url('../../assets/images/skew-icon-1.svg') no-repeat left, url('../../assets/images/hanger.svg') no-repeat 60px;
          }

        }

      }

    }

    .seo-text{
      background-color: #fff;
      margin-bottom: 50px;

      .title{
          font-family: Oswald;
          font-size: 52px;
          font-weight: 600;
          line-height: 54px;
          letter-spacing: 0.02em;
          text-align: center;

          @media screen and (max-width:767px){
            font-size: 32px;
            line-height: 48px;
          }
      }
      .text{
        font-family: Raleway;
        font-size: 14px;
        font-weight: 400;
        line-height: 28px;
        letter-spacing: 0.05em;
        padding: 30px 94px 150px;

          @media screen and (max-width:767px){
            padding: 30px 15px 30px;
            font-size: 12px;
            line-height: 18px;
          }
      }
    }

@media screen and (max-width: 1023px) and (min-width: 768px) {
    .about-us{
        padding: 80px 50px 50px;
        .title{
            font-size: 48px;
            line-height: 54px;
            margin-bottom: 30px;
            padding-left: 57px;
            padding-bottom: 0;
            & .line-background {
                height: 54px;
            }
        }
        .columns-container{
            grid-column-gap: 15px;
            font-size: 16px;
            line-height: 26px;

            .col-1 > div,.col-2 > div {
                margin-bottom: 15px;
            }
        }
    }
    .techno-gym-container{
        height: 354px;
        .col-1{
            padding: 30px 0 64px 50px;
            .logo{
                height: 28px;
            }
            .title{
                font-size: 45px;
            }
            .text{
                font-size: 12px;
                line-height: 18px;
            }

            .link-2{
                margin-top: 20px;

            }

        }

        img{
            height: 189px;
            margin-bottom: -32px;
        }

    }
    .our-team-container{
        .water-text{
            margin-top: 32px;
            margin-left: 50px;
        }
    }
    .also-for-you-container{
      padding: 30px 50px 40px;
      background-color: #fff;

      &>.title{
        font-size: 48px;
        line-height: 54px;
        margin-bottom: 26px;
      }

      .orders{
        grid-column-gap: 40px;
        .order{
          .title{
            font-size: 18px;
            line-height: 26.68px;
            margin: 5px 0 10px;
          }
          .description{
            font-size: 12px;
            line-height: 22px;
          }
        }

      }

    }
}

</style>
