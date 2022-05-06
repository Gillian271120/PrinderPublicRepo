<main role="main" class="inner cover text-center">
  <h1 class="cover-heading">Bienvenido a la página de inicio </h1>
  <p class="lead">Tienes las opciones de administración en el menú de navegación o adjuntadas aquí debajo:</p><br>
  <p class="lead">
  <ul>
    <li> <a href="<?= $this->Url->build('/cabins') ?>">Cabinas</a>
    </li>
    <li> <a href="<?= $this->Url->build('/reservations') ?>">Reservas</a>
    </li>
    <li> <a href="<?= $this->Url->build('/products') ?>">Productos</a>
    </li>
    <li> <a href="<?= $this->Url->build('/clients') ?>">Clientes</a>
    </li>
    <li> <a href="<?= $this->Url->build('/users') ?>">Usuarios</a>
    </li>
    <li> <a href="<?= $this->Url->build('/logout') ?>">Cerrar sesión</a>
    </li>
  </ul>
  </p>
</main>