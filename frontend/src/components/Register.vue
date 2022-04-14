<template>
  <login-form
      action="register"
      btn-title="sign up"
      page-title="Register"
      form-class="register-form"
  />
</template>

<script>
import LoginForm from "./Login";
export default {
  name: 'registerForm',
  components: {LoginForm},
}
</script>
