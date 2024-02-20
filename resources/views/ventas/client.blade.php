<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrar Venta</title>
    <link rel="stylesheet" href="ventasview/css/estilos_nueva_venta.css" />
    <link rel="stylesheet" href="css/estilosbarra.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/41bcea2ae3.js"
      crossorigin="anonymous"
    ></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    @livewireStyles
    @stack('styles')
  </head>
  <body id="body">
    <header>
      <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
      </div>
    </header>
    <div class="menu__side" id="menu_side">
      <div class="name__page">
        <i><img class="logos" src="ventasview/img/Logo.png" alt="" /></i>
      </div>

      <div class="options__menu">
        <a href="Accesos Directos.html">
          <div class="option">
            <i class="bx bxs-home"></i>
            <h4>Inicio</h4>
          </div>
        </a>

        <a href="Productos.html">
          <div class="option">
            <i class="bx bxs-package" title="productos"></i>
            <h4>Productos</h4>
          </div>
        </a>

        <a href="Compras.html">
          <div class="option">
            <i class="bx bxs-dollar-circle" title="compras"></i>
            <h4>Compras</h4>
          </div>
        </a>

        <a href="Usuario.html">
          <div class="option">
            <i class="bx bxs-user-detail" title="usuarios"></i>
            <h4>Usuarios</h4>
          </div>
        </a>

        <a href="Ventas.html" class="selected">
          <div class="option">
            <i class="bx bxs-business" title="ventas"></i>
            <h4>Ventas</h4>
          </div>
        </a>

        <a href="Informes.html">
          <div class="option">
            <i class="bx bxs-notepad" title="Informes"></i>
            <h4>Informes</h4>
          </div>
        </a>
      </div>
    </div>
    <script src="js/acceso.js"></script>
    <br />
    <main>
      @yield('content')
    </main>
    @livewireStyles
    @stack('scripts')
  </body>
</html>