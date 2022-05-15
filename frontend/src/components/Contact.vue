<template>
  <div class="content">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14029.104878417447!2d-16.251598!3d28.471227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cb7e2e0e638d%3A0x3e9e3ff7dceea794!2sCalle%20de%20Sta%20Rosal%C3%ADa%2C%2054%2C%2038002%20Santa%20Cruz%20de%20Tenerife%2C%20Espa%C3%B1a!5e0!3m2!1ses!2sus!4v1651826117676!5m2!1ses!2sus"
      width="100%"
      height="350"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      class="center-align"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
    <div class="contacts">
      <div class="contact">
        <h5>Dirección</h5>
        <p>Calle de Sta Rosalía, 54<br />Santa Cruz de Tenerife<br />España</p>
      </div>
      <div class="contact">
        <h5>Teléfono</h5>
        <p>922922922<br />622622622</p>
      </div>
      <div class="contact">
        <h5>Correo Electrónico</h5>
        <a>j@prinderenjoy.es</a>
        <br />
        <a>g@prinderenjoy.es</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Contact",
};
</script>

<style scoped>
@media screen and (min-width: 992px) {
  .contacts {
    width: 15%;
  }
}
@media screen and (max-width: 991px) {
  .contacts {
    flex-direction: column;
    align-items: center;
    width: 50%;
  }
  .contact {
    margin-bottom: 20px;
  }
}
iframe {
  margin: 10px 0 3px 0;
}
.contacts {
  height: 63vh;
  display: flex;
  width: 100%;
  justify-content: space-around;
  padding: 20px 0 50px 0;
  background-color: #fff4e2;
}
.contact {
  text-align: center;
}
.contact h5 {
  font-weight: bold;
  text-decoration: underline;
}
</style>