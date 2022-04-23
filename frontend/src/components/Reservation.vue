<template>
  <div class="col s12 m6 offset-m3">
    <h1>Reservas</h1>
  </div>
  <div class="container s-12">
    <div class="row">
        <div class="input-field col s12">
          <select name="service">
            <option value="" disabled selected>Escoge una cabina</option>
            <option value="1">Cabina de 1</option>
            <option value="3">Cabina de 3</option>
            <option value="7">Cabina de 7</option>
            <option value="12">Cabina de 12</option>
            <option value="18">Cabina de 18</option>
          </select>
          <label>Cabina</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="nombre" type="text" class="validate" name="name">
          <label class="active" for="nombre">Nombre</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="surname" type="text" class="validate" name="surname">
          <label class="active" for="surname">Apellidos</label>
        </div>
        <div class="input-field col s6 m3">
          <input id="autorizacion" type="text" class="validate" name="telephone" max="9">
          <label class="active" for="autorizacion"> Num de teléfono</label>
        </div>
        <div class="input-field col s6 m3">
          <input id="cantidad" type="text" class="validate">
          <label class="active" for="cantidad"> Cantidad</label>
        </div>
        <div class="input-field col s12 m6">
          <select multiple>
            <option value="" disabled selected>Escoge las que apliquen</option>
            <option value="1">Inscripcion al Congreso</option>
            <option value="2">Taller 1</option>
            <option value="3">Taller 2</option>
          </select>
          <label>Opciones Inscritas</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="tel" type="text" class="validate">
          <label class="active" for="tel"> Telefono</label>
        </div>
        <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Dudas / Comentarios</label>
        </div>
    </div>
  </div>
  

</template>

<script>

import axios from "../plugins/axios";
export default {
  name: 'Reservation',
  props: {},
  data() {
    return {
      products: [],
    }
  },
  created: function(){
      axios.post('/api/reservation/store').then((result) => {
        console.log(result);
      }).catch((err) => {
        console.error(err);
      })
  }
}
</script>
