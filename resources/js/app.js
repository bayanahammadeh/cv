require('./bootstrap');
import Vue from 'vue';
import App from './components/App';
/*import VueAxios from 'vue-axios';*/
import vueRouter from 'vue-router';
import axios from 'axios';
import {routes} from './routes';
import { Form} from 'vform'
window.Form = Form;
window.Vue = Vue;
//Vue.use(VueAxios);
Vue.use(vueRouter);
//Vue.use(axios);
Vue.component('app', require('./components/App.vue').default);

const router=new vueRouter({
   // mode:hash,
    routes:routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});

