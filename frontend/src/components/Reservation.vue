<template>
  <div class="col s12 m6 offset-m3">
    <h1>Reservas</h1>
  </div>
  <div class="container">
    <div class="row">
        <div class="input-field col s12">
          <select v-model="form.service">
            <option value="" disabled selected>Escoge una cabina</option>
            <option value="1">Cabina de 1</option>
            <option value="3">Cabina de 3</option>
            <option value="7">Cabina de 7</option>
            <option value="12">Cabina de 12</option>
            <option value="18">Cabina de 18</option>
          </select>
          <label>Cabina</label>
        </div>
        <div class="input-field col s12">
          <input  v-model="form.clientDni" id="dni" type="text" class="validate" maxlength="9">
          <label class="active" for="dni"> DNI</label>
        </div>
        <div class="input-field col s12 m6">
          <input v-model="form.clientFullname" id="name" type="text" class="validate">
          <label class="active" for="name">Nombre y apellidos</label>
        </div>
        
        <!-- No se pq no funciona, abajo está el script tmb comentado -->
        <!-- <div class="input-field col s12 m6">
          <input type="text" class="datepicker" name="date">
          <label class="active" for="nombre">Fecha</label>
        </div> -->
        <div class="input-field col s12 m6">
          <input v-model="form.clientTelephone" id="tel" type="text" class="validate" minlength="9" maxlength="15">
          <label class="active" for="tel">Teléfono de contacto</label>
        </div>

        <div class="input-field col s12 m6">
          <input v-model="form.date" id="date" type = "date" />
          <label class="active" for="date">Fecha de reserva</label>
        </div>
        
        

        <div class="input-field col s12">
          <input v-model="form.clientCreditCard" id="cantidad" type="text" class="validate" maxlength="12" minlength="12">
          <label class="active" for="cantidad"> Tarjeta de crédito</label>
        </div>

        <div class="input-field col s12 m6">
          <input v-model="form.subtotal" id="subtotal" type="text" class="validate">
          <label class="active" for="subtotal">Subtotal</label>
        </div>
    </div>
     <button v-on:click="reservation()" class="btn waves-effect waves-light" type="submit" name="action">Enviar
      <i class="material-icons right">send</i>
      </button>
  </div>
  <br>
</template>

<script>

import axios from "../plugins/axios";
export default {
  name: 'Reservation',
  props: {},
  data() {
    return {
      form: {
        clientFullname: '',
        clientTelephone:'',
        clientDni:'',
        service:'',
        subtotal:'',
        clientCreditCard:'',
        date:'',
      },
    }
  },
  methods:{
    reservation(){
      axios.post('/api/reservation/store', this.form).then((result) => {
         if(result.data.status === "success"){
          console.log(result);
        }else{
          console.log("hola");
        }
      }).catch((err) => {
        console.error(err);
      })
    }

  },
  // TODO: Hay que pasarle los precios por aquí 
  // created: function(){
  //     axios.post('/api/reservation/store').then((result) => {
  //       if(result.data.status === "success"){
  //         console.log(result);
  //       }else{
  //         console.log("hola");
  //       }
  //     }).catch((err) => {
  //       console.error(err);
  //     })
  // }
}
// import M from "materialize-css";
// document.addEventListener('DOMContentLoaded', function() {
//     let options = {
//       minDate: new Date(),
//       defaultDate:new Date(),
//       disableWeekends: true,
//       autoclose:true,
//       showClearBtn:true,
//     };
//     var elems = document.querySelectorAll('.datepicker');
//     let pepe = M.Datepicker.init(elems,options);
//     console.log(pepe);
// });
</script>
