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
      <h4 class="title">Informaciones de Contactos</h4>
      <div class="contact">
        <h5>Dirección</h5>
        <p>
          <span class="material-icons">place</span>
          Calle de Sta Rosalía, 54<br />Santa Cruz de Tenerife<br />España
          <span class="timetable">Horario de 13:00 a 03:00</span>
        </p>
      </div>
      <div class="contact">
        <h5>Teléfono</h5>
        <p>
          <span class="material-icons">call</span>922922922<br />622622622
          <span class="timetable">Horario de 13:00 a 00:00</span>
        </p>
      </div>
      <div class="contact">
        <h5>Correo Electrónico</h5>
        <p>
          <span class="material-icons">mail</span>
          <a>j@prinderenjoy.es</a>
          <a>g@prinderenjoy.es</a>
        </p>
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
  .contact p {
    height: 150px;
    flex-direction: column;
    align-items: center;
    gap: 70px;
    padding: 16px 60px;
    flex-direction: row;
  }
  .timetable {
    right: 60px;
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
  .title {
    text-align: center;
    line-height: 40px;
  }
  .contact h5 {
    text-align: center;
  }
  .contact p {
    height: auto;
    flex-direction: column;
    gap: 25px;
    padding: 25px 48px;
  }
  .timetable {
    display: none;
  } 
}
iframe {
  margin: 10px 0 3px 0;
}
.contacts {
  display: flex;
  flex-direction: column;
  width: 100%;
  background-color: #fff4e2;
  padding: 50px 0;
  gap: 40px;
}
.title {
  width: 80%;
  margin: 0 auto;
  font-weight: bold;
}
.contact {
  width: 80%;
  margin: 0 auto;
  position: relative;
}
.contact h5 {
  font-weight: bold;
  margin: unset;
  background: silver;
  color: white;
  padding: 16px 60px;
}
.contact p {
  background-color: white;
  margin: unset;
  display: flex;
  align-items: center;
  font-size: 20px;
  font-weight: bold;
}
.material-icons {
    color: mediumturquoise;
    font-size: 70px;
}
.timetable {
  font-size: 16px;
  color: silver;
  position: absolute;
  font-style: oblique;
}
</style>