// require('./bootstrap');

 import {createApp} from 'vue'
 import { createRouter, createWebHistory } from 'vue-router'
 import Root from './Root.vue'
 import FeedBackView from './components/FeedBackView.vue'
 import MainG from './views/MainG.vue'
 import MainB from './views/MainB.vue'
 import TeamG from './views/TeamG.vue'
 import AboutUsG from './views/AboutUsG.vue'
 import AreasG from './views/AreasG.vue'
 import SimulatorsG from './views/SimulatorsG.vue'
 import PriceB from './views/PriceB.vue'
//  import MainB from './components/MainB'
//  import MainS from './components/MainS'
 import Home from './components/Home'
 import MakeOrderPopup from './components/MakeOrderPopup.vue'
 import {i18n} from './plugins/i18n.js'
 import {isMobile}  from 'mobile-device-detect'





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
            component:AboutUsG,
            meta: { area: 'g' }
        },
        {
            path: '/areas-g',
            component:AreasG,
            meta: { area: 'g' }
        },
        {
            path:'/simulators-g',
            component:  SimulatorsG,
            meta: { area: 'g' }
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

    ],
    scrollBehavior() {
        document.getElementById('gbslevel-app').scrollIntoView();
    }
  });

let data = {
    isLoading:false,
    isMobile,
    area: '',
}

router.beforeEach((to, from, next) => {
    console.log(to.matched);
    data.area = to.meta.area;
    // if (to.matched.some(record => record.meta.area)) {
    //   // этот путь требует авторизации, проверяем залогинен ли
    //   // пользователь, и если нет, перенаправляем на страницу логина
    //   if (!auth.loggedIn()) {
    //     next({
    //       path: '/login',
    //       query: { redirect: to.fullPath }
    //     })
    //   } else {
    //     next()
    //   }
    // } else {
      next() // всегда так или иначе нужно вызвать next()!
    // }
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
window.vm=app.mount('#gbslevel-app')


if(isMobile){
    document.getElementById("gbslevel-app").style.height=`${window.innerHeight}px`;
}
