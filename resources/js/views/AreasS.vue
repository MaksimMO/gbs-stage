<template>
  <Header class="header-invert" />
  <Breadcrumb />
  <div class="view-areas-s">
    <div class="title">Послуги</div>

    <div class="container-areas">
      <div class="area" v-for="area in areas" :key="area.id"  @click="$router.push(`/areas-s/${area.id}`)">
        <img :src="area.imageUrl" />
        <div class="text-block">
          <div class="title">{{ area.titleBanner || area.title }}</div>
          <div class="description" v-html="area.descriptionBanner || area.description"></div>
          <router-link :to="`/areas-s/${area.id}`" class="link-2"
            >Переглянути</router-link
          >
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>

<script>
import areas from "../components/AreasS/areas.js";
import Header from "../components/Header.vue";
import Footer from "../components/Footer.vue";
import Breadcrumb from '../components/Breadcrumb.vue';

export default {
  data() {
    return {
      areas,
    };
  },
  props: ["id"],
  components: {
    Header,
    Footer,
    Breadcrumb
  },
};
</script>

<style lang='scss' scoped>
.view-areas-s {
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

      @media screen and (max-width:767px){
        height: 505px;
      }
      @media screen and (max-width: 1023px) and (min-width: 768px) {

      }
      

      & + .area {
        margin-top: 30px;
      }

      img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.7);
      }

      .text-block {
        position: absolute;
        box-sizing: border-box;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 0 15px 50px 15px;
        display: flex;
        flex-direction:column;
        justify-content: flex-end;

        .title {
          font-family: Oswald;
          font-weight: 600;
          font-size: 64px;
          line-height: 96px;
          letter-spacing: 0.01em;
          font-feature-settings: "pnum" on, "lnum" on;
          color: #ffffff;

          opacity: 0.8;
          text-transform: uppercase;
          text-align: left;
          align-self: end;
          margin-bottom: 30px;
          @media screen and (max-width:767px){
            font-size: 36px;
            line-height: 54px;
          }
          @media screen and (max-width: 1023px) and (min-width: 768px) {
            font-size: 36px;
            line-height: 54px;
          }
        }

        .description {
          font-family: Raleway;
          text-align: left;
          font-size: 14px;
          line-height: 28px;
          letter-spacing: 0.05em;
          font-feature-settings: "pnum" on, "lnum" on;
          color: #ffffff;
        }

        .link-2 {
          font-family: Raleway;
          font-weight: 800;
          font-size: 14px;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          text-decoration: none;
          width: max-content;
          color: #fff;
          transition: all 0.2s linear;
          position: relative;
          cursor: pointer;
          z-index: 1;
          margin-top: 30px;
          @media screen and (max-width:767px){
            left: 30px;
          }

          &:before {
            content: "";
            position: absolute;
            bottom: -3px;
            left: -8px;
            width: calc(100% + 16px);
            height: calc(50% + 3px);
            background: #916c58;
            z-index: -1;
            transition: all 0.2s linear;
          }

          &:hover:before {
            height: calc(100% + 6px);
          }
          &:active {
            color: #000;
          }
        }
      }
    }
  }
}
</style>>
