<template>
  <div class="home-picture">
    <img
      class="picture-image"
      src="https://bwgroup.es/wp-content/uploads/2016/06/cin3.jpg"
      alt="Sala Karaoke"
    />
    <p class="picture-text">Prinder</p>
    <a href="#content" class="picture-icon">
      <span class="material-icons">arrow_downward</span>
    </a>
  </div>
  <div class="col s12 orange lighten-5 center" id="content">
    <h4>Reservas</h4>
    <p>
      Nuestras vidas nunca han sido tan ajetreadas. ¡Y es increíble como las
      cosas más pequeñas pueden ocupar todo nuestro tiempo! Reservar tu próxima
      cita no debería ser uno de esos casos. Por eso, puedes hacer una reserva
      en el momento que quiera directamente a través de nuestra página web.
    </p>
    <button><a href="/reservation">Solicitar reserva</a></button>
  </div>
</template>

<script>
import axios from "../plugins/axios";
export default {
  name: "Home",
  props: {},
  data() {
    return {
      title: "Default title",
    };
  },
  methods: {
    handle(value) {
      this[value.action]();
    },
    /**
     * Method to make a petition to register a user based on data
     */
    register() {
      axios
        .post("/api/auth/register", this.form)
        .then((result) => {
          console.log(result);
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
  created:
    /**
     * Example function for API practice
     */
    function () {
      axios
        .post("/api/home/data" /*Para enviar datos :  , this.title  */)
        .then((result) => {
          console.log(result);
          this.title = result.data.data.title;
        })
        .catch((err) => {
          console.error(err);
        });
    },
};
window.CookieConsent.init();
</script>

<style scoped>
@media screen and (min-width: 992px) {
  .picture-image {
    height: 830px;
  }
  .picture-text {
    top: 170px;
    font-size: 70px;
    width: 70%;
  }
  .picture-icon {
    top: 590px;
  }
}

@media screen and (max-width: 991px) {
  .picture-image {
    height: 645px;
  }
  .picture-text {
    top: 95px;
    font-size: 50px;
    width: 100%;
  }
  .picture-icon {
    top: 430px;
  }
}

.home-picture {
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
}

.picture-image {
  display: flex;
  margin-top: -64px;
  position: relative;
  z-index: 0;
  width: 100%;
  object-fit: cover;
}

.picture-text {
  background-color: black;
  color: white;
  position: absolute;
  z-index: 1;
  padding: 40px 0px;
  margin: unset;
  font-weight: bold;
  opacity: 85%;
  text-align: center;
  border: white solid;
  border-width: 4px 0;
  text-transform: uppercase;
}

.picture-icon {
  position: absolute;
  color: white;
  z-index: 1;
  font-size: 36px;
}

.picture-icon .material-icons {
  font-size: 36px;
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

div[class*="center"] {
  padding: 3vh 25% 12vh 25%;
  text-align: center;
  margin-bottom: 0px;
}

div[class*="center"] h4 {
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
