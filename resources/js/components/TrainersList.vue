<template>
    <div :class="{'trainers-container': !$root.$data.isMobile, 'trainers-container-mobile': $root.$data.isMobile}">
        <TrainerItem
            v-for="(trainer)  in trainers"
            :key="trainer.id"
            :trainer="trainer"
            :isSlider="false"
            @selectTrainer="selectTrainer"
            />
    </div>
</template>

<script>
import TrainerItem from '../components/TrainerItem.vue'
export default {
    props: ['trainers'],
    methods:{
        selectTrainer(trainer){
            this.trainers.filter(item => item.isSelected).forEach(item => {
                item.isSelected=false;
            });

            trainer.isSelected=true;
        }
    },
    components:{
        TrainerItem
    },
}
</script>

<style lang="scss">
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
        grid-template-columns: repeat(auto-fill, minmax(240px, 2fr));
        grid-column-gap: 15px;
        grid-row-gap: 30px;
        display: grid;
        padding: 0 15px;

        @media screen and (max-width: 767px) {
             padding: 0 40px;
        }


    }

</style>
