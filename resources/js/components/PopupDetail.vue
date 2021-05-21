<template>
<div class="modal-overlay">
        <div class="modal">
            <div class="close" @click="$emit('closePopup')" ></div>
            <img :src="simulatorDetail.link" :alt="simulatorDetail.name">
            <div class="description">
                <p class="title">{{simulatorDetail.name}}</p>
                <p class="detail">{{simulatorDetail.description}}</p>
            </div>
        </div>
</div>
</template>

<script>
export default {
    props: ['simulatorDetail'],
    mounted() {
        document.body.style.overflow = 'hidden';
    },
    unmounted(){
        document.body.style.overflow = 'auto';
    }
}
</script>

<style scoped lang="scss">


.modal-overlay{
    position: fixed;
    height: 100%;
    width: 100%;
    top: 0;
    // transition: backdrop-filter .5s ease-in-out,
    //     -webkit-backdrop-filter .5s ease-in-out,
    //     background-color .5s ease-in-out;
    background-color: rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.modal{
    font-family: Raleway;
    width: 756px;
    height: 368px;
    background-color: #fff;
    padding: 20px;
    box-sizing: border-box;
    position: fixed;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%) scale(1.3);
    display: flex;
    opacity: 0;
    // transition: all .5s ease-in-out;
    & img {
        width: 328px;
        height: 328px;
    }
    & .description {
        width: 365px;
        height: 100%;
        max-height: 328px;
        margin-left: 23px;
        overflow: hidden;
        & .title {
            font-family: Oswald;
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #916C58;
            margin: 0;
            margin-bottom: 10px;
        }
        & .detail {
            display: block;
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
            margin: 0;
            max-height: 212px;
            height: auto;
            overflow-y: auto;
            &::-webkit-scrollbar{
                width: 10px;
            }
            &::-webkit-scrollbar-track{
                margin-top: 15px;
                margin-bottom: -100px;
            }
            &::-webkit-scrollbar-thumb {
                background: url('../../assets/images/scroll.svg') no-repeat;
            }
        }
    }

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

.modal-overlay  .modal{
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
    filter: unset;
}

</style>
