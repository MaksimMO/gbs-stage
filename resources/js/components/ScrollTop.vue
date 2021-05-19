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
        color: #fff;
        mix-blend-mode: difference;
        font-family: Raleway;
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 14px;
        &>.scroll-text{
            // font-family: Raleway;
            // font-style: normal;
            // font-weight: 500;
            // font-size: 12px;
            // line-height: 14px;
            position: absolute;
            bottom: 18px;
            right: -20px;
            margin: 0;
            transform: translateX(-50%) rotate(-90deg);
        }

        &>img{
            height: 65px;
            width: 16px;
            display: block;
            transition: height .6s ease-in;
        }
        &:hover{
            cursor: pointer;
        }
        &:hover > img{
            height: 80px;
        }
    }
</style>
