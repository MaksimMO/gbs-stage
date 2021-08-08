<template>
<Header class="header-invert"/>
    <Breadcrumb />
  <div class="view-about-us-g">
    <section class="title">
        <h1>Про нас</h1>
        <p>
            GBS LEVEL - це абсолютно новий рівень клубного життя Вінниці.
            Культура Спорту G LEVEL, краса В LEVEL та естетика S LEVEL поєднані у єдиний
            комплекс із найпрогресивнішим обладненням, стильним дизайном та неперевершеним комфортом.
        </p>
    </section>
    <section class="image-container-aboutUs">
        <img class="image" src="../../assets/images/aboutUs-g-main.jpg" alt="">
        <img class="skew-image" src="../../assets/images/popup-corner.svg" alt="">
        <div class="text-image">
            <p>
                Твій рівень спорту!
            </p>
        </div>
    </section>
    <section class="gallery-slider">
        <GallerySlider :images="gallery" />
    </section>
    <section class="about-us-g-description">
        <ul class="first">
            <li><b>Тренажерний зал 1700 кв.м.</b> з найновішою преміум-лінійкою обладнання від провідного світового бренду TechnoGym</li>
            <li>Простора стилізована <b>зона єдиноборств</b> з професійним рингом</li>
            <li>Окрема <b>студія для сайкл-тренування</b> з надсучасною світло- звуковою системою</li>
            <li><b>Інноваційна</b> зона функціонального тренінгу та кросфіту</li>
        </ul>
        <ul class="second">
            <li><b>Студія Barre</b> на основі балету</li>
            <!-- <li>Мед кабінет, <b>консультація лікаря</b></li> -->
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
        <div class="teams-slider">
            <TeamsSlider
                :trainers="trainers"
                :isOpen="isOpen"
                @changeOpen="(e) => change(e)"
            />
        </div>
    </section>

    <!-- <section class="certificate-title">
        <h1>Нагороди та сертифікати</h1> -->
        <!-- <p>
            Sed a leo sagittis, tincidunt lorem venenatis, congue sem. Sed id velit quis augue luctus dictum.
            Suspendisse id vestibulum augue. Suspendisse convallis metus non erat finibus tempus. Fusce eu lobortis quam.
            Maecenas blandit varius magna. Phasellus eget rutrum ex. Suspendisse velit est, convallis vitae maximus et, sodales a est.
        </p> -->
    <!-- </section>
    <CertificateSlider />
    <section class="certificate-description"> -->
        <!-- <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae justo ut lacus commodo dignissim quis ut ipsum.
            Pellentesque a tortor vitae arcu dictum faucibus. Cras ornare ex in mattis egestas. Nulla lobortis nisi in turpis feugiat, at rutrum elit sagittis.
            Ut consequat finibus metus id consectetur. Suspendisse nisl erat, condimentum sit amet luctus eu, luctus ut ipsum.
            Ut tempus rhoncus lectus, nec porttitor diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Sed nec hendrerit neque...
        </p> -->
    <!-- </section> -->
  </div>
<Footer/>
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import CertificateSlider from '../components/CertificateSlider.vue';
import GallerySlider from '../components/GallerySlider.vue';
import TeamsSlider from '../components/TeamsSlider.vue';
import Breadcrumb from '../components/Breadcrumb.vue';

let preloadedAssets = [
        require('../../assets/images/aboutUs-g-main.jpg').default,
        require('../../assets/images/popup-corner.svg').default,
        require('../../assets/images/TeamG/Vladimir_Leskov.jpg').default,
        require('../../assets/images/TeamG/Olga_Depeshko.jpg').default,
        require('../../assets/images/TeamG/Olga_Martsenyuk.jpg').default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_1540-1-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_1548-1-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_1620-1-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_1627-1-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_1635-1-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_4574-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_4583-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_4595-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_4608-min.jpg").default,
        require("../../assets/images/TeamG/gallery/overlay/IMG_4614-min.jpg").default
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
                {id: 10, link: "Elena_Dementieva.jpg", linkVideo: "Elena_Dementieva.MOV"},
                {id: 11, link: "Nina_Shevchuk.jpg", linkVideo: "Nina_Shevchuk.MOV"},
                // {id: 12, link: "image-not-found.jpg"},
                {id: 13, link: "olga-grigoruk.jpg", linkVideo: "olga-grigoruk.MOV"},
                {id: 14, link: "maksym-kaschapov.jpg", linkVideo:"maksym-kaschapov.MOV"}
            ],
            gallery: [
                require("../../assets/images/TeamG/gallery/overlay/IMG_1540-1-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_1548-1-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_1620-1-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_1627-1-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_1635-1-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_4574-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_4583-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_4595-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_4608-min.jpg").default,
                require("../../assets/images/TeamG/gallery/overlay/IMG_4614-min.jpg").default
            ]
        }
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
        let postponeTimelId = setTimeout(()=>{
            window.vm.$data.isLoading=true
        },600);


        Promise.all(preloadedAssets.map((urlImg) => (cacheImage(urlImg)))).finally(()=>{

            clearTimeout(postponeTimelId);
            if (window.vm.$data.isLoading){
                window.vm.$data.isLoading=false;
            }
            next();
        });
    },
    components: {
        Header,
        Breadcrumb,
        GallerySlider,
        TeamsSlider,
        CertificateSlider,
        Footer
    }
}

</script>

<style lang="scss" scoped>
    .view-about-us-g {
        padding-top: 208px;
        background-color: #FFFFFF !important;
        overflow: hidden;
    }
    .title {
        padding: 0 7.81vw;
        margin-bottom: 60px;
    }
    .title > h1 {
        font-weight: 600;
        font-style: normal;
        font-family: Oswald;
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
        font-size: 18px;
        margin-bottom: 10px;
        font-family: Raleway;
        font-style: normal;
        font-weight: normal;
        line-height: 32px;
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
            // max-height: 570px;
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
            width: 45vw;//67.3%
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
    }
    // .teams-slider {
    //     position: relative;
    //     padding: 60px 3vw 230px;
    // }
    .about-us-g-description {
        overflow: visible;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 15px;
        display: grid;
        margin-bottom: 60px;
        padding: 0 6.25vw;
        & ul {
            list-style: none;
            padding: 0;
            padding-left: 2.5em;
            & li {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: normal;
                margin-bottom: 20px;
                font-size: 18px;
                line-height: 32px;
                letter-spacing: 0.05em;
                font-feature-settings: 'pnum' on, 'lnum' on;
            }
            & li::before {
                content: "\25A0";
                color: #916C58;
                font-weight: bold;
                font-size: 10px;
                display: inline-block;
                width: 1.5em;
                margin-left: -1.5em;
            }
        }
    }
    .our-team-aboutUs-container{
        background: rgba(145, 108, 88, 0.1);
        padding-top: 60px;
        padding-bottom: 250px;

        // padding-bottom: 220px;
        .our-team-container_header{
            font-family: 'Oswald';
            height: 85px;
            color: #000000;
            font-weight: 600;
            font-size: 48px;
            display: flex;
            padding-left: 246px;
            align-items: baseline;
            justify-content: space-between;
            position: relative;
            padding-right: 150px;
            margin-bottom: 64px;
            p {
                margin: 0;
                @media screen and (max-width:767px){
                        align-self: flex-end;
                }
            }
        }
        .all-our-trainers-link{
            font-family:'Raleway';
            margin: 56px 83px 76px 0;
            font-weight: bold;
            font-size: 12px;
            line-height: 14px;
            text-align: right;
            letter-spacing: 0.05em;
            -webkit-text-decoration-line: underline;
            text-transform: uppercase;
            // display: block;
            display:inline-block;
            color: #000000;
            &:hover {
                color: #916C58;
            }

            @media screen and (max-width:767px){
                margin: unset;

            }
        }

        .trainers-container .trainer-item:nth-of-type(even) {
            margin-top:25px;
        }
    }
    .certificate-title {
        padding: 0 7.81vw;
        margin-bottom: 60px;
        padding-top: 60px;
        h1 {
            font-weight: 600;
            font-style: normal;
            font-family: Oswald;
            font-size: 52px;
            margin: 0;
            margin-bottom: 40px;;
            text-align: center;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        p {
            font-weight: 400;
            font-style: normal;
            font-size: 18px;
            margin: 0;
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            line-height: 32px;
            letter-spacing: 0.05em;
            text-align: center;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    .certificate-description {
        // width: 80%;
        // margin-left: auto;
        // margin-right: auto;
        padding: 0 7.81vw;
        padding-bottom: 60px;
        padding-top: 60px;
        p {
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 32px;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }

    @media screen and (max-width: 1280px) and (min-width: 768px) {
        .view-about-us-g {
            padding-top: 108px;
        }
        .title {
            padding: 0 50px;
            margin-bottom: 50px;
        }
        .title > h1 {
            font-size: 49px;
            margin-left: 57px;
            margin-bottom: 20px;
        }
        .title > p {
            font-size: 16px;
            line-height: 26px;
        }
         .image-container-aboutUs{
            margin-bottom: 50px;
            padding-left: 107px;

            .image{
                width: 100%;
                // max-height: 316px;
                // object-fit: cover;
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
                width: 400px;//67.3%
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
        .about-us-g-description {
            padding: 0 50px;
            margin-bottom: 50px;
            & ul {
                padding-left: 0.7em;
                & li {
                    font-size: 16px;
                    line-height: 26px;
                    margin-bottom: 15px;
                }
                & li::before {
                    font-size: 8px;
                }
            }
        }
        .our-team-aboutUs-container{
            background: rgba(145, 108, 88, 0.1);
            padding-top: 30px;
            padding-bottom: 0px;


            .our-team-container_header{
                font-size: 45px;
                display: flex;
                padding-left: 50px;
                padding-right: 50px;
                margin-bottom: 40px;
            }
            .trainers-container .trainer-item:nth-of-type(even) {
                margin-top:25px;
            }
        }
        // .teams-slider {
        //     padding: 40px 30px;
        // }
         .certificate-title {
            padding: 0 50px;
            margin-bottom: 30px;
            padding-top: 50px;
            h1 {
                font-size: 49px;
                margin-bottom: 30px;;
            }
            p {
                font-size: 14px;
                line-height: 22px;
            }
        }
        .certificate-description {
            padding: 0 50px;
            padding-bottom: 50px;
            padding-top: 50px;
            p {
                font-size: 14px;
                line-height: 22px;
            }
        }
    }
    @media screen and (max-width: 767px) {
        .view-about-us-g {
            padding-top: 108px;
        }
        .title {
            padding: 0 15px;
            margin-bottom: 50px;
        }
        .title > h1 {
            font-size: 32px;
            margin-left: 50px;
            margin-bottom: 20px;
        }
        .title > p {
            font-size: 14px;
            line-height: 22px;
        }
         .image-container-aboutUs{
            margin-bottom: 73px;
            padding: 0;

            .image{
                width: 100%;
                // max-height: 214px;
                object-fit: cover;
            }

            .skew-image{
                width: 35px;
                height: 30px;
                right: 15px;
                bottom: -15px;
            }

            .text-image{
                // text-align: left;
                // bottom: -35px;
                width: 57.3%;//67.3%
                height: auto;//83px
                font-size: 14px;//36px
                bottom: -11px;
                &>p{
                    line-height: 24px;
                    // margin-left: 45px;
                    margin-right: 25px;
                }
            }
        }
        .gallery-slider {
            padding: 0 15px;
        }
        .about-us-g-description {
            padding: 0 15px;
            grid-template-columns: repeat(1, 1fr);
            margin-bottom: 50px;
            & ul {
                margin: 0;
                padding-left: 0.7em;
                & li {
                    font-size: 14px;
                    line-height: 22px;
                }
                & li::before {
                    font-size: 8px;
                }
            }
        }
        .our-team-aboutUs-container{
            background: rgba(145, 108, 88, 0.1);
            padding-top: 50px;
            padding-bottom: 0;
            .our-team-container_header{
                font-size: 24px;
                display: flex;
                flex-direction: column;
                padding-left: 37px;
                padding-right: 15px;
                // & p {
                //     text-align: right;
                // }
            }
            .trainers-container .trainer-item:nth-of-type(even) {
                margin-top:25px;
            }
        }

         .certificate-title {
            padding: 0 15px;
            margin-bottom: 20px;
            padding-top: 50px;
            h1 {
                font-size: 32px;
                line-height: 48px;
                margin-bottom: 20px;;
            }
            p {
                font-size: 14px;
                line-height: 22px;
            }
        }
        .certificate-description {
            padding: 0 15px;
            padding-bottom: 50px;
            padding-top: 50px;
            p {
                font-size: 14px;
                line-height: 22px;
            }
        }
    }
</style>

