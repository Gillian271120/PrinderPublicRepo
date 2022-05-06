<template>
  <div class="{{ formClass }}">
    <div class="row">
      <div class="col s12 m4 offset-m4">
        <div class="card">
          <div class="card-content">
            <h3 class="card-title">{{ pageTitle }}</h3>
            <div class="login-form">
              <label class="label">Name</label>
              <div class="control">
                <input v-model="form.username" class="input" type="text" placeholder="Text input">
                <input v-model="form.password" class="input" type="password" placeholder="password">
                <input v-model="form.password_confirm" class="input" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <div class="card-action">
            <button class="btn btn-flat" v-on:click="handle({action})">{{ btnTitle }}</button>
            <router-link v-if="action === 'login'" class="btn btn-flat" to="/register">Register</router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</template>
 
<script>
 
import axios from "../plugins/axios";
import Token from "../cookies/auth";
export default {
  name: 'LoginForm',
  props: {
    formClass: {
      type: String,
      default: 'login-form',
    },
    action: {
      type: String,
      default: 'login',
    },
    btnTitle: {
      type: String,
      default: 'sign in',
    },
    pageTitle: {
      type: String,
      default: 'Login',
    },
  },
  data() {
    return {
      form: {
        username: 'superadmin',
        password: 'password',
        password_confirm: 'password'
      }
    }
  },
  methods: {
    handle(value) {
      this[value.action]()
    },
    /**
     * Function to register a user on certain data given in form
     * 
     * @param object this.form
     * @return result
     */
    register() {
      axios.post('/api/auth/register', this.form).then((result) => {
        console.log(result);
      }).catch((err) => {
        console.error(err);
      })
    },
    /**
     * Logins a user with certain data given in form
     * 
     * @param object this.form
     * @return 
     */
    login() {
      axios.post('/api/auth/jwt_login', this.form).then((result) => {
        Token.set(result.data.data.access_token);
        this.$router.push('/');
      }).catch((err) => {
        console.error(err);
      })
    },
  }
}
</script>
