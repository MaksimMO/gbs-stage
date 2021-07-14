<template>
<div class="modal-overlay" @click="$emit('closePopup')">
        <div class="modal">
            <div class="close" @click="$emit('closePopup')" ></div>
            <slot></slot>
        </div>
</div>
</template>

<script>
export default {
    mounted() {
        document.body.classList.add('overfllow-hidden');
        document.getElementById('gbslevel-app').style.filter = 'blur(10px)';
    },
    unmounted(){
        document.body.classList.remove('overfllow-hidden');
        document.getElementById('gbslevel-app').style.filter = 'unset';
    }
}
</script>

<style scoped lang="scss">


.modal-overlay{
    position: fixed;
    height: 100%;
    width: 100%;
    top: 0;
    overflow: auto;
    z-index: 260;
    background-color: rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    display: grid;
    justify-content: center;
    align-items: center;
    @media screen and (max-width: 767px){
        align-items: stretch;
    }

}

.modal{
    font-family: Raleway;
    width: 756px;
    // max-height: 981px;
    background-color: #fff;
    padding: 20px;
    box-sizing: border-box;
    // position: fixed;
    // top: 50%;
    // left:50%;
    // transform: translate(-50%, -50%) scale(1.3);
    opacity: 0;
    position: relative;
}
.close {
    background-image: url("../../assets/images/menu-close.svg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 100%;
    width: 26px;
    height: 26px;
    position: absolute;
    right: 10px;
    top: 10px;
    filter: brightness(0);
    &:hover {
        cursor: pointer;
    }
  }

@media screen and (max-width: 1023px) and (min-width: 768px) {
    .modal{
        width: 668px;
    }
}

@media screen and (max-width: 767px){
    .modal{
        width: 100%;
        // overflow: hidden;
        // top: 0;
        // left: 0;
        // transform: unset;

    }
    .modal-overlay  .modal{
        // transform: unset !important;
    }
}

.modal-overlay  .modal{
    opacity: 1;
    // transform: translate(-50%, -50%) scale(1);
    // filter: unset;
}

</style>
