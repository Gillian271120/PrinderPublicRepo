import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import Login from "../components/Login.vue";
import Register from "../components/Register.vue";
import Auth from "../cookies/auth"
import M from "materialize-css";
const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
        meta: {
            onlyNoAuth: true
        }
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
];
 
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});
 
router.beforeEach((to) => {
    console.log(to);
    if (to.meta.requiresAuth && !Auth.get()) {
        return {
            name: 'Login',
        }
    }
})
router.beforeEach((to) => {
    console.log(to);
    if (to.meta.onlyNoAuth && Auth.get()) {
        M.toast({html: 'you are logged'})
        return {
            name: 'Home',
        }
    }
})
 
export default router;
