import { reactive } from 'vue'
const user = {
    data: reactive({
        email: '',
        jwt: '',
    }),

    setData(data) {
        this.data = data
    },
    setJwt(jwt) {
        this.data.jwt = jwt
    },
    setEmail(email) {
        this.data.email = email
    },
    getEmail() {
        return this.data.email;
    },
    getJwt() {
        return this.data.jwt;
    }
}

export default user