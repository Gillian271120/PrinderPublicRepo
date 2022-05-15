<template>
  <div class="{{ formClass }}">
    <div class="row">
      <div class="col s12 m4 offset-m4">
        <div class="card">
          <div class="card-content">
            <h3 class="card-title">{{ pageTitle }}</h3>
            <div class="login-form">
              <div class="control">
                <label class="label">Name</label>
                <input v-model="form.username" class="input" type="text" placeholder="Text input">
                <label class="label">Password</label>
                <input v-model="form.password" class="input" type="password" placeholder="password">
                <label class="label">Confirm Password</label>
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

<style scoped>
  .card {
    margin: 1rem 0 1rem 0;
  }
  .card-content {
    padding: unset;
  }
  .card-title {
    /* background-color: #fff4e2; */
    background-color: burlywood;    
    color: white;
    line-height: 80px !important;
    height: 90px;
    margin: 0px !important;
    text-align: center;
    font-size: 30px;
    font-weight: bold;
  }
  .login-form {
    padding: 24px;
  }
  .card-action {
    background-color: burlywood;
    display: flex;
    justify-content: flex-end;
  }
  .card-action button {
    color: white;
  }
  .card-action a {
    color: white;
  }
  .card-action button:hover {
    background-color: cadetblue;
  }
  .card-action a:hover {
    background-color: cadetblue;  
  }
</style>