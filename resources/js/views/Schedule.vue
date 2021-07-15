<template>
    <Header class="header-invert"/>
    <Breadcrumb/>
    <div class="schedule-page">
        <section class="title">
            <h1>Розклад</h1>
        </section>
        <section class="schedule-section">
            <div class="schedule-wrapper schedule-wrapper-mobile">
                <div class="schedule-table schedule-table-mobile">
                    <div class="schedule-day" v-for="oneDay in scheduleHeaderDays">
                        <div class="schedule-table-head calendar-days">
                            <div class="schedule-table-row">
                                <div v-bind:id="('mobile-day-'+ oneDay.day)" @click="actionOpenDay(oneDay.day)"
                                     class="schedule-table-column" v-bind:class="{'is-open':isOpenDay(oneDay.day)}">
                                    {{ oneDay.title }} <span
                                    class="day-date">{{ oneDay.date }}р.</span>

                                    <span class="opened-icon"></span>
                                    <span class="open-icon"></span>
                                </div>
                            </div>
                        </div>
                        <div class="schedule-table-body" v-bind:class="{'is-open':isOpenDay(oneDay.day)}">
                            <div class="schedule-table-row" v-for="hourNote in dayNotes(oneDay)">
                                <div class="schedule-table-column">
                                    <div class="schedule-day-time">
                                        <span class="time">{{ hourNote.title }}</span>
                                    </div>
                                </div>
                                <div class="schedule-table-column">
                                    <workout-item v-for="note in hourNote.notes" :timeStart="note.timeStart"
                                                  :timeEnd="note.timeEnd" :type="note.type"
                                                  :trainer="note.trainer" :duration="note.duration"></workout-item>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="schedule-wrapper desktop">
                <div class="schedule-table schedule-table-desktop">
                    <div class="schedule-table-head calendar-days">
                        <div class="schedule-table-row">
                            <div class="schedule-table-column">Час</div>
                            <div class="schedule-table-column" v-for="oneDay in scheduleHeaderDays">{{ oneDay.title }}
                                <span
                                    class="day-date">{{ oneDay.date }}р.</span></div>
                        </div>
                    </div>
                    <div class="schedule-table-body">
                        <div class="schedule-table-row" v-for="hourNote in hourNotes">
                            <div class="schedule-table-column">
                                <div class="schedule-day-time">
                                    <span class="time">{{ hourNote.title }}</span>
                                </div>
                            </div>
                            <div class="schedule-table-column" v-for="hourNotesDay in hourNote.days">
                                <workout-item v-for="workout in hourNotesDay" :timeStart="workout.timeStart"
                                              :timeEnd="workout.timeEnd" :type="workout.type"
                                              :trainer="workout.trainer" :duration="workout.duration"></workout-item>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <Footer/>
</template>

<script>
import Header from '../components/Header.vue';
import Breadcrumb from '../components/Breadcrumb.vue';
import Footer from '../components/Footer.vue';
import WorkoutItem from '../components/WorkoutItem.vue';
import {isMobile}  from 'mobile-device-detect'

export default {
    data() {
        return {
            openedDay:null,
            jsonStr: '[{"day":"Monday","date":"05.07.21","workouts":[{"type":"Yoga","trainer":"Арсьонова  І. В.","timeStart":"07:00","timeEnd":"08:00"},{"type":"Cycle","trainer":"Подзігун  Т. І.","timeStart":"08:00","timeEnd":"09:00"},{"type":"Pilates","trainer":"Дементьєва О. О.","timeStart":"08:00","timeEnd":"09:00"}]},{"day":"Tuesday","date":"06.07.21","workouts":[{"type":"Fighting","trainer":"Teacher 2","timeStart":"08:00","timeEnd":"10:00"},{"type":"Fighting","trainer":"Teacher 4","timeStart":"10:00","timeEnd":"12:00"},{"type":"Fighting","trainer":"Teacher 3","timeStart":"12:00","timeEnd":"14:00"}]},{"day":"Wednesday","date":"07.07.21","workouts":[{"type":"Fighting","trainer":"Teacher 5","timeStart":"10:00","timeEnd":"12:00"},{"type":"Fighting","trainer":"Teacher","timeStart":"12:00","timeEnd":"14:00"},{"type":"Fighting","trainer":"Teacher 2","timeStart":"14:00","timeEnd":"16:00"}]},{"day":"Thursday","date":"08.07.21","workouts":[{"type":"Fighting","trainer":"Teacher","timeStart":"10:00","timeEnd":"12:00"},{"type":"Fighting","trainer":"Teacher 2","timeStart":"12:00","timeEnd":"14:00"},{"type":"Fighting","trainer":"Teacher 3","timeStart":"14:00","timeEnd":"16:00"}]},{"day":"Friday","date":"09.07.21","workouts":[{"type":"Fighting","trainer":"Teacher 2","timeStart":"08:00","timeEnd":"09:00"},{"type":"Fighting","trainer":"Teacher","timeStart":"08:00","timeEnd":"09:00"},{"type":"Fighting","trainer":"Teacher 5","timeStart":"09:00","timeEnd":"10:30"},{"type":"Yoga","trainer":"Teacher 3","timeStart":"08:00","timeEnd":"09:00"},{"type":"Pilates","trainer":"Teacher","timeStart":"17:00","timeEnd":"18:00"},{"type":"Yoga","trainer":"Teacher 2","timeStart":"17:00","timeEnd":"18:00"}]},{"day":"Saturday","date":"10.07.21","workouts":[{"type":"Pilates","trainer":"Teacher","timeStart":"10:00","timeEnd":"11:00"}]},{"day":"Sunday","date":"11.07.21","workouts":[{"type":"Fighting","trainer":"Teacher 2","timeStart":"09:00","timeEnd":"10:00"},{"type":"Pilates","trainer":"Teacher 3","timeStart":"09:00","timeEnd":"10:00"},{"type":"Fighting","trainer":"Teacher 5","timeStart":"14:00","timeEnd":"15:00"}]}]',
            scheduleJson: window.vm.$data.scheduleJson,
            hours: [{start: '07', title: '07:00'}, {'start': '08', title: '08:00'}, { 'start': '09', title: '09:00'}, {'start': '10', title: '10:00'}, {'start': '11', title: '11:00'}, { 'start': '12', title: '12:00' }, {'start': '13', title: '13:00'}, {'start': '14', title: '14:00'}, { 'start': '15', title: '15:00' }, { 'start': '16', title: '16:00' }, {'start': '17', title: '17:00'}, {'start': '18', title: '18:00'}, { 'start': '19', title: '19:00' }, {'start': '20', title: '20:00'}],
            postponeTimelId: null,
            isMobile:isMobile
        }
    },
    components: {
        Header,
        Breadcrumb,
        Footer,
        WorkoutItem
    },
    beforeRouteEnter(to, from, next) {
        window.vm.$data.isLoading=true

        fetch("/show-schedule")
            .then(response => response.json())
            .then(data => {
                //todo use global state ala vuex
                window.vm.$data.scheduleJson = data.data
            })
        .finally(()=>{

            if (window.vm.$data.isLoading){
                window.vm.$data.isLoading=false;
            }
            next();
        });

    },
    computed: {
        /**
         * week days and dates
         * @returns {*[]}
         */
        scheduleHeaderDays() {
            let list = [];
            if (this.scheduleJson) {
                for (const listKey in this.scheduleJson) {
                    if (this.scheduleJson[listKey].day !== 'Sunday')
                        list.push({
                            'title': this.$i18n.t(`days.${this.scheduleJson[listKey].day}`),
                            'date': this.scheduleJson[listKey].date,
                            'day': this.scheduleJson[listKey].day
                        })
                }
            }
            return list;
        },
        /**
         * return all notes
         * @returns {*[]}
         */
        hourNotes() {
            let list = [];
            for (const h in this.hours) {
                let hour = this.hours[h];
                let hourNote = {
                    'title': hour.title,
                    'start': hour.start,
                    display: false,
                    days: {'Monday': [], 'Tuesday': [], 'Wednesday': [], 'Thursday': [], 'Friday': [], 'Saturday': []}
                };
                list.push(hourNote)
            }

            if (this.scheduleJson) {
                for (const listKey in this.scheduleJson) {
                    if (this.scheduleJson[listKey].day == 'Sunday') {
                        continue;
                    }
                    // loop days
                    for (const ik in list) {
                        // loop workouts
                        for (const ikW in this.scheduleJson[listKey].workouts) {
                            let startArr = this.scheduleJson[listKey].workouts[ikW].timeStart.split(':');
                            let start = startArr[0];
                            if (list[ik].start == start) {
                                // add workouts for time and day
                                list[ik].days[this.scheduleJson[listKey].day].push(this.scheduleJson[listKey].workouts[ikW]);
                            }
                        }
                    }
                }
            }

            // check if we have any workouts for start time
            for (const i in list) {
                for (const iKey in list[i].days) {
                    let notes = list[i].days[iKey];
                    if(notes.length > 0){
                        list[i].display = true;
                    }
                }
            }

            // Return only hours with workouts
            let result = [];
            for (const i in list) {
                if(list[i].display)result.push(list[i])
            }
            return result;
        },
    },
    methods:{
        goto(idEl){
            var element = document.getElementById(idEl);
            // element.scrollIntoView({behavior: 'smooth'});
            var top = element.offsetTop - 100;
            window.scrollTo(0, top);
        },
        actionOpenDay(day)
        {
            this.goto('mobile-day-'+day);
            if(this.openedDay == day) this.openedDay = null;
            else this.openedDay = day;
        },
        isOpenDay(day){
            if(this.openedDay == day) return true;
            return false;
        },
        dayNotes(oneDay){
            let result = [];
            for (const resultKey in this.hourNotes) {
                let notes = this.hourNotes[resultKey].days[oneDay.day];

                if(notes.length > 0){
                    let note = {
                        title:this.hourNotes[resultKey].title,
                        notes:notes
                    }
                    result.push(note);
                }
            }

            return result;
        }
    }
}

</script>

<style lang="scss" scoped>

$color-gold-light: #f4f1ef;
$color-gold-light2: #ebe4e1;

.schedule-page{
    position: relative;
    z-index: 1;
    padding-top: 208px;
    background-color: #FFFFFF !important;
    margin-bottom: 60px;
    padding-left: 7.81vw;
    padding-right: 7.81vw;
}
.schedule-section {
    overflow-x: auto;
    padding: 0 15px;
}


.title {
    padding: 0 7.81vw;
    margin-bottom: 30px;
}

.title > h1 {
    font-weight: 600;
    font-style: normal;
    font-family: 'Oswald';
    font-size: 52px;
    margin: 0;
    margin-bottom: 30px;
    line-height: 54px;
    letter-spacing: 0.02em;
    font-feature-settings: 'pnum' on, 'lnum' on;
    color: #000000;
}

.schedule-table.schedule-table-mobile{
    display: none;
}
.schedule-table.schedule-table-desktop{
    display: grid;
}

.schedule-wrapper {
    //padding: 0 58px 0 9.81vw;
    //margin-bottom: 60px;

    margin-bottom: 60px;
    margin-left: auto;
    margin-right: auto;
    width: 100%;

    &.schedule-wrapper-desktop{
        width: 1140px;
    }


    .schedule-table-head {
        border-top: 1px solid #000000;
        border-bottom: 1px solid #000000;

        .schedule-table-column {
            font-weight: bold;
            text-transform: uppercase;
            height: 55px;
            padding-top: 8px;
            grid-template-rows: 30px 16px;
            position: relative;

            //&:first-child{
            //    grid-template-rows: auto;
            //}

            > .day-date {
                display: block;
                text-transform: lowercase;
                font-size: 12px;
            }
        }
    }

    .schedule-table-row {
        display: grid;
        grid-template-columns: 72px repeat(6, 178px);

        .schedule-table-column {
            text-align: center;
            //display: grid;
            align-items: center;
        }
    }

    .schedule-table-body {

        .schedule-table-row {
            border-bottom: 1px solid #000;

            .schedule-table-column {
                min-height: 90px;

                .schedule-day-time{
                    height: 90px;
                    display: grid;
                    align-items: center;
                    .time{
                        font-size: 12px;
                        font-weight: bold;
                    }
                }

                .schedule-day-note{
                    background: $color-gold-light;
                }
                &:nth-child(2n) {
                    .schedule-day-note{
                        background: $color-gold-light2;
                    }
                }

                &:first-child {

                    .schedule-day-note{
                        background: none;
                    }
                }
            }
        }

    }
}


@media screen and (max-width: 1123px) and (min-width: 768px) {
    .schedule {
        padding-top: 108px;
    }
    .title {
        padding: 0 50px;
        margin-bottom: 20px;
    }
    .title > h1 {
        font-size: 49px;
        margin-left: 57px;
        margin-bottom: 0;
    }

    .schedule-table.schedule-table-mobile{
        display: none;
    }
    .schedule-table.schedule-table-desktop{
        display: grid;
    }

}

@media screen and (max-width: 767px) {
    .schedule-table.schedule-table-mobile{
        display: grid;
    }
    .schedule-table.schedule-table-desktop{
        display: none;
    }
    .schedule-wrapper.schedule-wrapper-mobile{
        .schedule-table.schedule-table-mobile{
            .schedule-table-head{
                .schedule-table-row{
                    grid-template-columns: auto;
                    .schedule-table-column{
                        text-align: left;

                        .open-icon{
                            position: absolute;
                            top: 25px;
                            right: 0;
                            height: 13px;
                            width: 13px;
                            background: url("../../assets/images/open-icon.svg") no-repeat center;
                            color: #916C58;
                            color: #000;
                        }
                        .opened-icon{
                            position: absolute;
                            top: 25px;
                            right: 0;
                            height: 13px;
                            width: 13px;
                            background: url("../../assets/images/opened-icon.svg") no-repeat center;
                            //background-size: cover;
                            color: #000;
                            display: none;
                        }

                        &.is-open{
                            .opened-icon{
                                display: block;
                            }
                            .open-icon{
                                display: none;
                            }
                        }
                    }
                }
            }

            .schedule-table-body{
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.25s ease-out;

                &:first-child{
                    //border-bottom: 1px solid #000000;
                    border-bottom:none;
                }
            }
            .schedule-table-body.is-open{
                max-height: 1000px;
                transition: max-height 0.25s ease-in;
            }
        }

        .schedule-table.schedule-table-mobile{
            .schedule-table-body{
                .schedule-table-row{
                    grid-template-columns: 72px auto;
                }
            }
        }
    }

    .schedule {
        padding-top: 108px;
    }
    .title {
        padding: 0 15px;
        margin-bottom: 20px;
    }
    .title > h1 {
        font-size: 32px;
        margin-left: 48px;
        margin-bottom: 0;
    }
}

</style>

