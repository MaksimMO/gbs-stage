<template>
  <Header />
  <div class="view-main-g">
  <div class="top-image-container">
    <img class="top-image" src="../../assets/images/main-g-background.jpg" alt="">
    <img class="skew-image-1" src="../../assets/images/popup-corner.svg" alt="">
    <img class="water-text" src="../../assets/images/main-g-water-text.svg" alt="">
  </div>

  <div class="about-us">
    <h1>Про нас</h1>
    <div class="columns-container">
      <div class="col-1">
        <div>Тренажерний зал 1700 кв.м. з найновішою преміум-лінійкою обладнання від провідного світового бренду TechnoGym </div>
        <div>Простора стилізована зона єдиноборств з професійним рингом</div>
        <div>Окрема студія для сайкл-тренування з надсучасною світло- звуковою системою</div>
        <div>Інноваційна зона функціонального тренінгу та кросфіту</div>
      </div>
      <div class="col-2">
        <div>Студія Barre на основі балету</div>
        <div>Мед кабінет, консультація лікаря</div>
        <div>Власна пральня</div>
        <div>Система вентиляції та кондиціонування  функцією очищення повітря</div>
        <div>Високий рівень сервісу</div>
      </div>
    </div>
    <router-link class="link-1" to="/about-us-g">Детальніше</router-link>

  </div>

  <div class="techno-gym-container">
    <div class="col-1">
      <div class="logo"></div>
      <div class="text">
        TechnoGym - лідер серед виробників тренажерів, завдяки використанню останніх наукових відкриттів та технічних досягнень. Тренажери продумані
        до найдрібніших деталей, тому на них щодня тренується більше 35 мільйонів
        спортсменів, які досягають найвищих спортивних результатів. А відтепер і ви
        зможете відчути їх унікальність.
      </div>
      <router-link class="link-1" to="/about-us-g">Детальніше</router-link>
    </div>
      <img class="skew-image-1" src="../../assets/images/techno-gym-skew-images.png" alt="">
  </div>
  <div class="our-team-container">
    <div class="our-team-container_header">
      Наша команда
    </div>

    <div class="all-our-trainers-link">
      Переглянути всіх
    </div>

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
                {link: 'valentine.jpg', firstName: 'Валентин', lastName: 'Прізвище',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона!!! Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Vitaliy_Kaskun.jpg', firstName: 'Віталій', lastName: 'Каськун',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Vladimir_Leskov.jpg', firstName: 'Володимир', lastName: 'Лєсков',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Gornushkina_Julia.jpg', firstName: 'Юля', lastName: 'Горнушкіна',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' }
            ]



export default {

  data(){
    return{
      isOpen: false,
      trainers
    }

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

<style lang="scss">

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
    left: 40px;
  }

  .water-text{
    position: absolute;
    right: 0;
    bottom: -138px;
  }
}

.about-us{
  background-color: #ffff;
  padding: 80px;
  display: flex;
  flex-direction: column;

  .columns-container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 30px;
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

      padding-left: 150px;
      flex-direction: column;
      display: flex;
      justify-content: center;
      color: #ffff;

      .logo{
        background-image: url("../../assets/images/technogym-logo.svg");
        background-repeat: no-repeat;
        height: 48px;
        widows: 174px;
      }
    }

    img{
      height: 294px;
      align-self: flex-end;
      margin-bottom: -60px;
    }

}
  .our-team-container{
    height: 970px;
    padding-top: 210px;
    box-sizing: border-box;
    background-color: #ffff;
    background: url('../../assets/images/main-g-our-team-water-text.svg') no-repeat 50px 50px;

    .our-team-container_header{
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
      margin: 56px 83px 76px 0;
      font-weight: bold;
      font-size: 12px;
      line-height: 14px;

      text-align: right;
      letter-spacing: 0.05em;
      text-decoration-line: underline;
      text-transform: uppercase;
    }

    .trainers-container .trainer-item:nth-of-type(even) {
      margin-top:25px;
    }
  }
    .combat-area{
      height: 570px;
      position: relative;

      .skew-image-1{
        position: absolute;
        bottom: 45px;
        right: 115px;
        z-index: 1
      }
    }

    .also-for-you-container{
      padding: 90px 150px;

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
            font-weight: 600;
            letter-spacing: 0.02em;
            margin: 12px 0 10px;
          }

          .description{
            font-family: Raleway;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 0.05em;

          }

          &:nth-of-type(1) .icon {
            background:url('../../assets/images/skew-icon-1.svg') no-repeat left, url('../../assets/images/smoothie.svg') no-repeat 45px;
          }

          &:nth-of-type(2) .icon {
            background: url('../../assets/images/skew-icon-1.svg') no-repeat left, url('../../assets/images/heart-beat.svg') no-repeat 45px;
          }

          &:nth-of-type(3) .icon {
            background: url('../../assets/images/skew-icon-1.svg') no-repeat left, url('../../assets/images/hanger.svg') no-repeat 45px;
          }

        }

      }

    }

    .seo-text{

      margin-top:60px;

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