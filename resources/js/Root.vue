<template>
    <Loader />
    <ChangeLevel v-show="$root.$data.area != undefined"/>
    <router-view />
    <Scroll v-show="visible"/>
    <HighlightedPopup v-if="highlightedPopup.isVisible" @closePopup="highlightedPopup.isVisible=false"/>
</template>

<script>
import Header from './components/Header.vue'
import Loader from './components/Loader.vue'
import Footer from './components/Footer.vue'
import Scroll from './components/ScrollTop.vue';
import ChangeLevel from './components/ChangeLevel.vue';
import HighlightedPopup from './components/HighlightedPopup.vue';

export default {
    data() {
        return {
            visible: false,
            highlightedPopup:{
                isVisible:false
            }

        }
    },
    methods: {
        scrollListener (e) {
            this.visible = window.scrollY > 500
        },



        handlerHighlightedPopup(){

            const isHightlightedPopupWasShown = Boolean(sessionStorage.getItem('isHightlightedPopupWasShown'));

            if(!isHightlightedPopupWasShown)
            {
                setTimeout(()=>{
                    //todo hendle different overlays
                    this.highlightedPopup.isVisible=true;
                    sessionStorage.setItem('isHightlightedPopupWasShown', true)
                },25000)
            }

        }
    },
    mounted: function () {
        window.addEventListener('scroll', this.scrollListener)
        this.handlerHighlightedPopup();
    },
    beforeUnmount: function () {
        window.removeEventListener('scroll', this.scrollListener)
    },
    components:{
        Loader,
        Header,
        Footer,
        Scroll,
        ChangeLevel,
        HighlightedPopup
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
