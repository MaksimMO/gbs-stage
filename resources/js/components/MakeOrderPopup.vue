<template>

 <transition name="fade" appear  @after-leave="$emit('closePopup')" >
<div :class="`make-order-popup ${$root.$data.area}`" v-if="isOpened">
    <div class="close" @click="isOpened=false" >
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.45">
                <rect y="26.8701" width="38" height="1" transform="rotate(-45 0 26.8701)" fill="white"/>
                <rect width="38" height="1" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 27.5771 26.8701)" fill="white"/>
            </g>
        </svg>
    </div>
    <div class="text-1">Залиште свій телефон і ми зателефонуємо Вам</div>
    <FeedBackForm @submitSuccess="submitSuccess" :level="$root.$data.area" :choiceLevel="choiceLevel"/>


    <popup-success v-if="modalOpen"/>


</div>
 </transition>
</template>

<script>
import FeedBackForm from './Form.vue'
import popupSuccess from './PopupSuccess.vue'

let preloadedAssets = {
        g: [require('../../assets/feedBackFormView/background-g.jpg').default],
        b: [require('../../assets/feedBackFormView/background-b.jpg').default],
        s: [require('../../assets/feedBackFormView/background-s.jpg').default]
    }

export default {
    props: ['choiceLevel'],
    data(){
        return{
            modalOpen:false,
            isOpened:true
        }

    },
    // props:['closePopup'],
    // props:['level', 'closePopup'],
    components:{
        FeedBackForm,
        popupSuccess
    },
    mounted(){

    },
    methods:{
        submitSuccess(){
            this.modalOpen=false;
            // setTimeout(()=>{
            //         this.$emit('closePopup')
            // }, 2500)
        }

    },
//     beforeRouteEnter(to, from, next) {
//         const cacheImage = (url) =>{
//             return new Promise((resolve, reject) => {
//                 let img = new Image()
//                 img.onload = resolve;
//                 img.src = url;
//             });
//         }
//         console.log("wait to show loader for 0.6s")
//         let postponeTimelId = setTimeout(()=>{
//             console.log("show loader")
//             window.vm.$data.isLoading=true
//         },600);

//         Promise.all(
//             [cacheImage(preloadedAssets[to.params.level][0]),
//             cacheImage(preloadedAssets[to.params.level][1])]).finally(()=>{

//             clearTimeout(postponeTimelId);
//             if (window.vm.$data.isLoading){
//                 console.log("hide loader")
//                 window.vm.$data.isLoading=false;
//             }
//             next();
//         });
//   },
}
</script>

<style lang="scss" scoped>


.fade-enter-active,
.fade-leave-active {
    transition: all .5s ease-in-out;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

.make-order-popup{



    &.g{
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('../../assets/feedBackFormView/background-g.jpg') no-repeat center;
         background-size: cover;
    }

    &.b{
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('../../assets/feedBackFormView/background-b.jpg') no-repeat center;
         background-size: cover;
    }
    &.s{
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('../../assets/feedBackFormView/background-s.jpg') no-repeat center;
         background-size: cover;
    }

    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
    align-items: center;
    color: #fff;
    padding: 60px 0 80px;
    box-sizing: border-box;
    position: relative;
    position: fixed;
    width: 100vw;
    top: 0;
    z-index: 120;

    @media screen and (max-width:767px){

    }
    // @media screen and (max-width: 767px) {
    //     padding:54px 15px 40px;
    // }

}

// .feed_back_view .address{
//     font-weight: bold;
//     font-size: 14px;
//     line-height: 16px;
//     text-align: center;
//     letter-spacing: 0.1em;

//     @media screen and (max-width: 767px) {
//         font-size: 12px;
//         line-height: 14px;
//     }
// }

// .feed_back_view .logo{
//     width: 178px;
//     height:84px;
//     background-size: cover;
//     background-repeat: no-repeat;
//     background-position: center;
//     flex-grow: 1;
//     background-size: 178px 84px;

//     @media screen and (max-width: 767px) {
//         width: 90px;
//         height:42px;
//         background-size: 92px 42px;
//         flex-grow: unset;
//     }

//     &.g{
//         background-image: url('../../assets/images/g-level.svg');
//     }
//     &.b{
//         background-image: url('../../assets/images/b-level.svg');
//     }
//     &.s{
//         background-image: url('../../assets/images/s-level.svg');
//     }
// }

// .phone{
//     font-family: Raleway;
//     font-weight: 800;
//     font-size: 36px;
//     letter-spacing: 0.1em;
//     font-feature-settings: 'pnum' on, 'lnum' on;
//     a{
//         color: inherit;
//         text-decoration: none;
//     }

//     @media screen and (max-width: 767px) {
//         font-size: 24px;
//         line-height: 28px;
//     }
// }

.make-order-popup .text-1{
    margin-bottom: 70px;
    width: 370px;
    font-family: Raleway;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 27px;
    text-align: center;
    letter-spacing: 0.1em;
    font-feature-settings: 'pnum' on, 'lnum' on;
}


  .close {
    // background-image: url("../../assets/images/menu-close.svg");
    // background-repeat: no-repeat;
    width: 26px;
    height: 26px;
    position: absolute;
    right: 150px;
    top: 60px;
    &:hover {
        cursor: pointer;
        & svg > g{
            opacity: 1;
        }
        // filter: brightness(1);
    }

    @media screen and (max-width:767px){
        right: 25px;
        top: 25px;
    }
  }

</style>
