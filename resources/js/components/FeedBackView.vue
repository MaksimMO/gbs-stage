<template>
<div :class="`feed_back_view ${lavel}`">
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <div :class="`logo ${lavel}`"></div>
    <div class="phone">0800 35 55 55</div>
    <div class="text-1">або<br>залиште свій телефон і ми зателефонуємо Вам</div>
    <FeedBackForm :lavel="lavel" />
</div>
</template>

<script>
import FeedBackForm from './Form.vue';
export default {
    props:['lavel'],
    components:{
        FeedBackForm
    }
}
</script>

<style lang="scss" scoped>

.feed_back_view{
    &.g{
        background:url('../../assets/background-g.png') no-repeat center;
         background-size: cover;
    }

    &.b{
        background:url('../../assets/background-b.png') no-repeat center;
         background-size: cover;
    }
    &.s{
        background:url('../../assets/background-s.png') no-repeat center;
         background-size: cover;
    }

    display:flex;
    flex-direction:column;
    justify-content: space-between;
    height:100%;
    align-items:center;
    color:#fff;
    padding:60px 0 80px;
    box-sizing:border-box;
}

.feed_back_view .address{
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    text-align: center;
    letter-spacing: 0.1em;
}

.feed_back_view .logo{
    width: 178px;
    height:84px;
    flex-grow: 1;

    &.g{
        background: url('../../assets/g-level.svg') no-repeat center;
    }
    &.b{
        background: url('../../assets/b-level.svg') no-repeat center;
    }
    &.s{
        background: url('../../assets/s-level.svg') no-repeat center;
    }
}

.phone{
    font-family: Raleway;
    font-weight: 800;
    font-size: 36px;
    letter-spacing: 0.1em;
    font-feature-settings: 'pnum' on, 'lnum' on;
}

.feed_back_view .text-1{
    margin: 5vh 0;
    text-align:center;
    line-height: 27px;
    font-family: Raleway;
    font-weight: 500;
    font-size: 18px;
    letter-spacing: 0.1em;
    font-feature-settings: 'pnum' on, 'lnum' on;
}


</style>