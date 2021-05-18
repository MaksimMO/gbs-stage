<template>
<Header class="header-invert" />
  <div class="simulator-g">
      <section class="title">
          <h1>Тренажери</h1>
          <p>
            Спортивний клуб «G level» оснащений найновішою преміум-лінійкою тренажерів від провідного світового бренду TechnoGym.
          </p>
          <p>
            TechnoGym - лідер серед виробників тренажерів, завдяки використанню останніх наукових відкриттів та технічних досягнень.
            Тренажери продумані до найдрібніших деталей, тому на них щодня тренується більше 35 мільйонів спортсменів,
            які досягають найвищих спортивних результатів. А відтепер і ви зможете відчути їх унікальність.
          </p>
          <div class="logo"></div>
      </section>
      <section class="simulator-direction">
          <ul class="direction">
            <li>Верхня частина тіла</li>
            <li>Нижня частина тіла</li>
            <li>Кардіо</li>
            <li>Багатофункціональні тренажери</li>
            <li>Вільні ваги</li>
        </ul>
      </section>
  </div>
<Footer />
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
export default {
    emits: ['changeOpen'],
    data() {
        return {
            isOpen: false,
        }
    },
    methods: {
        change(e) {
            this.isOpen = e;
        },
    },
    computed: {
        articleGroups () {
            return Array.from(Array(Math.ceil(this.trainers.length / 4)).keys());
        },
    },
    components: {
        Header,
        Footer
    }
}

</script>

<style lang="scss" scoped>
    #gbslevel-app {
        background-color: transparent;
    }
    .simulator-g {
        padding-top: 225px;
        .logo {
            background-image: url("../../assets/images/technogym-logo-black.svg");
            background-repeat: no-repeat;
            height: 84px;
            width: 310px;
            margin-bottom: 30px;
            margin-top: 20px;
            margin-left: auto;
        }
    }
    .title {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 60px;
        & > h1 {
            font-weight: 600;
            font-style: normal;
            font-family: Oswald;
            font-size: 52px;
            margin: 0;
            margin-left: 96px;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        & > p {
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            margin-bottom: 10px;
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    .simulator-direction {
        font-family: Oswald;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 27px;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        & > .direction {
            list-style-type: none;
            display: flex;
            color: #000000;
            grid-column-gap: 40px;
            align-items: center;
            text-align: center;
            padding: 0;
        }
    }
    // .title > h1 {
    //     font-weight: 600;
    //     font-style: normal;
    //     font-family: Oswald;
    //     font-size: 52px;
    //     margin: 0;
    //     margin-left: 96px;
    //     line-height: 54px;
    //     letter-spacing: 0.02em;
    //     font-feature-settings: 'pnum' on, 'lnum' on;
    //     color: #000000;
    // }
    // .title > p {
    //     font-weight: 400;
    //     font-style: normal;
    //     font-size: 14px;
    //     margin-bottom: 10px;
    //     font-family: Raleway;
    //     font-style: normal;
    //     font-weight: normal;
    //     line-height: 28px;
    //     letter-spacing: 0.05em;
    //     font-feature-settings: 'pnum' on, 'lnum' on;
    //     color: #000000;
    // }
    .footer {
        height: 234px;
    }
</style>

