// require('./bootstrap');

 import {createApp} from 'vue'
 import { createRouter, createWebHistory } from 'vue-router'
 import Root from './Root.vue'
 import FeedBackView from './components/FeedBackView.vue'
 import MainG from './views/MainG.vue'
 import TeamG from './views/TeamG.vue'
 import AboutUsG from './views/AboutUsG.vue'
//  import MainB from './components/MainB'
//  import MainS from './components/MainS'
 import Home from './components/Home'
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
            name: 'MainG'
        },
        {
            path:'/team-g',
            component:  TeamG,
            name: 'TeamG'
        },
      { path: '/about-us-g', component:AboutUsG}
    //   { path: '/main-b', component:MainB}
    //   { path: '/main-s', component:MainS}
    ],
  });

let data = {
    isLoading:false,
    isMobile
}

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