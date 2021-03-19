<template>
<div class="overlay-loader" v-if="$root.$data.isLoading">
    <div class="loader" >
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
</div>
  <router-view />
</template>

<script>
// import FeedBackView from './components/FeedBackView.vue'

export default {

    // components:{
        // FeedBackView
    // }
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


@keyframes animate-circle {
    from {
        transform: scale(0);
        opacity: 1;
    }
    to {
        transform: scale(1);
        opacity: 0;
    }
}


.overlay-loader{
    width: 100%;
    height: 100%;
    z-index: 1;
    position: fixed;
    background-color: rgba(0,0,0,0.2);
}



.loader {
    z-index: 1;
    --size: 10rem;

    position: fixed;
    top: 50%;
    left: 50%;
    height: var(--size);
    width: var(--size);
    transform: translateX(-50%) translateY(-50%);
}

.loader > .circle {
        --duration: 2s;

        position: absolute;
        height: inherit;
        width: inherit;
        background: #ffffff;
        border-radius: 50%;
        -webkit-animation: animate-circle var(--duration) cubic-bezier(.9,.24,.62,.79) infinite;
                animation: animate-circle var(--duration) cubic-bezier(.9,.24,.62,.79) infinite;
    }

.loader > .circle:nth-of-type(1) {
            -webkit-animation-delay: 0;
                    animation-delay: 0;
        }

.loader > .circle:nth-of-type(2) {
            -webkit-animation-delay: calc(var(--duration) / -3);
                    animation-delay: calc(var(--duration) / -3);
        }

.loader > .circle:nth-of-type(3) {
            -webkit-animation-delay: calc(var(--duration) / -6);
                    animation-delay: calc(var(--duration) / -6);
        }

</style>