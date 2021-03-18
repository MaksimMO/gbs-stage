<template>
<div :class="['modal-overlay', {'is-opened':isOpened}]">
        <div class="modal">
            <div class="title">Дякуємо,</div>
            <div class="description">Ваша заявка успішно надіслана</div>
            <button @click="action"><span>на головну сторінку</span></button>
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
    methods:{
        action(){
            this.$router.push({ name: 'home'});
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

<style scoped>


.modal-overlay{
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
    width:502px;
    background-color: #fff;
    padding-top: 60px ;
    padding-bottom: 60px ;
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

.modal:before, .modal::after{
    display: block;
    content: '';
    width:70px;
    height:60px;
    position: absolute;
    background: url('../../assets/popup-corner.svg') no-repeat;
}


.modal:before{
    top: 0;
    left: 10px;
    transform: translateY(-50%);
}

.modal::after{
    bottom: 0;
    right: 10px;
    transform: translateY(50%);
}
</style>