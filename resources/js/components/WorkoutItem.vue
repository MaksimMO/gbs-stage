<template>
    <div class="schedule-day-note">
        <span class="time">{{ timeStart }} - {{ timeEnd }}, {{ duration }} хв</span>
        <span class="type">{{ type }}</span>
        <span class="trainer">тренер: {{ trainer }}</span>
    </div>
</template>

<script>
export default {
    name: "WorkoutItem",
    props: ['timeStart', 'type', 'trainer', 'timeEnd', 'duration']
}
</script>

<style scoped lang="scss">
$color-gold: #916C58;

.schedule-day-note {
    display: grid;
    grid-template-rows: repeat(3, 30px);
    //grid-template-rows: 25px 25px 25px;
    align-items: center;
    border-bottom: 1px solid #fff;

    &:last-child{
        border-bottom: none;
    }

    .time {
        font-size: 14px;
        font-weight: bold;
        align-self: end;
    }
    .type {
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
        color: $color-gold;
    }
    .trainer {
        font-size: 12px;
        align-self: start;
        //font-weight: bold;
    }
}
</style>
