<template>
    <component :is="getComponent"></component>
</template>

<script>
import Desktop from './headerDesktop.vue';
import Mobile from './headerMobile.vue';

export default {
  data() {
    return {
    };
  },
  components: {
    Desktop,
    Mobile
  },
  computed: {
      getComponent() {
          return this.$root.$data.isMobile ? 'Mobile' : 'Desktop';
      }
  }
};
</script>

<style lang="scss" scoped>

</style>
