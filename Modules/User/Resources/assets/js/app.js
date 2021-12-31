
import Vue from 'Vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';//gọi thư viện axios
import axios from 'axios';
Vue.use(VueAxios,axios);


import App from './App.vue';
import Register from './components/Register.vue';

const routes = [
    {
        name: 'Register',
        path: '/',
        component: Register
    },
];

const router = new VueRouter({mode:'history', routes: routes});
new Vue(Vue.util.extend({router},App)).$mount('#app');
