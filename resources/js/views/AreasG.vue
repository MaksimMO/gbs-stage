<template>
 <Header class="header-invert" :level="'g'"/>
<div class="areas-g">
  <div class="title">
    Зонування
  </div>
  <AreasSliderG :isSlider="false" />
</div>
  <Footer :level="'g'"/>
</template>

<script>
import AreasSliderG from '../components/AreasSliderG/AreasSliderG.vue'
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
export default {
  components:{
    AreasSliderG,
    Header,
    Footer
  }

}

</script>

<style lang='scss' scoped>

.areas-g{
    background-color: #fff;
    padding: 208px 30px 60px;

    .title{
      font-family: Oswald;
      font-weight: 600;
      font-size: 52px;
      line-height: 54px;
      letter-spacing: 0.02em;
      font-feature-settings: 'pnum' on, 'lnum' on;
      color: #000000;
      margin-bottom: 30px;
      margin-left: 216px;
    }
}

</style>>
