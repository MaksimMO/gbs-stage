<template>
<div class="schedule-g-view">
    <div class="title">Розклад</div>
    <div class="main-container">
            <div class="header-item" v-for="(item, index) in scheduleData.ma" :key="index">
                {{item.day}}
            </div>

            <!-- <ScheduleItem :timeStart="" /> -->
        <template v-for="(item, index) in timeIntervals" :key="index" >
            <div class="time-interval-header">{{item}}</div>


        </template>
    </div>
  </div>
</template>

<script>
import ScheduleItem from '../components/ScheduleItem.vue';
import scheduleMock from './scheduleMock.json';


const timeIntervals = [7,8,9,10,11,12,13,14,15,16,17,18,19,20]

export default {
    data(){
        return {

            scheduleData: scheduleMock.days.map((day)=> day.workouts. ),
            timeIntervals
        }
    },
    components:{
        ScheduleItem
    }

}

</script>

<style scoped>
    .title {
        padding: 0 7.81vw;
        margin-bottom: 60px;
    }
</style>