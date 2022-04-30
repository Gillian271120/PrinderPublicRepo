<template>
  <div class="col s12 m6 offset-m3">
    <h1>Reservas</h1>
  </div>
  <!-- <div class="container"> -->
    <div class="row">
      <!-- <form class="col s12"> -->
        <div class="input-field col s12">
          <select v-model="form.cabin_id" @change="changePrice">
            <option value="" disabled selected>Escoge una cabina</option>
            <option value="1">Cabina de 1 persona: Jessica</option>
            <option value="2">Cabina de 1 persona: Charlie</option>
            <option value="3">Cabina de 1 persona: Beta</option>
            <option value="4">Cabina de 3 personas: Alpha</option>
            <option value="5">Cabina de 3 personas: Bravo</option>
            <option value="6">Cabina de 3 personas: Jacobs</option>
            <option value="7">Cabina de 7 personas: Chafiras</option>
            <option value="8">Cabina de 7 personas: Katherine</option>
            <option value="9">Cabina de 7 personas: Metic</option>
            <option value="10">Cabina de 12 personas: Sinhue</option>
            <option value="11">Cabina de 12 personas: Martis</option>
            <option value="12">Cabina de 18 personas: Leloy</option>
          </select>
          <label>Cabina</label>
          <small>En nuestro establecimiento las cabinas tienen nombres, correspondientes a las vistas arriba</small>
        </div>
        
        <div class="input-field col s12">
          <input id="numberClients" type="text" v-model="form.numberClients" @change="changePrice" required>
          <label for="numberClients">Número de personas</label>
          </div>

        <div class="input-field col s12">
          <input  v-model="form.clientDni" id="dni" type="text" class="validate" maxlength="9" minlength="9" required>
          <label class="active" for="dni">DNI</label>
        </div>
      
        <div class="input-field col s12 m6">
          <input v-model="form.clientFullname" id="name" type="text" class="validate" required>
          <label class="active" for="name">Nombre y apellidos</label>
        </div>
        
        <!-- No se pq no funciona, abajo está el script tmb comentado -->
        <!-- <div class="input-field col s12 m6">
          <input type="text" class="datepicker" name="date">
          <label class="active" for="nombre">Fecha</label>
        </div> -->
        <div class="input-field col s12 m6">
          <input v-model="form.clientTelephone" id="tel" type="text" class="validate" minlength="9" maxlength="15" required>
          <label class="active" for="tel">Teléfono de contacto</label>
        </div>

        <div class="input-field col s12 m6">
          <input v-model="form.date" id="date" type = "date" required />
          <label class="active" for="date">Fecha de reserva</label>
        </div>
        
        

        <div class="input-field col s12">
          <input v-model="form.clientCreditCard" id="cantidad" type="text" class="validate" maxlength="12" minlength="12" required>
          <label class="active" for="cantidad"> Tarjeta de crédito</label>
        </div>

        <div class="input-field col s12 m6">
          <input v-model="form.subtotal" id="subtotal" type="text" class="validate" required disabled>
          <label class="active" for="subtotal">Subtotal</label>
        </div>
        <div class="col s12">
          <button v-on:click="reservation()" class="btn waves-effect waves-light" type="submit" id="button" name="action">Enviar
            <i class="material-icons right">send</i>
          </button>
        </div>
      <!-- </form> -->
  </div>
     
  <!-- </div> -->
</template>

<script>
import axios from "../plugins/axios";
import M from "materialize-css";
export default {
  name: 'Reservation',
  props: {},
  data() {
    return {
      form: {
        clientFullname: '',
        clientTelephone:'',
        clientDni:'',
        cabin_id:'',
        subtotal:'',
        clientCreditCard:'',
        date:'',
        numberClients:'',
      },
      cabins: [],
    }
  },
  methods:{
    reservation(){
      axios.post('/api/reservation/store', this.form).then((result) => {
        console.log(result);
         if(result.data.status === "success"){
           if(result.data.data === "Fecha no disponible"){
            M.toast({html: 'Esa fecha de reserva no está disponible, por favor seleccione otro día'})
           }else{
            M.toast({html: 'Reserva realizada correctamente para el día '+ this.form.date 
            +' a nombre de ' + this.form.clientFullname})
           }
        }else{
          M.toast({html: 'Error de validación, por favor compruebe los datos.'});
        }
      }).catch((err) => {
        console.error(err);
      })
    },
    changePrice(){
      if(isNaN(this.form.numberClients) || this.form.numberClients==""){
        M.toast({html: "Seleccione un número de personas válido para ver el precio final"});
      }else{
        let pricePerClient = 0;
        this.cabins.forEach(cabin => {
          if(cabin.id == this.form.cabin_id){
            pricePerClient = cabin.price;
          }
        });
        this.form.subtotal = this.form.numberClients * pricePerClient;
      }
    }

  },//TODO Que te deje poner solo el número de personas permitido por cabina de reserva y no menos o más
  beforeCreate: function(){
      axios.post('/api/reservation/cabins').then((result) => {
        if(result.data.status === "success"){
          this.cabins = result.data.data;
        }
      }).catch((err) => {
        console.error(err);
      })
  }
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
