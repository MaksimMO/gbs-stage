<template>
    <loader />
    <router-view />
</template>

<script>
import Loader from './components/loader.vue'

export default {

    components:{
        Loader
    }
}
</script>

<style>
html, body {
    height: 100%;
    margin: 0;
}

#gbslevel-app {
    height: 100%;
    font-family: 'Raleway';
    font-feature-settings: 'pnum' on, 'lnum' on;
    background-color: #000000;
}
</style>