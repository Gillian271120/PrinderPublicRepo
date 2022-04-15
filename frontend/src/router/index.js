import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import Login from "../components/Login.vue";
import Register from "../components/Register.vue";
import Contact from "../components/Contact.vue";
import Services from "../components/Services.vue";
import Reservation from "../components/Reservation.vue";
import AboutUs from "../components/AboutUs.vue";
import Auth from "../cookies/auth";
import M from "materialize-css";
const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
        meta: {
            requiresAuth: false
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
        path: "/aboutUs",
        name: "AboutUs",
        component: AboutUs,
        meta: {
            requiresAuth: false
        }
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
    {
        path: "/contact",
        name: "contact",
        component: Contact,
    },
    {
        path: "/services",
        name: "services",
        component: Services,
    },
    {
        path: "/reservation",
        name: "reservarion",
        component: Reservation,
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
