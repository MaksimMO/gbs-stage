<template>
  <div class="schedule-item">
      <div class="time-range">{{timeStart}} - {{timeEnd}}, {{duration}}хв.</div>
      <div class="title-workout">{{titleWorkout}}</div>
      <div class="trainer-name">тренер: {{trainerName}}</div>
  </div>
</template>

<script>
export default {
props:['timeStart', 'timeEnd', 'duration', 'titleWorkout', 'trainerName']


}

</script>


<style>

</style>