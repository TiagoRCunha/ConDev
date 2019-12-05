import Vue from "vue"
import Router from "vue-router"
import Home from "@/components/Home"
import NavBar from "@/components/NavBar"
import NavbarFeed from "@/components/NavbarFeed"
import Titulo from "@/components/Titulo"
import Login from "@/components/login/Login"
import LoginRs from "@/components/login/loginRs/LoginRs"
import LoginRsAl from "@/components/login/loginRs/loginRsAl/LoginRsAl"
import signInTipo from "@/components/signIn/signInTipo"
import SignInDev from "@/components/signIn/signInDev/SignInDev"
import SignInEmpresa from "@/components/signIn/signInEmpresa/SignInEmpresa"

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: "/",
            name: "Home",
            component: Home
        },
        {
            path: "/NavBar",
            name: "NavBar",
            component: NavBar
        },
        {
            path: "/Feed",
            name: "Feed",
            component: NavbarFeed
        },
        {
            path: "/Titulo",
            name: "Titulo",
            component: Titulo
        },
        {
            path: "/Login",
            name: "Login",
            component: Login
        },
        {
            path: "/LoginRs",
            name: "LoginRs",
            component: LoginRs
        },
        {
            path: "/LoginRsAl",
            name: "LoginRsAl",
            component: LoginRsAl
        },
        {
            path: "/signInTipo",
            name: "signInTipo",
            component: signInTipo
        },
        {
            path: "/SignInDev",
            name: "SignInDev",
            component: SignInDev
        },
        {
            path: "/SignInEmpresa",
            name: "SignInEmpresa",
            component: SignInEmpresa
        }

    ]
})
