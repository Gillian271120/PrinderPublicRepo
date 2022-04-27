<template>
  <div class="row">
    <div class="col s12 l3">
      <h3>Nuestros Servicios</h3>
    </div>
    <div class="col s12 l2">
      <img
        src="https://www.hola.com/imagenes/decoracion/20220211204137/montar-sala-cine-casa-decoracion-interiores-am/1-48-11/cine-en-casa-8m-m.jpg?filter=w360"
        alt="Sala de película"
      />
    </div>
    <div class="col s12 l6">
      <h5>Salas de películas</h5>
      <p>
        ¿Necesitas zonas privadas para disfrutar una película con tus amigos o
        familia? Tenemos salas de cine donde ofrecemos total privacidad y
        comodidad en toda la estancia.
      </p>
    </div>
    <div class="col l2">
      <img
        src="https://i.pinimg.com/736x/8f/fb/95/8ffb9544e0fc889c54ef841e789ebd4a.jpg"
        alt="Sala de karaoke"
      />
    </div>
    <div class="col l7">
      <h5>Salas de karaoke</h5>
      <p>
        ¿Tienes ganas de pasar un buen rato con tus amigos cantantes? No dudes
        en pasarte por nuestras salas de karaoke, donde ofrecemos cabinas de
        todos los tamaños y lo último en la tecnología de canto y de servicio a
        mesa.
      </p>
    </div>
    <div class="col l2">
      <img
        src="https://img.travesiasdigital.com/2018/02/Captura-de-pantalla-2018-02-09-a-las-12.18.27.png"
        alt="Máquinas expendedoras"
      />
    </div>
    <div class="col l7">
      <h5>Máquinas expendedoras</h5>
      <p>
        Nuestras máquinas expendedoras te dejarán cubierto de cultura y sabores
        del exterior, no dudes en pasarte por la tienda para probar nuestros
        "cookies" sabor menta choco, nuestra más última adquisición.
      </p>
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
  div[class*="l3"] {
    height: 100vh;
  }

  img {
    width: 10vw;
  }
}

div[class="row"] {
  background-color: #fff3e0;
}
</style>