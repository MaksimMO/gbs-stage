<template>
<div :class="['trainer-item', {'is-scaled':isHovered||isSelected}]"
    @mouseenter="enter"
    @mouseleave="leave"
    v-if="!$root.$data.isMobile"
>
    <div style="position: relative; z-index: 99;">
        <img :src="`../../images/${trainer.link}`" :alt="trainer.firstName" @click="!isOpen ? isShow() : isClosed()">
        <div v-show="isHovered && !isOpen || isSelected" class="info">
            <img v-if="!isSelected" src="../../assets/images/info.svg" alt="info" class="info-show" @click="isShow">
            <img v-if="isSelected" src="../../assets/images/close.svg" alt="info" class="info-close" @click="isClosed">
        </div>
        <p class="firstName">{{$i18n.t(`trainers.${trainer.id}.firstName`)}}</p>
        <p class="lastName">{{$i18n.t(`trainers.${trainer.id}.lastName`)}}</p>
    </div>
    <div :class="['description', {'description-background': isSelected}]">
        <p class="descriptionTitle">{{$i18n.t(`trainers.${trainer.id}.direction`)}}</p>
        <p v-show="isSelected">{{$i18n.t(`trainers.${trainer.id}.description`)}}</p>
    </div>
</div>
<div v-else :class="['trainer-item-mobile', {'is-scaled': isSelected}]">
    <div style="position: relative; z-index: 99;">
        <img :src="`../../images/${trainer.link}`" :alt="trainer.firstName" @click="!isOpen ? isShow() : isClosed()">
        <div v-show="isHovered && !isOpen || isSelected" class="info">
            <img v-if="!isSelected" src="../../assets/images/info.svg" alt="info" class="info-show" @click="isShow">
            <img v-if="isSelected" src="../../assets/images/close.svg" alt="info" class="info-close" @click="isClosed">
        </div>
        <p class="firstName">{{$i18n.t(`trainers.${trainer.id}.firstName`)}}</p>
        <p class="lastName">{{$i18n.t(`trainers.${trainer.id}.lastName`)}}</p>
    </div>
    <div :class="['description', {'description-background': isSelected}]">
        <p class="descriptionTitle">{{$i18n.t(`trainers.${trainer.id}.direction`)}}</p>
        <p v-show="isSelected">{{$i18n.t(`trainers.${trainer.id}.description`)}}</p>
    </div>
</div>
</template>

<script>
export default {
    props: ['trainer', 'isOpen'],
    data(){
        return{
            isSelected: false,
            isHovered:false,
        }
    },

    methods:{
    enter(){
        if(!this.isOpen) {
            this.isHovered = true;
        }
    },
    leave(){
        if(!this.isOpen) {
            this.isHovered = false;
        }
    },
    isShow(){
        this.$emit('isShow', true);
        this.isSelected = true;
    },
    isClosed(){
        if(this.isOpen && this.isSelected) {
            this.$emit('isClosed', false);
            this.isSelected = false;
        }
    }
}
}
</script>

<style lang="scss" scoped>
.trainer-item{
    transition: all .2s ease-in;
    position: relative;
    margin-bottom: 126px;

    &:nth-child(4n+4){
        transform-origin: right;
    }

    &:nth-child(4n+1){
        transform-origin: left;
    }

    &.is-scaled{
         transform:scale(1.3);
         z-index: 101;
    }
    .info{
        transform: none;
        position: absolute;
        display: block;
        width: 2.43vw;
        right: 10px;
        top: 10px;
        & .info-show {
            width: 100%;
            height: 100%;
            cursor: pointer;
            // background: #ACACAC;
            border-radius: 50%;
            // &:hover {
            // background: #916C58;
            // }
        }
        & .info-close {
            width: 100%;
            height: 100%;
            cursor: pointer;
            // background: #ACACAC;
            border-radius: 50%;
            // &:hover {
            // background: #916C58;
            // }
        }
    }

}

img{
    display:block;
    cursor: pointer;
    width:100%;
}

.firstName{
    display: flex;
    flex-direction: row;
    justify-content: left;
    align-items: left;
    padding: 1px 10px;
    font-family: Raleway;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 14px;
    color: #FFFFFF;
    position: absolute;
    width: 91px;
    height: 16px;
    left: 30px;
    bottom: -4px;
    background: #916C58;
}
.lastName{
    display: flex;
    flex-direction: row;
    justify-content: left;
    align-items: left;
    padding: 1px 10px;
    font-family: Raleway;
    font-style: normal;
    font-weight: 600;
    font-size: 14px;
    line-height: 14px;
    letter-spacing: 0.05em;
    color: #FFFFFF;
    position: absolute;
    width: 91px;
    height: 16px;
    left: 30px;
    bottom: -25px;
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
    display: block;
    position: absolute;
    overflow-y: auto;
    max-height: 200px;
    left: 0;
    right: 0;
    padding: 0.94rem 1.88rem;
    font-family: Raleway;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 28px;
    color: #000000;

    & p {
        margin: 0;
        // max-height: 95px;
    }

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

.description-background {
    background-color: #ffffff;
}

@media screen and (max-width: 1023px) and (min-width: 768px) {
    .trainer-item{
        margin-bottom: 78px;

        &:nth-child(4n+4){
            transform-origin: center;
        }

        &:nth-child(4n+1){
            transform-origin: center;
        }

        &.is-scaled{
            transform:scale(1.2);
        }
    }
    .firstName{
        font-size: 10px;
        width: 75.17px;
        height: 13.88px;
    }
    .lastName{
        font-size: 10px;
        width: 75.17px;
        height: 13.88px;
    }
    .descriptionTitle{
        font-size: 12px;
        line-height: 16px;
    }
    .description{
        font-size: 12px;
        line-height: 22px;
        max-height: 161px;
    }
}




.trainer-item-mobile {
    transition: all .2s ease-in;
    position: relative;
    margin-bottom: 60px;

    &.is-scaled{
         transform:scale(1.1);
         z-index: 101;
    }
    .info{
        transform: none;
        position: absolute;
        display: block;
        width: 35px;
        right: 10px;
        top: 10px;
        & .info-show {
            width: 100%;
            height: 100%;
            cursor: pointer;
            // background: #ACACAC;
            border-radius: 50%;
            // &:hover {
            // background: #916C58;
            // }
        }
        & .info-close {
            width: 100%;
            height: 100%;
            cursor: pointer;
            // background: #ACACAC;
            border-radius: 50%;
            // &:hover {
            // background: #916C58;
            // }
        }
    }
}

</style>
