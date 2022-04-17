<template>
  <div class="col s12 m6 offset-m3">
    <h1>Productos</h1>
  </div>
   <div class="row">
        <div v-for="product in products" :key="product.id"  class="col s6 m4">
          <div class="card hoverable">
            <div class="card-image">
              <img v-bind:src="product.image_name" v-bind:alt="product.name">
              <span class="card-title">{{product.name}}</span>
            </div>
            <div class="card-content">
              <p>El coste del producto es: {{product.price}} €</p>
            </div>
          </div>
        </div>
      </div>
</template>

<script>
import axios from "../plugins/axios";
export default {
  name: 'Products',
  props: {},
  data() {
    return {
      products: [],
    }
  },
  created: function(){
      axios.post('/api/products/data').then((result) => {
        this.products = result.data.data;
      }).catch((err) => {
        console.error(err);
      })
  }
}
</script>