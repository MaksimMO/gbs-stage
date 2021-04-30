<template>
<div :class="['trainer-item', {'is-scaled':isHovered||isSelected}]"
    @mouseenter="enter"
    @mouseleave="leave"
>
    <img :src="`../../images/${trainer.link}`" :alt="trainer.firstName" @click="isSelected=!isSelected">
    <div v-show="isHovered" class="info" @click="isSelected=!isSelected">
        <img v-if="!isSelected" src="../../assets/images/info.png" alt="info" style="width: 100%; height: 100%;">
        <img v-if="isSelected" src="../../assets/images/close.png" alt="info" style="width: 100%; height: 100%;">
    </div>
    <p class="firstName">{{trainer.firstName}}</p>
    <p class="lastName">{{trainer.lastName}}</p>
    <div class="description">
        <p class="descriptionTitle">Напрямок діяльності</p>
        <p v-show="isSelected">{{trainer.description}}</p>
    </div>
</div>
</template>

<script>
export default {
    props: ['trainer'],
    data(){
        return{
            isSelected:false,
            isHovered:false,
        }
    },

    methods:{
    enter(){
        this.isHovered = true;

    },
    leave(){
        this.isHovered = false;
    }
}
}
</script>

<style lang="scss">
.trainer-item{
    height: 328px;
    width: 328px;
    transition: all .2s ease-in;
    position: relative;

    &:last-child{
        transform-origin:right;
    }


    &:first-child{
        transform-origin:left;
    }

    &.is-scaled{
         transform:scale(1.3);
         z-index: 101;
    }

    img{
        display:block;
        width:100%;
        height: 100%;
    }
}
.info{
    transform: none;
    position: absolute;
    display: block;
    width: 46px;
    height: 46px;
    right: 10px;
    top: 10px;
}
.firstName{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 1px 10px;
    z-index: 100;
    position: absolute;
    width: 91px;
    height: 16px;
    left: 30px;
    top: 278px;
    background: #916C58;
}
.lastName{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 1px 10px;
    z-index: 100;
    position: absolute;
    width: 91px;
    height: 16px;
    left: 30px;
    top: 302px;
    background: #916C58;
}
.descriptionTitle{
    font-family: Raleway;
    font-style: normal;
    font-weight: 800;
    font-size: 14px;
    line-height: 24px;
    letter-spacing: 0.05em;
    margin: 0;
    color: #000000;
}
.description{
    position: absolute;
    overflow-y: auto;
    width: 268px;
    max-height: 200px;
    left: 0;
    padding: 15px 30px;
    top: 328px;
    font-family: Raleway;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 28px;
    color: #000000;
    background-color: #ffffff;

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

</style>
