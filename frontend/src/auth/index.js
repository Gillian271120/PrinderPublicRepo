import axios from "../plugins/axios";


export default {
    login(form) {
        return axios.post("/login", form);
    }
};