

import './bootstrap';
import { createApp } from 'vue';
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

const router = new VueRouter({
    routers: [
        {
            path: '/',
            name: 'home',
            component: require('./components/Home.vue').default
        }
    ]
})


const app = new Vue({
    el: '#app',
    routes
})

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);



app.mount('#app');
