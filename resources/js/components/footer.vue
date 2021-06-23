<template>
 <component :is="$root.$data.isMobile ? 'footerMobile' : 'footerDesktop'"></component>
</template>

<script>
import footerDesktop from './footerDesktop.vue'
import footerMobile from './footerMobile.vue'

export default {
  data() {
    return {
    };
  },
  mounted(){

  },
  components: {
    footerDesktop,
    footerMobile
  },
};
</script>
