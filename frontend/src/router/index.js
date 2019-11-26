import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home.vue';

Vue.use(VueRouter);

const routes = [{
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/login',
        name: 'login',
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/login/Login.vue'),
    },
    {
        path: '/signInTipo',
        name: 'signInTipo',
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/signIn/signInTipo.vue'),
    },
    {
        path: '/signInDev',
        name: 'signInDev',
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/signIn/signInDev/SignInDev.vue'),
    },
    {
        path: '/signInEmpresa',
        name: 'signInEmpresa',
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/signIn/signInEmpresa/SignInEmpresa.vue'),
    },
    

];

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes,
});

export default router;