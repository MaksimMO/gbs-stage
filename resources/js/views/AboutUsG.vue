<template>
<Header class="header-invert" />
  <div class="aboutUs-g">
    <section class="title">
        <h1>Про нас</h1>
        <p>
        Sed a leo sagittis, tincidunt lorem venenatis, congue sem. Sed id velit quis augue luctus dictum.
        Suspendisse id vestibulum augue. Suspendisse convallis metus non erat finibus tempus. Fusce eu lobortis quam.
        Maecenas blandit varius magna. Phasellus eget rutrum ex. Suspendisse velit est, convallis vitae maximus et, sodales a est.

        </p>
        <p>
        Suspendisse dictum ultricies imperdiet. Nunc pretium enim a purus dapibus, malesuada dignissim risus accumsan.
        Donec commodo lacus laoreet consequat scelerisque. Aliquam vestibulum magna ornare arcu dignissim, non tristique nibh pharetra.
        Etiam et sapien ullamcorper, dapibus magna vitae, ultrices nunc. Nulla sit amet tortor odio. Quisque accumsan non tellus eget ullamcorper.
        Phasellus congue ligula quis arcu efficitur, sed ornare mi laoreet. Maecenas mi orci, sodales et convallis vitae, ultricies ac neque.
        Donec facilisis orci ut sapien venenatis, nec vestibulum lorem auctor. Morbi dictum lacus neque, id volutpat sem iaculis non.
        </p>
    </section>
    <section class="image-container-aboutUs">
        <img class="image" src="../../assets/images/aboutUs-g-main.jpg" alt="">
        <img class="skew-image" src="../../assets/images/popup-corner.svg" alt="">
        <div class="text-image">
            <p>
                Nulla sed augue vehicula, feugiat nisi sed, commodo dolor.
            </p>
        </div>
    </section>
    <section class="aboutUs-g-description">
        <ul class="first">
            <li><b>Тренажерний зал 1700 кв.м.</b> з найновішою преміум-лінійкою обладнання від провідного світового бренду TechnoGym</li>
            <li>Простора стилізована <b>зона єдиноборств</b> з професійним рингом</li>
            <li>Окрема <b>студія для сайкл-тренування</b> з надсучасною світло- звуковою системою</li>
            <li><b>Інноваційна</b> зона функціонального тренінгу та кросфіту</li>
        </ul>
        <ul class="second">
            <li><b>Студія Barre</b> на основі балету</li>
            <li>Мед кабінет, <b>консультація лікаря</b></li>
            <li>Власна <b>пральня</b></li>
            <li>Система вентиляції та кондиціонування  функцією <b>очищення повітря</b></li>
            <li><b>Високий</b> рівень сервісу</li>
        </ul>
    </section>
    <section class="our-team-aboutUs-container">
        <div class="our-team-container_header">
            <p>Наша команда</p>
            <router-link class="all-our-trainers-link" to="/team-g">
                Переглянути всіх
            </router-link>
        </div>
        <TrainersList
            :trainers="trainers"
            :isOpen="isOpen"
            @changeOpen="(e) => change(e)"
        />
    </section>
    <section class="certificate-title">
        <h1>Нагороди та сертифікати</h1>
        <p>
            Sed a leo sagittis, tincidunt lorem venenatis, congue sem. Sed id velit quis augue luctus dictum.
            Suspendisse id vestibulum augue. Suspendisse convallis metus non erat finibus tempus. Fusce eu lobortis quam.
            Maecenas blandit varius magna. Phasellus eget rutrum ex. Suspendisse velit est, convallis vitae maximus et, sodales a est.
        </p>
    </section>
    <CertificateSlider />
    <section class="certificate-description">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae justo ut lacus commodo dignissim quis ut ipsum.
            Pellentesque a tortor vitae arcu dictum faucibus. Cras ornare ex in mattis egestas. Nulla lobortis nisi in turpis feugiat, at rutrum elit sagittis.
            Ut consequat finibus metus id consectetur. Suspendisse nisl erat, condimentum sit amet luctus eu, luctus ut ipsum.
            Ut tempus rhoncus lectus, nec porttitor diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Sed nec hendrerit neque...
        </p>
    </section>
  </div>
<Footer />
</template>

<script>
import TrainersList from '../components/TrainersList';
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import CertificateSlider from '../components/CertificateSlider.vue';

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
            ]
        }
    },
    methods: {
        change(e) {
            this.isOpen = e;
        },
    },
    components: {
        TrainersList,
        Header,
        CertificateSlider,
        Footer
    }
}

</script>

<style lang="scss">
    #gbslevel-app {
        background-color: transparent;
    }
    .aboutUs-g {
        padding-top: 150px;
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
        font-family: Oswald;
        font-size: 52px;
        margin: 0;
        margin-left: 96px;
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
        font-family: Raleway;
        font-style: normal;
        font-weight: normal;
        line-height: 28px;
        letter-spacing: 0.05em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        color: #000000;
    }
    .image-container-aboutUs{
        position: relative;
        margin-bottom: 60px;
        padding-left: 246px;

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
            left: -20px;
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
    .aboutUs-g-description {
        overflow: visible;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 15px;
        display: grid;
        margin-bottom: 60px;
        padding-left: 150px;
        & ul {
            list-style: none;
            & li {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 28px;
                letter-spacing: 0.05em;
                font-feature-settings: 'pnum' on, 'lnum' on;
            }
            & li::before {
                content: "\2022";
                color: #916C58;
                font-weight: bold;
                display: inline-block;
                width: 1em;
                margin-left: -1em;
            }
        }
    }
    .our-team-aboutUs-container{
        background: rgba(145, 108, 88, 0.1);
        padding-top: 60px;
        .our-team-container_header{
            font-family: 'Oswald';
            height: 83px;
            color: #000000;
            font-weight: 600;
            font-size: 48px;
            display: flex;
            padding-left: 246px;
            align-items: baseline;
            justify-content: space-between;
            position: relative;
            padding-right: 150px;
            margin-bottom: 74px;
            p {
                margin: 0;
            }
        }
        .all-our-trainers-link{
            margin: 0;
            font-weight: bold;
            font-size: 12px;
            line-height: 14px;
            text-align: right;
            letter-spacing: 0.05em;
            color: #000000;
            text-transform: uppercase;
        }

        .trainers-container .trainer-item:nth-of-type(even) {
            margin-top:25px;
        }
    }
    .certificate-title {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 60px;
        padding-top: 60px;
        h1 {
            font-weight: 600;
            font-style: normal;
            font-family: Oswald;
            font-size: 52px;
            margin: 0;
            text-align: center;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        p {
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            margin-bottom: 10px;
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            line-height: 28px;
            letter-spacing: 0.05em;
            text-align: center;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    .certificate-description {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 60px;
        padding-top: 60px;
        p {
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 28px;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    .footer {
        height: 234px;
    }
</style>

