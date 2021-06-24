<template>
    <div :class="{'trainers-container': !$root.$data.isMobile, 'trainers-container-mobile': $root.$data.isMobile}">
        <TrainerItem
            v-for="(trainer)  in trainers"
            :key="trainer.id"
            :trainer="trainer"
            :isOpen="isOpen"
            @isShow="(e) => change(e)"
            @isClosed="(e) => change(e)"/>
    </div>
</template>

<script>
import TrainerItem from '../components/TrainerItem.vue'
export default {
    emits: ['isClosed', 'isShow'],
    props: ['trainers', 'isOpen'],
    components:{
        TrainerItem
    },
    methods: {
        change(e) {
            this.$emit('changeOpen', e);
        }
    },


}
</script>

<style>
    .trainers-container{
      overflow: visible;
      grid-template-columns: repeat(4, 1fr);
      grid-column-gap: 15px;
      display: grid;
      padding: 0 42px;
    }
    @media screen and (max-width: 1023px) and (min-width: 768px) {
        .trainers-container{
            grid-template-columns: repeat(3, 1fr);
        }
    }
    @media screen and (max-width: 767px) {
        .trainers-container{
            grid-template-columns: repeat(auto-fill, minmax(240px, 2fr));
            justify-content: center;
            padding: 0 40px;
        }
    }
    .trainers-container-mobile{
        overflow: visible;
        grid-template-columns: repeat(auto-fill, minmax(300px, 2fr));
        grid-column-gap: 15px;
        grid-row-gap: 30px;
        display: grid;
        padding: 0 40px;
    }

</style>
