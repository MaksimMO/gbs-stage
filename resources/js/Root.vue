<template>
    <Loader />
    <router-view />
    <Scroll v-show="visible"/>
</template>

<script>
import Header from './components/Header.vue'
import Loader from './components/Loader.vue'
import Footer from './components/Footer.vue'
import Scroll from './components/ScrollTop.vue';

export default {
    data() {
        return {
            visible: false
        }
    },
    methods: {
        scrollListener (e) {
            this.visible = window.scrollY > 500
        },
    },
    mounted: function () {
        window.addEventListener('scroll', this.scrollListener)
    },
    beforeDestroy: function () {
        window.removeEventListener('scroll', this.scrollListener)
    },
    components:{
        Loader,
        Header,
        Footer,
        Scroll,
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
    height: 100%;
    font-family: 'Raleway';
    font-feature-settings: 'pnum' on, 'lnum' on;
    /* background-color: #000000; */
}
</style>
