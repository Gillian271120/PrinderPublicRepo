<template>
  <div class="head">
      <img
        class="head_img"
        src="https://img.travesiasdigital.com/2018/02/Captura-de-pantalla-2018-02-09-a-las-12.18.27.png"
        alt="Productos"
      />
      <h1 class="head_text">Productos</h1>
    </div>
  <div class="row">
    <div v-for="product in products" :key="product.id" class="col s6 m4">
      <div class="card hoverable">
        <div class="card-image">
          <img v-bind:src="product.image_name" v-bind:alt="product.name" />
          <span class="card-title">{{ product.name }}</span>
        </div>
        <div class="card-content">
          <p>El coste del producto es: {{ product.price }} €</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "../plugins/axios";
export default {
  name: "Products",
  props: {},
  data() {
    return {
      products: [],
    };
  },
  beforeCreate: 
  /**
   * Gets all the products from the db
   */
  function () {
    axios
      .post("/api/products/data")
      .then((result) => {
        this.products = result.data.data;
      })
      .catch((err) => {
        console.error(err);
      });
  },
};
</script>

<style scoped>
.head {
  height: 390px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 25px;
}
.head_img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
  filter: brightness(0.3);
}
.head_text {
  z-index: 1;
  position: absolute;
  color: white;
  font-size: 70px;
  font-weight: bold;
  letter-spacing: 2px;
}
.card-image img{
  max-height: 314px;
  height: 314px;
  object-fit: cover;
}
.card .card-image .card-title {
  background-color: black;
}
</style>