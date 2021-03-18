/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

//window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


 import {createApp} from 'vue'
 import { createRouter, createWebHistory, createWebHashHistory } from 'vue-router'
 import Root from './Root.vue'
 import FeedBackView from './components/FeedBackView'
 import Home from './components/Home'

 const router = createRouter({
    history: createWebHistory(),
    routes: [
    //   { path: '/', component: Home, name:'Home' },
    //   { path: '/contact-form', component: FeedBackView, name:'FeedBackView' },
    //   { path: '/', component: FeedBackView, name:'FeedBackView', props:true },

      { path: '/', component: FeedBackView, props: (route) => ({ query: route.query.area }) }
    ],
  })

const app = createApp(Root)
 app.use(router)
 window.vm=app.mount('#gbslevel-app')