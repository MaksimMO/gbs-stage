<template>
<Header />
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
            v-for="(group, i) in articleGroups"
            :key="i"
            :trainers="trainers.slice(i * 4, (i + 1) * 4)"
            :isOpen="isOpen"
            @changeOpen="(e) => change(e)"/>
      </section>
  </div>
<Footer />
</template>

<script>
import TrainerList from '../components/TrainersList';
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
export default {
    emits: ['changeOpen'],
    data() {
        return {
            isOpen: false,
            trainers: [
                {link: 'valentine.jpg', firstName: 'Валентин', lastName: 'Прізвище',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона!!! Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Vitaliy_Kaskun.jpg', firstName: 'Віталій', lastName: 'Каськун',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Vladimir_Leskov.jpg', firstName: 'Володимир', lastName: 'Лєсков',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Gornushkina_Julia.jpg', firstName: 'Юля', lastName: 'Горнушкіна',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Irina_Slyusarenko.jpg', firstName: 'Ірина', lastName: 'Слюсаренко',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Melnyk_Serhiy.jpg', firstName: 'Сергій', lastName: 'Мельник',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Mikhail_Galagan.jpg', firstName: 'Михайло', lastName: 'Галаган',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Nechko_Vasil.jpg', firstName: 'Василь', lastName: 'Нечко',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Olena_Semenchuk.jpg', firstName: 'Олена', lastName: 'Семенчук',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Olga_Depeshko.jpg', firstName: 'Ольга', lastName: 'Депешко',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Olga_Martsenyuk.jpg', firstName: 'Ольга', lastName: 'Марценюк',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Olga_Osadchuk.jpg', firstName: 'Ольга', lastName: 'Осадчук',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' },
                {link: 'Tatiana_Podzigun.jpg', firstName: 'Тетяна', lastName: 'Подзигун',
                    description: 'Найголовніше, чого прагне Таня, це те, щоб ви вийшли з студії щасливими! Будучи багаторазовою призеркою у категорії фітнес бікіні 35+ у федерації wabba, ufbf-official, fbbu, вона ' }
            ]
        }
    },
    methods: {
        change(e) {
            this.isOpen = e;
        }
    },
    computed: {
        articleGroups () {
            return Array.from(Array(Math.ceil(this.trainers.length / 4)).keys());
        }
    },
    components: {
        TrainerList,
        Header,
        Footer
    }
}

</script>

<style lang="scss">
    #gbslevel-app {
        background-color: #E5E5E5;
        height: auto !important;
    }
    .header {
        position: inherit;
        margin-bottom: auto;
        color: #000;
        padding: 3.13rem 4.25rem 0 4.25rem;
        width: auto;
        &>.address {
            position: absolute;
            left: 25.56rem;
        }
        &>.phone-link{
           margin-left: 29rem;
           position: relative;
        }
        &>.phone-link::before {
            position: absolute;
            left: -25px;
        }
    }
    .team-g {
        max-width: 1440px;
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .title {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 60px;
    }
    .title > h1 {
        font-weight: 600;
        font-style: normal;
        font-family: 'Oswald';
        font-size: 52px;
        margin-bottom: 16px;
        margin-left: 96px;
    }
    .title > p {
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
        margin-bottom: 10px;
    }
    .title > b {
        font-style: normal;
        font-size: 14px;
    }
    .footer {
        height: 234px;
    }
</style>

