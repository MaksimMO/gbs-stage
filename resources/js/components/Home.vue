<template>
<div class="home_view" :style="{marginLeft:skewOffset}">

<div v-for="slide in slides"
:key="slide.id"
:class="['slide', `slide-${slide.id}`, [slide.isActive ? 'is-active' : ''], /*[slide.isHovered && !slides.find(({isActive})=>isActive) ? 'is-target' : '']*/]"
@click="onSlideClick($event, slide)"
@touchend="onSlideClick($event, slide)"
@mouseenter="slide.isHovered=true"
@mouseleave="slide.isHovered=false">

    <img :src="slide.backgroundImage" alt="">
    <router-link :to="slide.link" tag="div" class="text" @click="onlogoClick($event, slide.id)">
    <img :src="slide.isActive ? slide.titleImageActive : slide.titleImage" />
        <div class="your-level-wrapper">
            <div class="your-level-text">{{slide.text1}}</div>
            <div class="your-level-go">GO</div>
        </div>
    </router-link>
</div>


     <!-- <div class="slide slide-1" @mouseenter="enter" @mouseleave="leave" ref="slide-1" @click="onSlideClick">
        <img src="../../assets/homeView/slide-1.png" alt="">
        <router-link to="/level-g" tag="div" class="text" @click="onlogoClick($event, 1)">
        <img src="../../assets/homeView/g-level-title.svg" />
            <div class="your-level-wrapper">
                <div class="your-level-text">Твій рівень спорту</div>
                <div class="your-level-go">GO</div>
            </div>
        </router-link>
    </div>

    <div class="slide slide-2" @mouseenter="enter" @mouseleave="leave" ref="slide-2" @click="onSlideClick">
        <img src="../../assets/homeView/slide-2.png" alt="">
        <router-link to="/level-b" tag="div" class="text" @click="onlogoClick($event, 2)">
            <img src="../../assets/homeView/b-level-title.svg" />
            <div class="your-level-wrapper">
                <div class="your-level-text">Твій рівень краси</div>
                <div class="your-level-go">GO</div>
            </div>
        </router-link>
    </div>

    <div class="slide slide-3" @mouseenter="enter" @mouseleave="leave" ref="slide-3" @click="onSlideClick">
        <img src="../../assets/homeView/slide-3.png" alt="">
        <router-link to="/level-s" tag="div" class="text" @click="onlogoClick($event, 3)">
        <img src="../../assets/homeView/s-level-title.svg" />
            <div class="your-level-wrapper">
                <div class="your-level-text">Твій рівень відпочинку</div>
                <div class="your-level-go">GO</div>
            </div>
        </router-link>
    </div> -->
  </div>
</template>

<script>

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
          link:'/level-g',
          text1:'Твій рівень спорту',
          isActive:false,
          isHovered:false
        },
        {
          id:2,
          backgroundImage:require('../../assets/homeView/slide-2.png').default,
          titleImage:require('../../assets/homeView/b-level-title.svg').default,
          titleImageActive:require('../../assets/homeView/b-level-title-active.svg').default,
          link:'/level-b',
          text1:'Твій рівень краси',
          isActive:false,
          isHovered:false

        },
        {
          id:3,
          backgroundImage:require('../../assets/homeView/slide-3.png').default,
          titleImage:require('../../assets/homeView/s-level-title.svg').default,
          titleImageActive:require('../../assets/homeView/s-level-title-active.svg').default,
          link:'/level-s',
          text1:'Твій рівень відпочинку',
          isActive:false,
          isHovered:false

        },
      ],

      innerHeight:window.innerHeight
    }
  },
  methods:{
    onlogoClick(e, daw){
      // debugger
      console.log('onlogoClick', e.currentTarget);
      return e.preventDefault();

    },
    onSlideClick(e, slide){
      if (slide.isActive){
        slide.isActive = false;
      }else{
        let activeSlide =  this.slides.find(({isActive})=>isActive) ?? slide;

        activeSlide.isActive = true;

        // activeSlide.isActive = false;
        // slide.isActive=true;
      }
      // debugger
			// let activeSlide = document.getElementsByClassName('is-active')[0];

			// if (activeSlide && activeSlide !== e.currentTarget){
			// 	activeSlide.classList.remove('is-active')
			// }

			// e.currentTarget.classList.remove("is-target");
			// e.currentTarget.classList.toggle('is-active')

			// console.log('onclick', e.currentTarget);
    },
    enter(e){
      console.log('mouseleave', e.currentTarget);
      let activeSlide = document.getElementsByClassName('is-active')[0];

      if (!activeSlide){
          e.currentTarget.classList.add("is-target");
      }
    },
    leave(e){
      console.log('mouseleave', e.currentTarget);
      e.currentTarget.classList.remove("is-target");
    }
  },
  mounted(){
    window.addEventListener('resize', ()=> {
        this.innerHeight = window.innerHeight;
    });
  },
  computed:{
    skewOffset(){
      return `-${Math.round(this.innerHeight * Math.tan(15 * Math.PI/180))}px`;
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

.slide.is-active, .slide.is-target {
    filter: brightness(100%);
    flex-grow: 3;
}

.slide.is-active .text,  .slide.is-target .text{
    opacity: 1;
}

.slide.is-active .text .your-level-wrapper, .slide.is-target .text .your-level-wrapper {
    opacity: 1;
}

.slide .text svg,
.slide .text img {
    fill:rgb(255, 255, 255);
    transition: all .2s ease;
}

.slide.slide.is-active .text svg {
    fill: #916C58;
}

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

.slide.is-active .your-level-go, .slide.is-target .your-level-go {
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

</style>