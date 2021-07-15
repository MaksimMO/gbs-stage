<template>
    <div class="breadcrumb" v-show="$root.$data.area">
        <div v-if="area === undefined">
            <span>
                <router-link to="/">Головна</router-link>
            </span>
                /
            <span class="bread-main">
                <router-link :to="`/main-${$root.$data.area}`">{{areaGet}}</router-link>
            </span>
                /
            <span :class="{'view-page': area === undefined}">
                {{routeName}}
            </span>
        </div>
        <div v-else>
            <span>
                <router-link to="/">Головна</router-link>
            </span>
                /
            <span class="bread-main">
                <router-link :to="`/main-${$root.$data.area}`">{{areaGet}}</router-link>
            </span>
                /
            <span>
                <router-link :to="`/areas-${$root.$data.area}`">{{routeName}}</router-link>
            </span>
                /
            <span>
                {{area}}
            </span>
        </div>
    </div>
</template>

<script>

let breadcrumbs = {
    g: 'G LEVEL',
    b: 'B LEVEL',
    s: 'S LEVEL',
    AboutUsG: 'Про нас',
    AreasG: 'Зонування',
    AreasS: 'Послуги',
    TeamG: 'Наша команда',
    SimulatorsG: 'Тренажери',
    TicketsG: 'Абонементи',
    ContactsG: 'Контакти',
    ContactsB: 'Контакти',
    ContactsS: 'Контакти',
    AreaG: "Зонування",
    AreaS: "Послуги",
    PriceB: "Прайс",
    PriceS: "Прайс",
    Schedule: "Розклад",
}

export default {
    props:['area'],
    computed: {
        areaGet(){
            return breadcrumbs[this.$root.$data.area];
        },
        routeName(){
            return breadcrumbs[this.$route.name];
        }
    }
}
</script>

<style lang="scss" scoped>
.breadcrumb {
    position: absolute;
    right: 68px;
    top: 165px;
    font-family: Raleway;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 18px;
    text-align: right;
    letter-spacing: 0.05em;
    font-feature-settings: 'pnum' on, 'lnum' on;
    color: #000000;
    opacity: 0.75;
    & div {
        & span {
            margin: 0 30px;
            & a {
                text-decoration: unset;
                color: unset;
            }
            &:last-child {
                opacity: 0.25;
                margin-right: 0;
            }
        }
    }
}
@media screen and (max-width: 1023px) and (min-width: 768px) {
    .breadcrumb {
        right: 50px;
        top: 87px;
        font-size: 10px;
        & div {
            & span {
                margin: 0 20px;
                & a {
                    text-decoration: unset;
                    color: unset;
                }
            }
        }
    }
}
@media screen and (max-width: 768px) {
    .breadcrumb {
        right: 15px;
        top: 78px;
        font-size: 10px;
        & div {
            & span {
                margin: 0 20px;
                & a {
                    text-decoration: unset;
                    color: unset;
                }
            }
        }
    }
}
</style>
