<template>
<div :class="`feed_back_view ${level}`">
    <div class="address">ТСК “МАГІГРАНД”, вул. Келецька, 78В</div>
    <div :class="`logo ${level}`"></div>
    <div class="phone"><a href="tel:0800355555">0800 355 555</a></div>


    <div class="text-1">або<br>залиште свій телефон і ми зателефонуємо Вам</div>
    <FeedBackForm :level="level" />
</div>
</template>

<script>
import FeedBackForm from './Form.vue';

let preloadedAssets = {
    g: [require('../../assets/feedBackFormView/background-g.png').default,
        require('../../assets/feedBackFormView/g-level.svg').default],
    b: [require('../../assets/feedBackFormView/background-b.png').default,
        require('../../assets/feedBackFormView/b-level.svg').default],
    s: [require('../../assets/feedBackFormView/background-s.png').default,
        require('../../assets/feedBackFormView/s-level.svg').default]
    }

export default {
    props:['level'],
    components:{
        FeedBackForm
    },
    methods:{
    },
    beforeRouteEnter(to, from, next) {
        window.vm.$data.isLoading=true;
        const cacheImage = (url) =>{
            return new Promise((resolve, reject) => {
                    let img = new Image()
                    img.onload = function() {
                        resolve()
                    }
                    img.src = url;
            });
        }

        Promise.all(
            [cacheImage(preloadedAssets[to.params.level][0]),
            cacheImage(preloadedAssets[to.params.level][1])])
        .finally(()=>{
            window.vm.$data.isLoading=false;
            next();
        });
  },
}
</script>

<style lang="scss" scoped>

.feed_back_view{
    &.g{
        background:url('../../assets/feedBackFormView/background-g.png') no-repeat center;
         background-size: cover;
    }

    &.b{
        background:url('../../assets/feedBackFormView/background-b.png') no-repeat center;
         background-size: cover;
    }
    &.s{
        background:url('../../assets/feedBackFormView/background-s.png') no-repeat center;
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
        background: url('../../assets/feedBackFormView/g-level.svg') no-repeat center;
    }
    &.b{
        background: url('../../assets/feedBackFormView/b-level.svg') no-repeat center;
    }
    &.s{
        background: url('../../assets/feedBackFormView/s-level.svg') no-repeat center;
    }
}

.phone{
    font-family: Raleway;
    font-weight: 800;
    font-size: 36px;
    letter-spacing: 0.1em;
    font-feature-settings: 'pnum' on, 'lnum' on;
    a{
        color: inherit;
        text-decoration: none;
    }
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