<template>
  <Header class="header-invert" />
  <Breadcrumb />

  <div class="schedule-widget-view">
    <div class="title">
      Розклад
    </div>
    <iframe src="schedule-widget-app" :height="height"></iframe>
  </div>
  <Footer />
</template>

<script>
import Header from "../components/Header.vue";
import Breadcrumb from "../components/Breadcrumb.vue";
import Footer from "../components/Footer.vue";

export default {
  data(){
    return {
      height:'100vh'
    }
  },
  components: {
    Header,
    Breadcrumb,
    Footer,
  },
  // computed:{
  //   innerHeight(){

  //   }
  // },
  mounted(){
    window.addEventListener("message", ((e) => {

      this.$data.height = `${e.data}px`

    }).bind(this), false);
  }
};
</script>

<style lang="scss" scoped>
.schedule-widget-view{
    padding-top: 208px;
    padding-left:85px;
    padding-right: 50px;
}


.title{
    font-weight: 600;
    font-style: normal;
    font-family: 'Oswald';
    font-size: 52px;
    margin: 0;
    margin-bottom: 30px;
    line-height: 54px;
    letter-spacing: 0.02em;
    font-feature-settings: 'pnum' on, 'lnum' on;
    color: #000000;
}

iframe{
  height: 100vh;
  width:100%;
  border:none;
}

</style>