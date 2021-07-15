<template>
    <Header class="header-invert" />
    <Breadcrumb />
    <div class="view-areas-g">
        <div class="title">Зонування</div>

        <div class="container-areas">
            <div class="area" v-for="area in areas" :key="area.id" @click="$router.push(`/areas-g/${area.id}`)">

            <!-- <img :src="area.videoPoster"> -->
                <video autoplay loop muted playsinline :src="area.videoUrl" :poster="area.videoPoster"  >
                </video>

                <div class="text-block">
                    <div class="title">{{ area.title }}</div>

                    <router-link :to="`/areas-g/${area.id}`" class="link-button-1">
                    <img src="../../assets/images/link-button-1.svg">
                    </router-link>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
import areas from "../components/AreasG/areas.js";
import Header from "../components/Header.vue";
import Footer from "../components/Footer.vue";
import Breadcrumb from '../components/Breadcrumb.vue';

export default {


    data() {
        return {
            areas
        };
    },
    props: ["id"],
    components: {
        Header,
        Breadcrumb,
        Footer,
    },
};
</script>

<style lang='scss' scoped>
.view-areas-g {
    background-color: #fff;
    padding: 110px 30px 60px;

    & > .title {
        font-family: Oswald;
        font-weight: 600;
        font-size: 52px;
        line-height: 54px;
        letter-spacing: 0.02em;
        font-feature-settings: "pnum" on, "lnum" on;
        color: #000000;
        margin-bottom: 30px;
        margin-left: 216px;
        @media screen and (max-width:767px){
            font-size: 32px;
            line-height: 48px;
            margin-left: 65px;
        }
    }

    .container-areas {

        .area {
            text-align: center;
            font-size: 18px;
            background: #fff;
            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;

            & + .area {
                margin-top: 30px;
            }

            video{
                width: 100%;
            }

            .text-block {
                position: absolute;
                bottom: 0;
                width: 100%;
                display: flex;
                align-items: center;
                padding: 0 60px 50px 120px;
                box-sizing: border-box;

                @media screen and (max-width: 1023px) and (min-width: 768px) {
                   padding: 0 50px 30px 50px;
                }

                @media screen and (max-width: 767px){
                    padding:  7px 20px 15px;
                }

                .title {
                    text-align: left;
                    font-family: Oswald;
                    font-weight: 600;
                    font-size: 64px;
                    line-height: 96px;
                    letter-spacing: 0.01em;
                    font-feature-settings: 'pnum' on, 'lnum' on;
                    color: #FFFFFF;
                    opacity: 0.8;
                    width: min-content;
                    flex: 1 0 auto;

                    @media screen and (max-width: 1023px) and (min-width: 768px) {
                        font-size: 45px;
                        line-height: 54px;
                    }

                    @media screen and (max-width: 767px){
                        font-size: 18px;
                        line-height: 27px;
                    }
                }


                a.link-button-1{
                    align-self: flex-end;

                    img{
                        @media screen and (max-width: 1023px) and (min-width: 768px) {
                            height: 45px;
                        }

                        @media screen and (max-width: 767px){
                            height: 32px;
                        }
                    }
                }
            }
        }
    }
}
</style>>
