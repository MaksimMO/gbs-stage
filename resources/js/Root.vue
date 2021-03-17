<template>
  <!-- <div id="nav">
      <router-link to="/">Home</router-link> |
      <router-link to="/contact-form">feed</router-link>
  </div> -->
  <router-view />
</template>

<script>
// import FeedBackView from './components/FeedBackView.vue'

// export default {
//     data(){
//         return{
//             currentView:'FeedBackView'
//         }
//     },
//     components:{
//         FeedBackView
//     }
// }
</script>

<style>
html, body {
    height: 100%;
    margin: 0;
}

#gbslevel-app {
    height: 100%;
    font-family: 'Raleway';
}

/* body.is-popup-opened{
    backdrop-filter: blur(10px);
}

body.is-popup-opened .feed_back_view{
    filter: blur(10px);
} */


/* body.is-popup-opened > div.popup{
    opacity: 1;
} */

/* body.popup > div.popup {
    opacity: 1;
} */
</style>