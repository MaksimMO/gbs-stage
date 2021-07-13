// require('./bootstrap');

 import {createApp} from 'vue'
 import { createRouter, createWebHistory } from 'vue-router'
 import  VueGoogleMaps from '@fawmi/vue-google-maps';
 import Root from './Root.vue'
 import FeedBackView from './components/FeedBackView.vue'
 import MainG from './views/MainG.vue'
 import MainB from './views/MainB.vue'
 import MainS from './views/MainS.vue'
 import TeamG from './views/TeamG.vue'
 import AboutUsG from './views/AboutUsG.vue'
 import AreasG from './views/AreasG.vue'
 import AreasGold from './views/AreasG-old.vue'
 import AreaG from './views/AreaG.vue'
 import AreasS from './views/AreasS.vue'
 import AreaS from './views/AreaS.vue'
 import SimulatorsG from './views/SimulatorsG.vue'
 import TicketsG from './views/TicketsG.vue'
 import PriceB from './views/PriceB.vue'
 import PriceS from './views/PriceS.vue'
 import Contacts from './views/Contacts.vue'
 import Schedule from './views/Schedule.vue'
 import Home from './components/Home'
 import MakeOrderPopup from './components/MakeOrderPopup.vue'
 import {i18n} from './plugins/i18n.js'
 import {isMobile, isMobileOnly}  from 'mobile-device-detect'





 const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: Home,
            name: 'home'
        },
        {
            path: '/level-:level',
            component: FeedBackView,
            props: true
        },
        {
            path: '/main-g',
            component:  MainG,
            name: 'MainG',
            meta: { area: 'g' }
        },
        {
            path:'/team-g',
            component:  TeamG,
            name: 'TeamG',
            meta: { area: 'g' }
        },
        {
            path: '/about-us-g',
            component: AboutUsG,
            name: 'AboutUsG',
            meta: { area: 'g' }
        },
        {
            path: '/areas-g',
            component: AreasG,
            name: 'AreasG',
            meta: { area: 'g' }
        },
        {
            path: '/schedule-gbs',
            component: Schedule,
            name: 'Schedule',
        },
        {
            path: '/areas-g-old', // TODO Remove if version with video is OK.
            component: AreasGold,
            name: 'AreasG-old',
            meta: { area: 'g' }
        },
        {
            props:true,
            path: '/areas-g/:id',
            component: AreaG,
            name: 'AreaG',
            meta: { area: 'g' }
        },
        {
            path:'/simulators-g',
            component:  SimulatorsG,
            name: 'SimulatorsG',
            meta: { area: 'g' }
        },
        {
            path:'/tickets-g',
            component:  TicketsG,
            name: 'TicketsG',
            meta: { area: 'g' }
        },
        {
            path:'/contacts-g',
            component:  Contacts,
            name: 'ContactsG',
            meta: { area: 'g' }
        },
        {
            path:'/contacts-b',
            component:  Contacts,
            name: 'ContactsB',
            meta: { area: 'b' }
        },
        {
            path:'/contacts-s',
            component:  Contacts,
            name: 'ContactsS',
            meta: { area: 's' }
        },
        {
            path: '/main-b',
            component:  MainB,
            name: 'MainB',
            meta: { area: 'b' }
        },
        {
            path: '/price-b',
            component:  PriceB,
            name: 'PriceB',
            meta: { area: 'b' }
        },
        {
            path: '/main-s',
            component:  MainS,
            name: 'MainS',
            meta: { area: 's' }
        },
        {
            path: '/areas-s',
            component: AreasS,
            name: 'AreasS',
            meta: { area: 's' }
        },
        {
            props:true,
            path: '/areas-s/:id',
            component: AreaS,
            name: 'AreaS',
            meta: { area: 's' }
        },
        {
            path: '/price-s',
            component:  PriceS,
            name: 'PriceS',
            meta: { area: 's' }
        },


    ],
    scrollBehavior() {
        document.getElementById('gbslevel-app').scrollIntoView();
    }
  });

let data = {
    isLoading:false,
    isMobile,
    isMobileOnly,
    area: '',
}



router.beforeEach((to, from, next) => {
    window.vm.$data.area = to.meta.area;
    window.vm.$data.isMobile = isMobile;
    next()
})

const app = createApp({
    template:'<root  />',
    data(){
        return data;
    },
    components:{
        Root
    },
})



app.use(router)
app.use(i18n)
app.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyAtPFNu4yHiJm6G2QgLQ2eZs2tFnMkJoTU',
        // key: 'AIzaSyBJ2TlWNjUrKtlb098kaEn-LiKjmApa-sM',

    },
})
window.vm=app.mount('#gbslevel-app')


// if(isMobile){
//     document.getElementById("gbslevel-app").style.height=`${window.innerHeight}px`;
// }
