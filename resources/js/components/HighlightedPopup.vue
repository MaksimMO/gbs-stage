<template>


 <transition name="fade" appear  @after-leave="$emit('closePopup')" >

<div class="highlighted-popup-overlay"   v-if="isOpened" >


    <div class="highlighted-popup">
        <svg width="26" height="26" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"
        class="close"
        @click="isOpened=false"
        >
            <g >
                <rect y="26.8701" width="38" height="1" transform="rotate(-45 0 26.8701)" fill="black"/>
                <rect width="38" height="1" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 27.5771 26.8701)" fill="black"/>
            </g>
        </svg>

        <div class="title">Зацікавились?</div>
        <div class="description">Заповніть заявку та отримайте БЕЗКОШТОВНЕ персональне тренування при купівлі абонементу!</div>

        <FeedBackForm @submitSuccess="submitSuccess" :level="$root.$data.area" class="invert" :successPopup="false" />

    </div>

</div>

 </transition>
</template>

<script>
import FeedBackForm from './Form.vue'


let preloadedAssets = {
        // g: [require('../../assets/feedBackFormView/background-g.png').default],
    }

export default {
    data(){
        return{
            isOpened:true
        }
    },
    components:{
        FeedBackForm,
    },
    mounted(){
    },
    methods:{
        submitSuccess(){
            this.isOpened=false;
        }

    },

}
</script>

<style lang="scss" scoped>


.highlighted-popup-overlay{
    z-index: 150;
    position: fixed;
    height: 100%;
    width: 100%;
    top: 0;
    background-color: rgba(0,0,0,0.3);

    // transition: all 0.5s ease;
    backdrop-filter: blur(10px);
}


.highlighted-popup{
    font-family: Raleway;
    color: #000;
    width:502px;
    background-color: #fff;
    padding: 60px ;
    box-sizing:border-box;
    position: fixed;
    top:50%;
    left:50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    transform: translate(-50%, -50%);


    @media screen and (max-width: 1023px) and (min-width: 768px) {

    }

    @media screen and (max-width: 767px){
        padding: 30px ;
        height: 90vh;
        width: 90vw;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

}


// .fade-enter-from .highlighted-popup, .fade-leave-to .highlighted-popup{
//     // transform: translate(-50%, -50%) scale(1.3);
//     filter: blur(0);
//     opacity: 0;
// }



.fade-enter-active,
.fade-leave-active {
    transition: all 0.5s ease-in-out;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
  backdrop-filter: blur(0px);
}


.highlighted-popup .title{
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 28px;
    text-align: center;
    letter-spacing: 0.05em;
    margin-bottom: 15px;
}

.highlighted-popup .description{
    font-family: Raleway;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
    letter-spacing: 0.05em;
    margin-bottom: 60px;
}



.highlighted-popup::before, .highlighted-popup::after{
    display: block;
    content: '';
    width:70px;
    height:60px;
    position: absolute;
    background: url('../../assets/images/popup-corner.svg') no-repeat;
    background-size: cover;

    @media screen and (max-width: 767px){
        width: 35px;
        height: 30px
    }
}


.highlighted-popup::before{
    top: 0;
    left: 10px;
    transform: translateY(-50%);
}

.highlighted-popup::after{
    bottom: 0;
    right: 10px;
    transform: translateY(50%);
}


  .close {
    // background-image: url("../../assets/images/menu-close.svg");
    // background-repeat: no-repeat;
    // width: 26px;
    // height: 26px;
    position: absolute;
    right: 15px;
    top: 15px;
    cursor: pointer;
    opacity:.5;
    transition: opacity 0.2s ease-in;
    &:hover {
            opacity: 1;
        }
        // filter: brightness(1);

    // @media screen and (max-width:767px){
    //     right: 25px;
    //     top: 25px;
    // }
  }

/* @media screen and (max-width: 1280px) {

} */

// @media screen and (max-width: 767px) {
//     .modal{
//         width:289px;
//         padding: 40px 20px;


//         &::before, &::after{
//             width:35px;
//             height:30px;
//         }

//         &::before{
//             left: 5px;
//         }

//         &::after{
//             right: 5px;
//         }

//         .title{
//             font-size: 18px;
//             line-height: 21px;
//         }

//         .description{
//             font-size: 14px;
//             line-height: 16px;
//             letter-spacing: 0.05em;
//         }

//          button{
//             margin-top:30px;
//         }

//     }
// }

</style>
