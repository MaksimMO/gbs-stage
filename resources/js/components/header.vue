<template>
    <component :is="getComponent"></component>
</template>

<script>
import Desktop from './headerDesktop.vue';
import Mobile from './headerMobile.vue';
import {isMobileOnly}  from 'mobile-device-detect'

export default {
  data() {
    return {
      isMobileOnly
    };
  },
  components: {
    Desktop,
    Mobile
  },
  computed: {
      getComponent() {
          return this.isMobileOnly ? 'Mobile' : 'Desktop';
      }
  }
};
</script>

<style lang="scss" scoped>

</style>
