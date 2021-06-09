<template>
<div class="change-level">
    <div class="block-background"></div>
    <div class="line"></div>
    <div v-if="areaGet == 'g'" class="left-navigation">
        <router-link to="/main-b">
            <img src="../../assets/images/b-level-change.svg" class="b"/>
        </router-link>
        <router-link to="/main-s">
            <img src="../../assets/images/s-level-change.svg" class="s"/>
        </router-link>
    </div>
    <div v-if="areaGet == 'b'" class="left-navigation">
        <router-link to="/main-g">
            <img src="../../assets/images/g-level-link.svg" class="g"/>
        </router-link>
        <router-link to="/main-s">
            <img src="../../assets/images/s-level-change.svg" class="s"/>
        </router-link>
    </div>
    <div v-if="areaGet == 's'" class="left-navigation">
        <router-link to="/main-b">
            <img src="../../assets/images/b-level-change.svg" class="b"/>
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

.change-level {
    position: fixed;
    z-index: 115;
    & .block-background{
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0.05;
        width: 327px;
        height: 779px;
        background: #7f4c3e;
    }
    & .line{
        position: absolute;
        height: 376px;
        left: 71px;
        top: 173px;
        border-left: solid 2px #D5D4D3;
        mix-blend-mode: difference;
    }
}

.left-navigation{
    position: absolute;
    left: 62px;
    top: 600px;
    & .g{
        width: 21px;
        height: 40px;
        opacity: .75;
        margin-bottom: 35px;
    }

    & .b{
        width: 21px;
        height: 40px;
        opacity: .75;
        margin-bottom: 35px;
    }
    & .s{
        width: 21px;
        height: 40px;
        opacity: .75;
    }
}
</style>
