<template>
    <div class="navigation-link">
    <div class="block-background"  v-if="areaGet != undefined"></div>
    <div class="line" v-if="areaGet != undefined"></div>
    <div v-if="areaGet == 'g'" class="left-navigation">
        <router-link to="/main-b"  v-if="areaGet == 'g'">
            <img src="../../assets/images/b-level-link.svg" class="b"/>
        </router-link>
        <router-link to="/main-s"  v-if="areaGet == 'g'">
            <img src="../../assets/images/s-level-link.svg" class="s"/>
        </router-link>
    </div>
    <div v-if="areaGet == 'b'" class="left-navigation">
        <router-link to="/main-g">
            <img src="../../assets/images/g-level-link.svg" class="g"/>
        </router-link>
        <router-link to="/main-s">
            <img src="../../assets/images/s-level-link.svg" class="s"/>
        </router-link>
    </div>
    <div v-if="areaGet == 's'" class="left-navigation">
        <router-link to="/main-b">
            <img src="../../assets/images/b-level-link.svg" class="b"/>
        </router-link>
        <router-link to="/main-g">
            <img src="../../assets/images/g-level-link.svg" class="g"/>
        </router-link>
    </div>
    </div>
</template>

<script>

export default {
 computed: {
     areaGet(){
         return this.$root.$data.area;
     }
 }
}
</script>

<style lang="scss" scoped>

.block-background{
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0.05;
    width: 327px;
    height: 779px;
    background: #7f4c3e;
}

.line{
    position: fixed;
    height: 376px;
    left: 71px;
    top: 173px;
    z-index: 115;
    border-left: solid 2px #FFFFFF;
    mix-blend-mode: difference;
}
.left-navigation{
    position: fixed;
    left: 62px;
    top: 600px;
    z-index: 115;
    & .g{
        width: 21px;
        display: block;
        height: 40px;
        margin-bottom: 35px;
    }

    & .b{
        display: block;
        width: 21px;
        height: 40px;
        margin-bottom: 35px;
    }
    & .s{
        display: block;
        width: 21px;
        height: 40px;
    }
}
@media screen and (max-width: 1023px) and (min-width: 768px) {
    .block-background{
        width: 149px;
        height: 400px;
    }
    .line{
        height: 190px;
        left: 25px;
        top: 92px;
        border-width: 1px;
    }
    .left-navigation {
        left: 16px;
        top: 302px;
        & .g{
            height: 30px;
            margin-bottom: 20px;
        }

        & .b{
            height: 30px;
            margin-bottom: 20px;
        }
        & .s{
            height: 30px;
        }
    }
}
@media screen and (max-width: 767px) {
    .block-background {
        display: none;
    }
    .line{
        display: none;
    }
    .left-navigation {
        display: none;
    }
}
</style>
