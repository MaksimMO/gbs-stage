<template>
    <div>
    <!-- <div class="scroll-text">Догори</div> -->
    <div class="scrollTop" @click="scrollToTop()">
        <div class="scroll-text">Догори</div>
        <!-- <img src="../../assets/images/scrollTop.svg" alt="scroll"> -->
        <svg width="16" height="61" viewBox="0 0 16 61" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:difference">
                <path d="M8.70711 0.292889C8.31658 -0.0976334 7.68342 -0.0976334 7.29289 0.292889L0.928932 6.65685C0.538408 7.04737 0.538408 7.68054 0.928932 8.07106C1.31946 8.46159 1.95262 8.46159 2.34315 8.07106L8 2.41421L13.6569 8.07106C14.0474 8.46159 14.6805 8.46159 15.0711 8.07106C15.4616 7.68054 15.4616 7.04737 15.0711 6.65685L8.70711 0.292889ZM9 61L9 0.999996H7L7 61H9Z" fill="#6E93A7"/>
            </g>
        </svg>
    </div>
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
        z-index: 250;
        position: fixed;
        bottom: 80px;
        right: 10px;
        mix-blend-mode: difference;

        &>.scroll-text{
            font-family: Raleway;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 14px;
            position: absolute;
            color: #FFFFFF;
            bottom: 18px;
            right: -20px;
            margin: 0;
            transform: translateX(-50%) rotate(-90deg);

        }

        &>svg{
            height: 61px;
            width: 16px;
            display: block;
            transition: all .2s ease-in;
        }
        &:hover{
            cursor: pointer;
        }
        &:hover > svg{
            // height: 80px;
            transform: scaleY(1.30);
            transform-origin: bottom;
        }
    }
    // .scroll-text{
    //     font-family: Raleway;
    //     font-style: normal;
    //     font-weight: 500;
    //     font-size: 12px;
    //     line-height: 14px;
    //     position: absolute;
    //     color: #000000;
    //     z-index: 250;
    //     position: fixed;
    //     bottom: 95px;
    //     right: -10px;
    //     margin: 0;
    //     transform: translateX(-50%) rotate(-90deg);
    // }

</style>
