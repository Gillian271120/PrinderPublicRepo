import { createRouter, createWebHistory } from "vue-router";
import Home from "../components/Home.vue";
import PageNotFound from "../components/PageNotFound.vue";
import Login from "../components/Login.vue";
import Register from "../components/Register.vue";
import Products from "../components/Products.vue";
import Contact from "../components/Contact.vue";
import Services from "../components/Services.vue";
import Reservation from "../components/Reservation.vue";
import AboutUs from "../components/AboutUs.vue";
import Auth from "../cookies/auth";
import M from "materialize-css";
/**
 * Current routes of the website
 */
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
    {
        path: "/products",
        name: "Products",
        component: Products,
    },
    {
        path: "/:pathMatch(.*)*",
        name: "PageNotFound",
        component: PageNotFound,
    },
];
 /**
  * Create the routes of the website
  */
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});
/**
 * Before each call checks if need auth or not and redirect on given answer
 */
router.beforeEach((to) => {
    if (to.meta.requiresAuth && !Auth.get()) {
        return {
            name: 'Login',
        }
    }
})
/**
 * Before each call checks if need auth or not and redirect on given answer
 */
router.beforeEach((to) => {
    if (to.meta.onlyNoAuth && Auth.get()) {
        M.toast({html: 'Ya tienes una sesión iniciada'})
        return {
            name: 'Home',
        }
    }
})
/**
 * Export routes
 */
export default router;
