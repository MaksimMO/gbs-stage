<template>
<div :class="['trainer-item', {'is-scaled': trainer.isSelected}]"
    @mouseenter="trainer.isSelected = true"
    @mouseleave="trainer.isSelected = false"
    v-if="!$root.$data.isMobile"
>
    <div style="position: relative; z-index: 99;">
        <img v-if="!trainer.isSelected" :src="`../../images/${trainer.link}`" :alt="trainer.firstName">
        <Video v-else :linkVideo="trainer.linkVideo" :linkImage="trainer.link"/>
        <p class="firstName">{{$i18n.t(`trainers.${trainer.id}.firstName`)}}</p>
        <p class="lastName">{{$i18n.t(`trainers.${trainer.id}.lastName`)}}</p>
    </div>
    <div :class="['description', {'description-background': trainer.isSelected}]">
        <p class="descriptionTitle">{{$i18n.t(`trainers.${trainer.id}.direction`)}}</p>
        <p v-show="trainer.isSelected">{{$i18n.t(`trainers.${trainer.id}.description`)}}</p>
    </div>
</div>
<div v-else :class="['trainer-item-mobile', {'is-scaled': trainer.isSelected && !isSlider}]">
    <div style="position: relative; z-index: 99;">
        <img v-if="!trainer.isSelected" :src="`../../images/${trainer.link}`" :alt="trainer.firstName" @click="trainer.isSelected ?  сlose() : show()">
        <VideoMobile v-else :isSelected="trainer.isSelected" :linkVideo="trainer.linkVideo" :linkImage="trainer.link" @click="trainer.isSelected ? сlose() : show() "/>
        <p class="firstName">{{$i18n.t(`trainers.${trainer.id}.firstName`)}}</p>
        <p class="lastName">{{$i18n.t(`trainers.${trainer.id}.lastName`)}}</p>
    </div>
    <div :class="['description', {'description-background': trainer.isSelected}]">
        <p class="descriptionTitle">{{$i18n.t(`trainers.${trainer.id}.direction`)}}</p>
        <p v-show="trainer.isSelected && !isSlider">{{$i18n.t(`trainers.${trainer.id}.description`)}}</p>
    </div>
</div>
</template>

<script>
import Video from '../components/Video.vue';
import VideoMobile from '../components/VideoMobile.vue';
export default {
    props: ['trainer', 'isSlider'],
    methods:{
        show(){
            if( !this.isSlider) {
                console.log('show')
                this.$emit('selectTrainer', this.trainer);
            }
        },
        сlose(){
            if(this.trainer.isSelected) {
                console.log('сlose')
                this.trainer.isSelected = false;
            }

        },
    },
    components: {
        Video,
        VideoMobile
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
         
         .description{
            border-bottom: 2em solid #F4F0EE;
         }


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

Video{
    display:block;
    cursor: pointer;
    width: 100%;
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
    background-color: #F4F0EE;
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
        bottom: 4px;
        font-size: 10px;
        width: 75.17px;
        height: 13.88px;
    }
    .lastName{
        bottom: -17px;
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

@media screen and (max-width: 767px) {
    .trainer-item{
        margin-bottom: 60px;

        &:nth-child(4n+4){
            transform-origin: center;
        }

        &:nth-child(4n+1){
            transform-origin: center;
        }

        &.is-scaled{
            transform:scale(1.1);
        }
    }
    .firstName{
        bottom: 4px;
        font-size: 10px;
        width: 75.17px;
        height: 13.88px;
    }
    .lastName{
        bottom: -15px;
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
