import Cookies from "js-cookie";

const COOKIE_NAME = 'token';

const options = {};
export default {
    set(token) {
        Cookies.set(COOKIE_NAME, token, options);
    },
    get() {
        return Cookies.get(COOKIE_NAME);
    },
};