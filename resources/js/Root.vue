<template>
    <Loader />
    <router-view />
</template>

<script>
import Header from './components/Header.vue'
import Loader from './components/Loader.vue'
import Footer from './components/Footer.vue'

export default {

    components:{
        Loader,
        Header,
        Footer
    }
}
</script>

<style>
html, body {
    height: 100%;
    margin: 0;
    padding:0;
}

#gbslevel-app {
    /* height: 100%; */
    /* height: 702px; */
    /* position: absolute; */
    font-family: 'Raleway';
    font-feature-settings: 'pnum' on, 'lnum' on;
    background-color: #000000;
    /* height: 100vh; */
    /* min-height: 100vh; */
    /* overflow: auto; */
}
</style>
