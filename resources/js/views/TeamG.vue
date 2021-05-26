<template>
<Header class="header-invert"  :level="'g'"/>
  <div class="team-g">
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
<Footer />
</template>

<script>
import TrainerList from '../components/TrainersList';
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
export default {
    emits: ['changeOpen'],
    data() {
        return {
            isOpen: false,
            trainers: [
                {id: 0, link: "Vladimir_Leskov.jpg"},
                {id: 1, link: "Irina_Slyusarenko.jpg"},
                {id: 2, link: "Olga_Depeshko.jpg"},
                {id: 3, link: "Olga_Martsenyuk.jpg"},
                {id: 4, link: "Vitaliy_Kaskun.jpg"},
                {id: 5, link: "Mikhail_Galagan.jpg"},
                {id: 6, link: "Olga_Osadchuk.jpg"},
                {id: 6, link: "Tatiana_Podzigun.jpg"},
                {id: 8, link: "valentine.jpg"},
                {id: 9, link: "Melnyk_Serhiy.jpg"},
                {id: 10, link: "Olena_Semenchuk.jpg"},
                {id: 11, link: "Nechko_Vasil.jpg"},
                {id: 12, link: "Gornushkina_Julia.jpg"},
                {id: 13, link: "Dementieva_Elena.jpg"}
            ],
        }
    },
    methods: {
        change(e) {
            this.isOpen = e;
        },
    },
    components: {
        TrainerList,
        Header,
        Footer
    }
}

</script>

<style lang="scss" scoped>
    .team-g {
        padding-top: 208px;
        background-color: #FFFFFF !important;
    }
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
    .footer {
        height: 234px;
    }
</style>

