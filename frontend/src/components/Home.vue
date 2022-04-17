<template>
  <div class="col s12 m6 offset-m3">
    <h1>{{title}}</h1>
  </div>
</template>

<script>
import axios from "../plugins/axios";
export default {
  name: 'Home',
  props: {},
  data() {
    return {
      title: 'Default title'
    }
  },
  methods: {
    handle(value) {
      this[value.action]()
    },
    register() {
      axios.post('/api/auth/register', this.form).then((result) => {
        console.log(result);
      }).catch((err) => {
        console.error(err);
      })
    },
  },
  created: function(){
      axios.post('/api/home/data',  /*Para enviar datos :  , this.title  */).then((result) => {
        console.log(result);
        this.title = result.data.data.title;
      }).catch((err) => {
        console.error(err);
      })
  }
}
</script>
