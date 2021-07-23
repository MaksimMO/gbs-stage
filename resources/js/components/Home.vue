<template>
<div class="home_view" :style="{marginLeft:skewOffset}">

  <div v-for="slide in slides"
    :key="slide.id"
    :class="['slide', `slide-${slide.id}`, /*[slide.isActive ? 'is-active' : ''],*/ [slide.isHovered || slide.isActive ? 'is-target' : '']]"
    @click="onSlideClick(slide)"
    @mouseenter="enter(slide)"
    @mouseleave="leave(slide)">

    <img :src="slide.backgroundImage" alt="">
    <div class="text" @click.stop="onlogoClick($event, slide)">
    <img :src="slide.isActive ? slide.titleImageActive : slide.titleImage" />
        <div class="your-level-wrapper">
            <div class="your-level-text">{{slide.text1}}</div>
            <div class="your-level-go">GO</div>
        </div>
    </div>
  </div>
</div>
</template>

<script>
import { withDirectives } from '@vue/runtime-core'

let preloadedAssets =
    [
        require('../../assets/homeView/slide-1.png').default,
        require('../../assets/homeView/slide-2.png').default,
        require('../../assets/homeView/slide-3.png').default,

        require('../../assets/homeView/g-level-title.svg').default,
        require('../../assets/homeView/b-level-title.svg').default,
        require('../../assets/homeView/s-level-title.svg').default,

        require('../../assets/homeView/g-level-title-active.svg').default,
        require('../../assets/homeView/b-level-title-active.svg').default,
        require('../../assets/homeView/s-level-title-active.svg').default,

        require('../../assets/homeView/arrow-right.svg').default,
        require('../../assets/homeView/arrow-right-hover.svg').default,
    ]

export default {
  data(){
    return {
      slides:[
        {
          id:1,
          backgroundImage:require('../../assets/homeView/slide-1.png').default,
          titleImage:require('../../assets/homeView/g-level-title.svg').default,
          titleImageActive:require('../../assets/homeView/g-level-title-active.svg').default,
          link:'/main-g',
          text1:'Твій рівень спорту',
          isActive:false,
          isHovered:false
        },
        {
          id:2,
          backgroundImage:require('../../assets/homeView/slide-2.png').default,
          titleImage:require('../../assets/homeView/b-level-title.svg').default,
          titleImageActive:require('../../assets/homeView/b-level-title-active.svg').default,
          link:'/main-b',
          text1:'Твій рівень краси',
          isActive:false,
          isHovered:false

        },
        {
          id:3,
          backgroundImage:require('../../assets/homeView/slide-3.png').default,
          titleImage:require('../../assets/homeView/s-level-title.svg').default,
          titleImageActive:require('../../assets/homeView/s-level-title-active.svg').default,
          link:'/main-s',
          text1:'Твій рівень відпочинку',
          isActive:false,
          isHovered:false

        },
      ],
      innerHeight:window.innerHeight,
    }
  },
  methods:{
    onlogoClick(e, slide){
      console.log('onlogoClick')
      slide.isActive=true;
      this.$router.push(slide.link);
    },
    onSlideClick(slide){
      console.log('onSlideClick')

      if(!this.isSelected){
        slide.isActive = true;
      }else if(slide.isActive){
        slide.isActive=false;
        slide.isHovered=false;
      }

    },
    enter(slide){
      if (!this.isSelected){
        slide.isHovered=true;
      }
    },
    leave(slide){
      if (!this.isSelected){
        slide.isHovered=false;
      }
    }
  },
  mounted(){
    console.log('mounted')

    const resize =  ()=> {
        this.innerHeight = window.innerHeight;
    }
    window.addEventListener('resize', resize);
  },
  unmounted(){
    window.removeEventListener('resize', resize)
  },
  computed:{
    skewOffset(){
      return `-${Math.round(this.innerHeight * Math.tan(15 * Math.PI/180))}px`;
    },
    isSelected(){
      return this.slides.some(({isActive})=>isActive);
    }
  },
  beforeMount(){

  },
  beforeRouteEnter (to, from, next) {

    const cacheImage = (url) => {
        return new Promise((resolve, reject) => {
                let img = new Image()
                img.onload = resolve;
                img.src = url;
        });
    }
    console.log("wait to show loader for 0.6s")
    let postponeTimelId = setTimeout(()=>{
      console.log("show loader")
      window.vm.$data.isLoading=true
    },600);

    Promise.all(preloadedAssets.map((item)=>cacheImage(item))).finally(()=>{
      clearTimeout(postponeTimelId);
      if (window.vm.$data.isLoading){
        console.log("hide loader")
        window.vm.$data.isLoading=false;
      }
      next();
    });
  }
}
</script>

<style>

.home_view{
    display: flex;
    overflow: hidden;
    height:100%;

}

div.slide {
    font-size: 40px;
    color:white;
    display: flex;
    justify-content: center;
    flex: 1 1 0%;
    margin-right: -2px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position-x: center;
    transition: all .3s ease-in-out;
    filter: brightness(75%);
    overflow: hidden;
    transform: skew(-15deg);
    transform-origin: bottom;
    position: relative;
}

div.slide > * {
    transform: skew(15deg) ;
}


div.slide img {
    height: 100%;
    transition: all .3s ease-in-out;
}

.slide.is-target {
    filter: brightness(100%);
    flex-grow: 3;
}

.slide.is-target .text{
    opacity: 1;
}

.slide.is-target .text .your-level-wrapper {
    opacity: 1;
}

.slide .text svg,
.slide .text img {
    fill:rgb(255, 255, 255);
    transition: all .2s ease;
}

/* .slide.slide.is-active .text svg {
    fill: #916C58;
} */

.text {
    opacity: 0.6;
    transition: all .3s ease-in-out;
}
.slide-1 .text {
    position: absolute;
    top: 80px;
    left: 140px;
    cursor: pointer;
}
.slide-2 .text {
    position: absolute;
    bottom: calc(50% - 250px/2);
    left: calc(50% - 227px/2);
    cursor: pointer;
}
.slide-3 .text {
    position: absolute;
    bottom: 70px;
    right: 208px;
    cursor: pointer;
}

.your-level-wrapper {
    opacity: 0;
    position: absolute;
    color: #FFFFFF;
    transition: all .3s ease-in-out;
    white-space: nowrap;
    display: flex;
    flex-direction: column;
}
.your-level-text {
    font-family: "Raleway";
    font-weight: bold;
    font-size: 18px;
    line-height: 27px;
}
.your-level-go {
    background: url("../../assets/homeView/arrow-right.svg") no-repeat right;
    width: 86px;
    margin-top: 40px;
    font-family: "Raleway";
    font-weight: normal;
    font-size: 24px;
    line-height: 28px;
    text-transform: uppercase;
    opacity: 0;
    transition: opacity .6s ease-in-out;

}
.your-level-go:hover {
    background: url("../../assets/homeView/arrow-right-hover.svg") no-repeat right
}

.your-level-go a {
    color: #FFFFFF;
    text-decoration: none;
}

.slide.is-target .your-level-go {
    opacity: 1;
}

.slide-1 .text .your-level-wrapper {
    bottom: -131px;
    left: 107px;
}
.slide-2 .text .your-level-wrapper {
    align-items: center;
    bottom: -124px;
    left: 50%;
    transform: translateX(-50%);
}
.slide-3 .text .your-level-wrapper {
    align-items: flex-end;
    position: absolute;
    bottom: 0px;
    left: -210px;
}


@media screen and (max-width: 1280px) {

    .slide .text img {
        width: 150px;
        height: auto;
    }
    .slide-1 .text .your-level-wrapper {
        left: 0px;
    }

    .slide-1 .text {
        top: 50px;
        left: 85px;
    }

    .slide-2 .text {
        bottom: calc(50% - 130px/2);
        left: calc(50% - 118px/2);
    }

    .slide-3 .text {
        bottom: 50px;
        right: 50px;
    }
}

@media screen and (max-width: 767px) {
    .slide .text img {
        width: 100px;
        height: 110px;
    }
    .slide-1 .text {
        top: 15px;
        left: 30px;
    }
    .slide-2 .text {
        bottom: calc(50% - 100px/2);
        left: calc(50% - 100px/2);
    }
    .slide-3 .text {
        bottom: 43px;
        right: 35px;
    }
    .your-level-wrapper {
        opacity: 1;
    }
    .your-level-text {
        font-size: 11px;
        line-height: 18px;
    }

    .slide-1 .text .your-level-wrapper {
        top: 120px;
    }
    .slide-2 .text .your-level-wrapper {
        bottom: -80px;
    }
    .slide-3 .text .your-level-wrapper{
        right: 0;
        left: unset;
        flex-direction: row-reverse;
        align-items: center;
        bottom: unset;
    }

    .slide-3 .text .your-level-wrapper .your-level-go{
        margin-top: 0;
        margin-right: 20px;
    }


}

</style>