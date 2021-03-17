<template>
<div class="feed_back_view">
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <div class="logo"></div>
    <div class="phone">0800 35 55 55</div>
    <div class="text-1">або<br>залиште свій телефон і ми зателефонуємо Вам</div>
    <FeedBackForm />
</div>
</template>

<script>
import FeedBackForm from './Form.vue';
export default {
    components:{
        FeedBackForm
    }
}
</script>

<style>
body {
    background:url('../../assets/background-1.png') no-repeat center;
    background-size: cover;
    /* transition: backdrop-filter .3s ease-out; */
}




.feed_back_view{
    /* transition: filter .3s ease-out; */
    display:flex;
    flex-direction:column;
    /* todo */
    justify-content: space-evenly;
    height:100%;
    align-items:center;
    color:#fff;
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
    background: url('../../assets/g-level.svg') no-repeat;
}

.feed_back_view .text-1{
    text-align:center;
}


</style>