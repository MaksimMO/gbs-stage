<template>
    <div class="scrollTop" @click="scrollToTop()">
        <div>Догори</div>
        <img src="../../assets/images/scrollTop.svg" alt="scroll">
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

<style lang="scss">
    .scrollTop {
        width: 25px;
        position: fixed;
        bottom: 310px;
        right: 10px;
        &>div{
            font-family: Raleway;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 14px;
            position: absolute;
            bottom: 18px;
            color: #000;
            margin: 0;
            transform: translateX(-50%) rotate(-90deg);
        }
        &>img{
            height: 61px;
            width: 25px;
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
