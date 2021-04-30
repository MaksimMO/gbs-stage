<template>
<div :class="['trainer-item', {'is-scaled':isHovered||isSelected}]"
    @mouseenter="enter"
    @mouseleave="leave"
>

    <img :src="urlFoto" @click="isSelected=!isSelected">
    <div class="name">
        {{name}}
    </div>
    <div class="lastName">
        {{lastName}}
    </div>
    <div v-if="isSelected" class="description">
        {{description}}
    </div>

</div>
</template>

<script>
export default {
    data(){
        return{
            isSelected:false,
            isHovered:false
        }
    },
    props:['urlFoto', 'name', 'lastName', 'description'],

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


    &:last-child{
        transform-origin:right;
    }


    &:first-child{
        transform-origin:left;
    }

    &.is-scaled{
         transform:scale(1.3);
    }

    img{
        display:block;
        width:100%;
    }

    .name, .lastName{
        display: inline-block;
        background: #916C58;
    }
}
</style>