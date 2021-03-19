<template>
  <!-- <h1>home page</h1>
  <router-link to="/level-g">g level</router-link> |
  <router-link to="/level-b">b level</router-link> |
  <router-link to="/level-s">s level</router-link> -->
<div class="home_view" :style="{marginLeft:skewOffset}">
     <div class="slide slide-1">
        <img src="../../assets/homeView/slide-1.png" alt="">
        <router-link to="/level-g" tag="div" class="text">
        <!-- <div class="text"> -->
        <svg width="227" height="250" viewBox="0 0 227 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.884 89.585H79.9835V27.7833C79.9835 12.4368 67.6352 0 52.3979 0H27.5856C12.3483 0 0 12.4368 0 27.7833V222.217C0 237.563 12.3483 250 27.5856 250H52.4144C67.6517 250 80 237.563 80 222.217V113.195H40.0495V136.805H46.9005V222.217C46.9005 224.511 43.8135 226.39 40 226.39C36.1865 226.39 33.0995 224.528 33.0995 222.217V27.7833C33.0995 25.4888 36.1865 23.61 40 23.61C43.8135 23.61 46.9005 25.4722 46.9005 27.7833V89.585H46.884Z" />
                <path d="M124.127 163V250H144.879V241.784H135.71V210.608H144.879V202.392H135.71V171.216H144.879V163H124.127Z" />
                <path d="M182.115 163V250H202.868V241.784H193.699V210.608H202.868V202.392H193.699V171.216H202.868V163H182.115Z" />
                <path d="M111.578 163H100V250H120.753V241.784H111.578V163Z" />
                <path d="M217.831 241.784V163H206.247V250H227V241.784H217.831Z" />
                <path d="M163.384 224.495L158.063 163H148.259L157.387 250H169.381L178.516 163H168.705L163.384 224.495Z" />
        </svg>
            <div class="your-level-wrapper">
                <div class="your-level-text">Твій рівень спорту</div>
                <div class="your-level-go">GO</div>
            </div>
        <!-- </div> -->
        </router-link>
    </div>


    <div class="slide slide-2">
        <img src="../../assets/homeView/slide-2.png" alt="">
        <router-link to="/level-b" tag="div" class="text">
        <!-- <div class="text"> -->
            <svg width="227" height="250" viewBox="0 0 227 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M124.127 163V250H144.879V241.784H135.711V210.608H144.879V202.392H135.711V171.216H144.879V163H124.127Z" />
                <path d="M182.115 163V250H202.868V241.784H193.699V210.608H202.868V202.392H193.699V171.216H202.868V163H182.115Z" />
                <path d="M111.578 163H100V250H120.753V241.784H111.578V163Z" />
                <path d="M217.831 241.784V163H206.247V250H227V241.784H217.831Z" />
                <path d="M163.384 224.495L158.063 163H148.259L157.387 250H169.381L178.516 163H168.705L163.384 224.495Z" />
                <path d="M80 103.169V27.7833C80 12.4368 67.6491 0 52.4087 0H0V250H52.4087C67.6491 250 80 237.563 80 222.217V146.831C80 125 46.8937 125 46.8937 125C46.8937 125 80 125 80 103.169ZM46.8937 222.217C46.8937 224.511 43.806 226.39 39.9917 226.39H33.0898V136.805H39.9917C43.806 136.805 46.8937 138.667 46.8937 140.978V222.217ZM46.8937 109.022C46.8937 111.316 43.806 113.178 39.9917 113.178H33.0898V23.61H39.9917C43.806 23.61 46.8937 25.4722 46.8937 27.7833V109.022Z" />
            </svg>
                
            <div class="your-level-wrapper">
                <div class="your-level-text">Твій рівень краси</div>
                <div class="your-level-go">GO</div>
            </div>
        <!-- </div> -->
        </router-link>
    </div>


    <div class="slide slide-3">
        <img src="../../assets/homeView/slide-3.png" alt="">
        <router-link to="/level-s" tag="div" class="text">
        <!-- <div class="text"> -->
            <svg width="227" height="250" viewBox="0 0 227 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M124.126 163V250H144.879V241.784H135.71V210.608H144.879V202.392H135.71V171.216H144.879V163H124.126Z" />
                <path d="M182.115 163V250H202.867V241.784H193.699V210.608H202.867V202.392H193.699V171.216H202.867V163H182.115Z" />
                <path d="M111.578 163H100V250H120.753V241.784H111.578V163Z" />
                <path d="M217.831 241.784V163H206.248V250H227V241.784H217.831Z" />
                <path d="M163.385 224.495L158.064 163H148.259L157.388 250H169.382L178.516 163H168.706L163.385 224.495Z" />
                <path d="M79.9835 27.7796C79.9835 12.4352 67.6352 0 52.3979 0H27.5856C12.3483 0 0 12.4352 0 27.7796V73.68C0 83.422 2.5423 93.0144 7.39579 101.46L43.929 165.198C45.8605 168.573 46.884 172.413 46.884 176.303V222.204C46.884 224.498 43.7969 226.377 39.9835 226.377C36.17 226.377 33.083 224.515 33.083 222.22V170.368H0V222.22C0 237.565 12.3483 250 27.5856 250H52.4144C67.6517 250 80 237.565 80 222.22V176.32C80 166.578 77.4577 156.986 72.6042 148.54L36.0545 84.7852C34.123 81.4104 33.0995 77.5702 33.0995 73.68V27.7796C33.0995 25.4854 36.1865 23.6069 40 23.6069C43.8135 23.6069 46.9005 25.4688 46.9005 27.763V79.4986H80V27.7796H79.9835Z" />
            </svg>
                
            <div class="your-level-wrapper">
                <div class="your-level-text">Твій рівень відпочинку</div>
                <div class="your-level-go">GO</div>
            </div>
        <!-- </div> -->
        </router-link>
    </div> 
  </div> 
</template>

<script>
export default {
  data(){
    return {
      innerHeight:window.innerHeight
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
  }
}
</script>

<style>

.home_view{
    display: flex;
    overflow: hidden;
    height:100%;
    background-color: #000000;
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
    /* -webkit-backface-visibility: hidden; */
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
    font-family: "Raleway Bold";
    font-size: 18px;
    line-height: 27px;
}
.your-level-go {
    background: url("../../assets/homeView/arrow-right.svg") no-repeat right;
    width: 86px;
    margin-top: 40px;
    font-family: "Raleway Regular";
    /* font-style: normal; */
    /* font-weight: 300; */
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