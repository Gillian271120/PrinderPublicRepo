<template>
  <div class="content">
    <div class="head">
      <img
        class="head_img"
        src="https://www.xtresmataro.com/wp-content/uploads/2017/06/karaoke-xtres-02.jpg"
        alt="Servicios"
      />
      <h1 class="head_text">Nuestros Servicios</h1>
    </div>
    <div class="services">
      <div class="service">
        <img
          class="service_img"
          src="https://www.canexel.es/wp-content/uploads/2015/02/sala-de-cine.jpg"
          alt="Sala de película"
        />
        <div class="service_text">
          <h5>Salas de películas</h5>
          <p>
            ¿Necesitas zonas privadas para disfrutar una película con tus amigos
            o familia? Tenemos salas de cine donde ofrecemos total privacidad y
            comodidad en toda la estancia.
          </p>
          <a href="/reservation">Reservar</a>
        </div>
      </div>
      <div class="service">
        <img
          class="service_img"
          src="https://chinalati.com/wp-content/uploads/2013/08/ktv.jpg"
          alt="Sala de karaoke"
        />
        <div class="service_text">
          <h5>Salas de karaoke</h5>
          <p>
            ¿Tienes ganas de pasar un buen rato con tus amigos cantantes? No
            dudes en pasarte por nuestras salas de karaoke, donde ofrecemos
            cabinas de todos los tamaños y lo último en la tecnología de canto y
            de servicio a mesa.
          </p>
          <a href="/reservation">Reservar</a>
        </div>
      </div>
      <div class="service">
        <img
          class="service_img"
          src="https://img.travesiasdigital.com/2018/02/Captura-de-pantalla-2018-02-09-a-las-12.18.27.png"
          alt="Máquinas expendedoras"
        />
        <div class="service_text">
          <h5>Máquinas expendedoras</h5>
          <p>
            Nuestras máquinas expendedoras te dejarán cubierto de cultura y
            sabores del exterior, no dudes en pasarte por la tienda para probar
            nuestros "cookies" sabor menta choco, nuestra más última
            adquisición.
          </p>
          <a href="/products">Ver productos</a>
        </div>
      </div>
      <!-- <div class="service"></div> -->
    </div>
  </div>
</template>

<script>
export default {
  name: "Services",
};
</script>


<style scoped>
@media screen and (min-width: 992px) {
  .head_text {
    font-size: 70px;
  }
  .service {
    flex-direction: row;
    height: 530px;
  }
  .service_img {
    min-width: 50%;
    height: 100%;
  }
  .service_text {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 80px 100px;
    color: white;
  }
  .service_text h5 {
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: underline double;
    letter-spacing: 1px;
  }
  .service_text p {
    font-size: 18px;
    margin-top: 48px;
    text-align: center;
  }
  .service_text a {
    color: white;
    margin-top: 80px;
    width: 50%;
    height: 48px;
    text-transform: uppercase;
    font-weight: bold;
    background-color: darkgrey;
    text-align: center;
    line-height: 44px;
  }
  .service:nth-of-type(2) {
    flex-direction: row-reverse;
  }
  /* .service:last-of-type {
    height: 200px;
  } */
}

@media screen and (max-width: 991px) {
  .head_text {
    font-size: 40px;
  }
  .service {
    flex-direction: column;
    height: 750px;
  }
  .service_img {
    min-width: 100%;
    height: 40%;
  }
  .service_text {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 30px 50px;
    color: white;
  }
  .service_text h5 {
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: underline double;
    letter-spacing: 1px;
    text-align: center;
  }
  .service_text p {
    font-size: 16px;
    margin-top: 40px;
    text-align: center;
    min-height: 144px;
    height: 144px;
  }
  .service_text a {
    color: white;
    margin-top: 45px;
    width: 50%;
    height: 48px;
    text-transform: uppercase;
    font-weight: bold;
    background-color: darkgrey;
    text-align: center;
    line-height: 44px;
  }
}

.content {
  display: flex;
  flex-direction: column;
  width: 100%;
}
.head {
  height: 390px;
  display: flex;
  justify-content: center;
  align-items: center;
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
  font-weight: bold;
  letter-spacing: 2px;
}
.services {
  display: flex;
  flex-direction: column;
  width: 100%;
}
.service {
  display: flex;
  width: 100%;
  background-color: currentColor;
}
.service_img {
  object-fit: cover;
}
</style>