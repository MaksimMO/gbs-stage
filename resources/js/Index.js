// require('./bootstrap');

 import {createApp} from 'vue'
 import { createRouter, createWebHistory, createWebHashHistory, beforeEach, afterEach } from 'vue-router'
 import Root from './Root.vue'
 import FeedBackView from './components/FeedBackView'
 import Home from './components/Home'
 import {isMobile}  from 'mobile-device-detect'

 const router = createRouter({
    history: createWebHistory(),
    routes: [
      { path: '/', component: Home, name: 'home'},
      { path: '/level-:level', component:FeedBackView, props: true }
    ],
  });

let data = {
    isLoading:false,
    isMobile
}

// console.log('isMobile', isMobile)

const app = createApp({
    template:'<root />',
    data(){
        return data;
    },
    components:{
        Root
    },
})

app.use(router)
window.vm=app.mount('#gbslevel-app')


if(isMobile){
    document.getElementById("gbslevel-app").style.height=`${window.innerHeight}px`;
}