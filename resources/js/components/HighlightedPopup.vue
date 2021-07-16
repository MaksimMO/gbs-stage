<template>


<div :class="['highlighted-popup-overlay', {'is-opened':isOpened}]">

    <div class="highlighted-popup">
        <svg width="26" height="26" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"
        class="close"
        @click="close"
        >
            <g >
                <rect y="26.8701" width="38" height="1" transform="rotate(-45 0 26.8701)" fill="black"/>
                <rect width="38" height="1" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 27.5771 26.8701)" fill="black"/>
            </g>
        </svg>

        <div class="title">Зацікавились?</div>
        <div class="description">Заповніть заявку та отримайте БЕЗКОШТОВНЕ персональне тренування при купівлі абонементу!</div>

        <FeedBackForm @submitSuccess="submitSuccess" :level="$root.$data.area" class="invert" :successPopup="false" />

        <popup-success v-if="isSuccessPopupOpen"/>
    </div>

</div>
</template>

<script>
import FeedBackForm from './Form.vue'
import popupSuccess from './PopupSuccess.vue'

let preloadedAssets = {
        // g: [require('../../assets/feedBackFormView/background-g.png').default],
    }

export default {
    data(){
        return{
            isSuccessPopupOpen:false,
            isOpened:false
        }
    },
    // props:['closePopup'],
    components:{
        FeedBackForm,
        popupSuccess
    },
    mounted(){
        setTimeout(()=>{
            this.isOpened=true;
        }, 500);

    },
    methods:{
        close(){
            this.isOpened=false;
            setTimeout(()=>{
                    this.$emit('closePopup')
            }, 500)
        },
        submitSuccess(){
            this.close();
            // this.modalOpen=true;
            // setTimeout(()=>{
            //         this.$emit('closePopup')
            // }, 2500)
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
    transition: backdrop-filter .5s ease-in-out,
        -webkit-backdrop-filter .5s ease-in-out,
        background-color .5s ease-in-out;
}

.highlighted-popup-overlay.is-opened{
    background-color: rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
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
    /* top:60%; */
    left:50%;
    transform: translate(-50%, -50%) scale(1.3);
    display: flex;
    flex-direction: column;
    align-items: center;
    opacity: 0;
    transition: all .5s ease-in-out;
    filter: blur(10px);

    // @media screen and (max-width: 1023px) and (min-width: 768px) {

    // }

    @media screen and (max-width: 767px){
        padding: 30px ;
        height: 90vh;
        width: 90vw;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }

}


.highlighted-popup-overlay.is-opened  .highlighted-popup{
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
    /* top:50%; */
    filter: unset;
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
