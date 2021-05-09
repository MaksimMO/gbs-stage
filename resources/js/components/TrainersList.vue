<template>
    <div class="trainers-container">
        <TrainerItem
            v-for="(trainer, idx)  in trainers"
            :key="idx"
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
    props: ['trainers', 'idxGroup', 'isOpen'],
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
      margin-bottom: 96px;
    }

</style>
