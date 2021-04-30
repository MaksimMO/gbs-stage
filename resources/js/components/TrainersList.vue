<template>
<div class="trainers-container">
    <TrainerItem :urlFoto="require('../../assets/images/trainers/valentin.jpg').default" :name="'Валентин'" :lastName="'Игнаткин'" :description="'бла блабла'" />
    <TrainerItem :urlFoto="require('../../assets/images/trainers/vitaliy.jpg').default" :name="'Віталій'" :lastName="'Игнаткин'" :description="'бла блабла'" />
    <TrainerItem :urlFoto="require('../../assets/images/trainers/volodimir.jpg').default" :name="'Валодимир'" :lastName="'Игнаткин'" :description="'бла блабла'" />
    <TrainerItem :urlFoto="require('../../assets/images/trainers/yuliya.jpg').default" :name="'Юля'" :lastName="'Игнаткин'" :description="'бла блабла'" />
</div>
</template>

<script>
import TrainerItem from '../components/TrainerItem.vue'
export default {
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
    }

</style>