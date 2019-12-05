import Vue from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';
import axios from 'axios';
import VueAxios from 'vue-axios'
import Vuelidate from "vuelidate";
import "bootstrap/dist/css/bootstrap.css";
import { required, minLength, between } from 'vuelidate/lib/validators';

import Sidebar from 'primevue/sidebar';

Vue.use(VueAxios, axios, Vuelidate)
Vue.use(Vuelidate);
Vue.use(required, minLength, between);

Vue.component('Sidebar', Sidebar);

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  Vuelidate,
  "Sidebar": Sidebar,
  render: h => h(App),
}).$mount('#app');
