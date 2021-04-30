<template>
    <div class="trainers-container">
        <TrainerItem v-for="(trainer, idx)  in trainers.slice(idxGroup * 4, (idxGroup + 1) * 4)" :key="idx" :trainer="trainer"/>
    </div>
</template>

<script>
import TrainerItem from '../components/TrainerItem.vue'
export default {
    props: ['trainers', 'idxGroup'],
    components:{
        TrainerItem
    }


}
</script>

<style>
    .trainers-container{
      height: 328px;
      overflow: visible;
      grid-template-columns: repeat(4, 328px);
      grid-column-gap: 15px;
      display: grid;
      margin-bottom: 96px;
    }

</style>
