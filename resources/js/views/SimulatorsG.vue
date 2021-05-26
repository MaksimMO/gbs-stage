<template>
<Header class="header-invert" :level="'g'" />
  <div class="simulator-g">
      <section class="title">
          <h1>Тренажери</h1>
          <p>
            Спортивний клуб «G level» оснащений найновішою преміум-лінійкою тренажерів від провідного світового бренду TechnoGym.
          </p>
          <p>
            TechnoGym - лідер серед виробників тренажерів, завдяки використанню останніх наукових відкриттів та технічних досягнень.
            Тренажери продумані до найдрібніших деталей, тому на них щодня тренується більше 35 мільйонів спортсменів,
            які досягають найвищих спортивних результатів. А відтепер і ви зможете відчути їх унікальність.
          </p>
          <div class="logo"></div>
      </section>
      <section class="simulator-direction">
          <ul class="direction">
            <li @click="direction = 'upper_boddy'" :class="{'invert-color': direction == 'upper_boddy'}">Верхня частина тіла</li>
            <li @click="direction = 'lower_boddy'" :class="{'invert-color': direction == 'lower_boddy'}">Нижня частина тіла</li>
            <li @click="direction = 'cardio'" :class="{'invert-color': direction == 'cardio'}">Кардіо</li>
            <li @click="direction = 'multifunction_simulators'" :class="{'invert-color': direction == 'multifunction_simulators'}">Багатофункціональні тренажери</li>
            <li @click="direction = 'free_weights'" :class="{'invert-color': direction == 'free_weights'}">Вільні ваги</li>
        </ul>

        <ul class="simulator">
            <transition-group name="popup-detail">
                <li v-for="(simulator)  in directionCheck" :key="simulator.id" @click="openDetail(simulator.id)">
                    <img :src="simulator.link" :alt="$i18n.t(`simulators.${simulator.id}.name`)">
                    <div>{{$i18n.t(`simulators.${simulator.id}.name`)}}</div>
                </li>
            </transition-group>
        </ul>
      </section>
    </div>


        <teleport to="body">
            <transition name="popup-detail">
                <PopupDetail v-if="isModalOpen"  @closePopup="isModalOpen = false" :simulatorDetail="simulatorDetail"/>
            </transition>
        </teleport>

<Footer />
</template>

<script>
import Header from '../components/Header.vue';
import Footer from '../components/Footer.vue';
import PopupDetail from '../components/PopupDetail.vue'
export default {
    data() {
        return {
            isOpen: false,
            isModalOpen: false,
            direction: 'upper_boddy',
            simulatorDetail: null,
            simulators: [
                {id: 0, direction: "upper_boddy", link: require("../../assets/images/simulators/vertical_traction.jpg").default},
                {id: 1, direction: "upper_boddy", link: require("../../assets/images/simulators/shoulder_press.jpg").default},
                {id: 2, direction: "upper_boddy", link: require("../../assets/images/simulators/chest_press.jpg").default},
                {id: 3, direction: "upper_boddy", link: require("../../assets/images/simulators/dual_prectoral_reverse_fly.jpg").default},
                {id: 4, direction: "upper_boddy", link: require("../../assets/images/simulators/pull_down.jpg").default},
                {id: 5, direction: "upper_boddy", link: require("../../assets/images/simulators/low_row.jpg").default},
                {id: 6, direction: "upper_boddy", link: require("../../assets/images/simulators/wide_chest_press.jpg").default},
                {id: 7, direction: "upper_boddy", link: require("../../assets/images/simulators/incline_chest_press.jpg").default},
                {id: 8, direction: "lower_boddy", link: require("../../assets/images/simulators/dual_abd.jpg").default},
                {id: 9, direction: "lower_boddy", link: require("../../assets/images/simulators/leg_extension.jpg").default},
                {id: 10, direction: "lower_boddy", link: require("../../assets/images/simulators/ne_leg_curl.jpg").default},
                {id: 11, direction: "lower_boddy", link: require("../../assets/images/simulators/simulator-default.jpg").default},
                {id: 12, direction: "lower_boddy", link: require("../../assets/images/simulators/rear_kick.jpg").default},
                {id: 13, direction: "lower_boddy", link: require("../../assets/images/simulators/Linear_leg_press.jpg").default},
                {id: 14, direction: "lower_boddy", link: require("../../assets/images/simulators/leg_press.jpg").default},
                {id: 15, direction: "lower_boddy", link: require("../../assets/images/simulators/leg_curl.jpg").default},
                {id: 16, direction: "lower_boddy", link: require("../../assets/images/simulators/hack_squat.jpg").default},
                {id: 17, direction: "cardio", link: require("../../assets/images/simulators/run_live_500.jpg").default},
                {id: 18, direction: "cardio", link: require("../../assets/images/simulators/synchro_live_700.jpg").default},
                {id: 19, direction: "cardio", link: require("../../assets/images/simulators/bake_live_500.jpg").default},
                {id: 20, direction: "cardio", link: require("../../assets/images/simulators/recline_live_500.jpg").default},
                {id: 21, direction: "cardio", link: require("../../assets/images/simulators/climb_live_500.jpg").default},
                {id: 22, direction: "cardio", link: require("../../assets/images/simulators/group_cycle_connect.jpg").default},
                {id: 23, direction: "multifunction_simulators", link: require("../../assets/images/simulators/simulator-default.jpg").default},
                {id: 24, direction: "multifunction_simulators", link: require("../../assets/images/simulators/dual_adjustable_pulley.png").default},
                {id: 25, direction: "multifunction_simulators", link: require("../../assets/images/simulators/kneeling_easy_chin_dip.jpg").default},
                {id: 26, direction: "multifunction_simulators", link: require("../../assets/images/simulators/cable_stations_connector.jpg").default},
                {id: 27, direction: "free_weights", link: require("../../assets/images/simulators/simulator-default.jpg").default},
                {id: 28, direction: "free_weights", link: require("../../assets/images/simulators/universal_storage.jpg").default},
                {id: 29, direction: "free_weights", link: require("../../assets/images/simulators/pure_strength_olympic_incline_bench.jpg").default},
                {id: 30, direction: "free_weights", link: require("../../assets/images/simulators/pure_strength_olympic_flat_bench.jpg").default},
                {id: 31, direction: "free_weights", link: require("../../assets/images/simulators/scott_bench.jpg").default},
                {id: 32, direction: "free_weights", link: require("../../assets/images/simulators/adjustable_bench.jpg").default},
                {id: 33, direction: "free_weights", link: require("../../assets/images/simulators/lower_back_bench.jpg").default},
                {id: 34, direction: "free_weights", link: require("../../assets/images/simulators/ghd_bench.jpg").default},
                {id: 35, direction: "free_weights", link: require("../../assets/images/simulators/adjustable_decline_ab_crunch.jpg").default},
                {id: 36, direction: "free_weights", link: require("../../assets/images/simulators/simulator-default.jpg").default},
                {id: 37, direction: "free_weights", link: require("../../assets/images/simulators/simulator-default.jpg").default}
            ]
        }
    },
    mounted() {
        console.log('isMobile', this.$root.$data.isMobile);
    },
    methods: {
        change(e) {
            this.isOpen = e;
        },
        openDetail(idSimulator) {
            this.simulatorDetail = this.simulators.filter((simulator) => simulator.id === idSimulator)[0];
            this.isModalOpen = true;
        }
    },
    computed: {
        directionCheck () {
            return this.simulators.filter((simulator) => simulator.direction === this.direction);
        },
    },
    components: {
        Header,
        PopupDetail,
        Footer
    }
}

</script>

<style lang="scss" scoped>
    .simulator-g {
        padding-top: 208px;
        background-color: #FFFFFF !important;
        .logo {
            background-image: url("../../assets/images/technogym-logo-black.svg");
            background-repeat: no-repeat;
            height: 84px;
            width: 310px;
            margin-bottom: 30px;
            margin-top: 20px;
            margin-left: auto;
        }
    }
    .title {
        padding: 0 7.81vw;
        margin-bottom: 60px;
        & > h1 {
            font-weight: 600;
            font-style: normal;
            font-family: Oswald;
            font-size: 52px;
            margin: 0;
            margin-left: 96px;
            margin-bottom: 30px;
            line-height: 54px;
            letter-spacing: 0.02em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
        & > p {
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            margin-bottom: 10px;
            font-family: Raleway;
            font-style: normal;
            font-weight: normal;
            line-height: 28px;
            letter-spacing: 0.05em;
            font-feature-settings: 'pnum' on, 'lnum' on;
            color: #000000;
        }
    }
    .simulator-direction {
        font-family: Oswald;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 27px;
        letter-spacing: 0.02em;
        font-feature-settings: 'pnum' on, 'lnum' on;
        padding: 0 7.81vw;
        padding-bottom: 60px;
        & > .direction {
            list-style-type: none;
            display: flex;
            color: #000000;
            grid-column-gap: 40px;
            align-items: center;
            text-align: center;
            padding: 0;
            cursor: pointer;
            border-bottom: solid 2px #000000;
            & li {
                padding-bottom: 20px;
                &:hover {
                    color: #916C58;
                }
            }
        }
        .invert-color{
            color: #916C58;
        }
        & .simulator{
            list-style-type: none;
            overflow: visible;
            grid-template-columns: repeat(4, 1fr);
            grid-column-gap: 15px;
            grid-row-gap: 40px;
            display: grid;
            padding: 0;
            & li {
                cursor: pointer;
            }
            & li img {
                display:block;
                width:100%;
            }
            & li div{
                font-family: Oswald;
                font-style: normal;
                font-weight: 600;
                font-size: 18px;
                line-height: 27px;
                letter-spacing: 0.02em;
                font-feature-settings: 'pnum' on, 'lnum' on;
                color: #000000;
                padding: 10px 5px 0 5px;
            }
        }
    }
    @media screen and (max-width: 768px){
      .simulator-direction {
        font-size: 14px;
        padding: 0 15px;
        & > .direction {
            display: grid;
            grid-column-gap: 20px;
            grid-template-columns: repeat(2, 1fr);
            grid-row-gap: 22px;
            border-bottom: none;
            & li {
                padding-bottom: 5px;
                &:hover {
                    color: #916C58;
                }
            }
        }
        .invert-color{
            color: #916C58;
            border-bottom: solid 2px #916C58;
        }
        & .simulator {
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 30px;
        }
      }
    }

    .popup-detail-enter-active,
    .popup-detail-leave-active {
        transition: all .2s ease;
    }
    .popup-detail-enter-from,
    .popup-detail-leave-to {
        opacity: 0;
    }

    .footer {
        height: 234px;
    }
</style>

