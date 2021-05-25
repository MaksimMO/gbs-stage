<template>
    <div class="scrollTop" @click="scrollToTop()">
        <div class="scroll-text">Догори</div>
        <img src="../../assets/images/scrollTopPng.png" alt="scroll">
    </div>
</template>

<script>
    export default {
        methods: {
            scrollToTop() {
                window.scrollTo(0,0);
            }
        },
    }
</script>

<style lang="scss" scoped>
    .scrollTop {
        z-index: 999;
        position: fixed;
        bottom: 310px;
        right: 10px;
        // mix-blend-mode: color;

        &>.scroll-text{
            font-family: Raleway;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 14px;
            position: absolute;
            color: #000;
            bottom: 18px;
            right: -20px;
            margin: 0;
            transform: translateX(-50%) rotate(-90deg);
            // @supports (mix-blend-mode: color) {
            //         color: #fff;
            //         mix-blend-mode: color;
            // }

        }

        &>img{
            height: 65px;
            width: 16px;
            display: block;
            transition: height .2s ease-in;
        }
        &:hover{
            cursor: pointer;
        }
        &:hover > img{
            height: 80px;
        }
    }

</style>
