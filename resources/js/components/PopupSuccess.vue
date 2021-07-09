<template>
<div :class="['modal-overlay', {'is-opened':isOpened}]">
        <div class="modal">
            <div class="title">Дякуємо,</div>
            <div class="description">Ваша заявка успішно надіслана</div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            isOpened:false
        }
    },
    mounted(){


        setTimeout(()=>{
            this.isOpened=true;
        },20)

        console.log('onMounted!');
    },
    unmounted(){
        console.log('onUnmounted!');
        this.isOpened=false;
    }
}
</script>

<style scoped lang="scss">


.modal-overlay{
    z-index: 150;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    transition: backdrop-filter .5s ease-in-out,
        -webkit-backdrop-filter .5s ease-in-out,
        background-color .5s ease-in-out;
}

.modal-overlay.is-opened{
    background-color: rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}



.modal{
    font-family: Raleway;
    color: #000;
    width:502px;
    background-color: #fff;
    padding-top: 60px ;
    padding-bottom: 60px ;
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

}


.modal-overlay.is-opened  .modal{
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
    /* top:50%; */
    filter: unset;
}


.modal .title{
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 28px;
    text-align: center;
    letter-spacing: 0.05em;
}

.modal .description{
    font-family: Raleway;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
    letter-spacing: 0.05em;
}

.modal button{
    margin-top:40px;
}

.modal::before, .modal::after{
    display: block;
    content: '';
    width:70px;
    height:60px;
    position: absolute;
    background: url('../../assets/images/popup-corner.svg') no-repeat;
    background-size: cover;
}


.modal::before{
    top: 0;
    left: 10px;
    transform: translateY(-50%);
}

.modal::after{
    bottom: 0;
    right: 10px;
    transform: translateY(50%);
}


/* @media screen and (max-width: 1280px) {

} */

@media screen and (max-width: 767px) {
    .modal{
        width:289px;
        padding: 40px 20px;


        &::before, &::after{
            width:35px;
            height:30px;
        }

        &::before{
            left: 5px;
        }

        &::after{
            right: 5px;
        }

        .title{
            font-size: 18px;
            line-height: 21px;
        }

        .description{
            font-size: 14px;
            line-height: 16px;
            letter-spacing: 0.05em;
        }

         button{
            margin-top:30px;
        }

    }
}

</style>