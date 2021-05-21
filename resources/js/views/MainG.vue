<template>
  <Header />
  <div class="view-main-g">
  <div class="top-image-container">
    <img class="top-image" src="../../assets/images/main-g-background.jpg" alt="">
    <img class="skew-image-1" src="../../assets/images/popup-corner.svg" alt="">
    <img class="water-text" src="../../assets/images/main-g-water-text.svg" alt="">
  </div>

  <div class="about-us">
    <div class="title">Про нас</div>
    <div class="columns-container">
      <div class="col-1">
        <div><span class="bold">Тренажерний зал 1700 кв.м.</span> з найновішою преміум-лінійкою обладнання від провідного світового бренду TechnoGym </div>
        <div>Простора стилізована <span class="bold">зона єдиноборств</span> з професійним рингом</div>
        <div>Окрема <span class="bold">студія для сайкл-тренування</span> з надсучасною світло- звуковою системою</div>
        <div><span class="bold">Інноваційна </span> зона функціонального тренінгу та кросфіту</div>
      </div>
      <div class="col-2">
        <div><span class="bold">Студія Barre </span>на основі балету</div>
        <div>Мед кабінет, <span class="bold">консультація лікаря</span></div>
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
      <router-link class="link-2" to="/about-us-g">Детальніше</router-link>
    </div>
      <img class="skew-image-1" src="../../assets/images/techno-gym-skew-images.png" alt="">
  </div>
  <div class="our-team-container">
    <div class="our-team-container_header">
      Наша команда
    </div>


    <router-link class="all-our-trainers-link" to="/team-g">Переглянути всіх</router-link>

    <TrainersList
        :trainers="trainers"
        :isOpen="isOpen"
        @changeOpen="(e) => change(e)"
      />

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
          Тренажерний зал обладнаний усім необхідним для правильних та результативних тренувань, які тільки на користь здоров’ю та фізичній формі. Медична кваліфікована допомога та професійна консультація не по виклику, а як стандарт нашої турботи про клієнта.
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

    <div class="seo-text">
      <div class="title">
        SEO текст
      </div>
      <div class="text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae justo ut lacus commodo dignissim quis ut ipsum. Pellentesque a tortor vitae arcu dictum faucibus. Cras ornare ex in mattis egestas. Nulla lobortis nisi in turpis feugiat, at rutrum elit sagittis. Ut consequat finibus metus id consectetur. Suspendisse nisl erat, condimentum sit amet luctus eu, luctus ut ipsum. Ut tempus rhoncus lectus, nec porttitor diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nec hendrerit neque...
      </div>
    </div>







  <!-- <div class="text-block-1">
    main g
    {{ $t("msg") }}
  </div> -->
  </div>
  <Footer />

</template>

<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
import AreasSliderG from '../components/AreasSliderG/AreasSliderG.vue'
import TrainersList from '../components/TrainersList.vue'


           let trainers = [
                {id: 0, link: "Vladimir_Leskov.jpg"},
                {id: 1, link: "Irina_Slyusarenko.jpg"},
                {id: 2, link: "Olga_Depeshko.jpg"},
                {id: 3, link: "Olga_Martsenyuk.jpg"}
            ]



export default {

  data(){
    return{
      isOpen: false,
      trainers
    }

  },
  mounted(){
      let preloadLink = document.createElement("link");
      preloadLink.href = require('../../assets/feedBackFormView/background-g.png').default;
      preloadLink.rel = "preload";
      preloadLink.as = "image";
      document.head.appendChild(preloadLink);
  },
  components:{
    Header,
    Footer,
    TrainersList,
    AreasSliderG
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
    right: 150px;
    bottom: -138px;

    @media screen and (max-width: 1144px){
      width: 620px;
      bottom: -116px;
    }


  }
}

.about-us{
  background-color: #ffff;
  padding: 80px 150px 60px;
  display: flex;
  flex-direction: column;

  .title{
    font-family: Oswald;
    font-weight: 600;
    font-size: 48px;
    letter-spacing: 0.02em;
    font-feature-settings: 'pnum' on, 'lnum' on;
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

    .col-1 > div,.col-2 > div {
      margin-bottom: 20px;
      span.bold{
        font-weight: 600;
      }
    }



  }

  .link-1{
    align-self: flex-end;
  }
}

.techno-gym-container{
    background-image: url("../../assets/images/main-g-techno-gym-background.jpg");
    background-size: cover;
    height: 570px;
    display: flex;

    .col-1{

      padding: 116px 0 64px 150px;
      flex-direction: column;
      display: flex;
      justify-content: space-between;
      color: #ffff;

      .logo{
        background-image: url("../../assets/images/technogym-logo.svg");
        background-repeat: no-repeat;
        height: 48px;
        widows: 174px;
      }

      .title{
          font-family: Oswald;
          font-weight: 600;
          font-size: 64px;
          letter-spacing: 0.02em;
          font-feature-settings: 'pnum' on, 'lnum' on;
          color: #916C58;
      }

      .text{
        font-family: Raleway;
        font-weight: bold;
        font-size: 14px;
        line-height: 28px;
        letter-spacing: 0.1em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #FFFFFF;
      }

      .link-2{

      }

    }

    img{
      height: 294px;
      align-self: flex-end;
      margin-bottom: -60px;
    }

}
  .our-team-container{
    // height: 970px;
    padding-top: 210px;
    box-sizing: border-box;
    background-color: #ffff;
    background: url('../../assets/images/main-g-our-team-water-text.svg') no-repeat 50px 50px, #fff;

    .our-team-container_header{
      font-family: 'Oswald';
      height: 83px;
      background: url('../../assets/images/rectangle-1.svg') no-repeat ;
      color: #000000;
      font-weight: 600;
      font-size: 48px;

      display: flex;
      align-items: center;
      justify-content: flex-end;
      // top: 217px;
      position: relative;
      padding-right: 150px;
    }

    .all-our-trainers-link{
      background-color: #fff;
      margin: 56px 83px 76px 0;
      font-weight: bold;
      font-size: 12px;
      line-height: 14px;
      text-align: right;
      letter-spacing: 0.05em;
      -webkit-text-decoration-line: underline;
      text-transform: uppercase;
      display: block;
      color: #000000;
    }

    .trainers-container .trainer-item:nth-of-type(even) {
      margin-top:25px;
    }
  }
    .combat-area{
      // height: 570px;
      position: relative;

      .skew-image-1{
        position: absolute;
        bottom: -28px;
        right: 115px;
        z-index: 1;
      }
    }

    .also-for-you-container{
      padding: 90px 150px 60px;
      background-color: #fff;

      &>.title{
        font-family: Oswald;
        font-size: 48px;
        font-weight: 600;
        letter-spacing: 0.02em;
        text-align: center;
        margin-bottom: 62px;
      }

      .orders{
        display: grid;
        grid-column-gap:75px;
        grid-template-columns: repeat(3, 1fr);

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
