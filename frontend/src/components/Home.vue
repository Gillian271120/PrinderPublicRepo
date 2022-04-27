<template>
  <div class="col s12">
    <!-- <h1>{{title}}</h1> -->
    
    <!-- Si cambias el tamaño del navegador y el carrusel se distorciona
    no te asustes, actualiza la página  -->
    <div class="carousel carousel-slider">
      <i class="medium material-icons">chevron_left</i>
      <a class="carousel-item" href="/services"><img src="https://japonpop.japonshop.com/wp-content/uploads/2017/10/expendedora11.png"></a>
      <a class="carousel-item" href="/services"><img src="https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2019/10/04/15702177059724.jpg"></a>
      <a class="carousel-item" href="/services"><img src="https://es.bam-karaokebox.com/build/images/bam-karaoke-box-concept-salles-privees-karaoke.jpg"></a>
      <a class="carousel-item" href="/services"><img src="https://bwgroup.es/wp-content/uploads/2016/06/cin3.jpg"></a>
      <i class="medium material-icons" id="chevron_right">chevron_right</i>
    </div>
  </div>
  <div class="col s12 orange lighten-5 center">
    <h4>Reservas</h4>
    <p>Nuestras vidas nunca han sido tan ajetreadas. ¡Y es increíble como las cosas más pequeñas pueden ocupar todo nuestro tiempo! Reservar tu próxima cita no debería ser uno de esos casos. Por eso, puedes hacer una reserva en el momento que quiera directamente a través de nuestra página web.</p>
    <button><a href="/reservation">Solicitar reserva</a></button>
  </div>
</template>

<script>
import axios from "../plugins/axios";
import M from "materialize-css";
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
};

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.carousel');
  // var instance = M.Carousel.init(elems, {
  // indicators: true,
  // fullWidth: true,
  // });
  M.Carousel.init(elems, {
  indicators: true,
  fullWidth: true,
  });
});

</script>

<style scoped>
  @media screen and (min-width: 992px){
    div[class*="carousel"] {
      max-height: 80vh;
      max-width: 60vw;
      margin: 6vh auto 6vh auto;
    }
    img {
      min-height: 60vh;
    }
  }

  @media screen and (max-width: 991px) {
    div[class*="carousel"] {
      margin: 4vh auto 4vh auto;
    }
    img {
      min-height: 38vh;
      max-height: 38vh;
    }
  }

  i {
    position: relative;
    z-index: 3;
  }

  div[class*="carousel"] {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    z-index: 2;
  }

  div[class*="center"]{
    padding: 3vh 25% 12vh 25%;
    text-align: center;
    margin-bottom: 0px;
  }

  div[class*="center"] h4{
    font-weight: bold;
    margin-bottom: 40px;
  }

  div[class*="center"] button {
   background-color: black;
   margin-top: 25px;
   padding: 5px 15px;
   border-radius: 1em;
  }

  div[class*="center"] button a {
    color: white;
  }

</style>
