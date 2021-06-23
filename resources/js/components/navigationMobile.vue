<template>
<div class="mobile-navigation">
    <img :src="getUrl('g')" >
    <img :src="getUrl('b')" >
    <img :src="getUrl('s')" >
</div>
</template>

<script>
export default {
  data() {
    return {
    };
  },
  methods:{
    getUrl(area){
      let currentArea = this.$root.$data.area;

      if (area === currentArea) {
        return require(`../../assets/images/${currentArea}-level.svg`).default

      }else{
        return require(`../../assets/images/${area}-lavel-inactive.svg`).default
      }

    }
  }
};
</script>

<style lang="scss" scoped>
.mobile-navigation{
  display:flex;
  justify-content: space-between;
  align-self: stretch;

  img{
    height: 23px;
  }


}
</style>
