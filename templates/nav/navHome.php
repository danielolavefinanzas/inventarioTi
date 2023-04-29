<!-- FONTS ICON GOOGLE  -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,800,0,0" />
<style>
  .material-symbols-outlined {
    font-variation-settings:
      'FILL'0,
      'wght'700,
      'GRAD'200,
      'opsz'48
  }
</style>
<nav class="responsive">
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
  </label>
  <label class="logo">Sistema de Gestión de Inventario TI</label>
  <img id="logoHpm" src="../logoHPM.jpg" alt="Foto Hpm">
  <ul class="nav">
    <li><a class="active" href="../../inventarioti/pantallas/home.php">Inicio</a></li>
    <li><a href="../pantallas/ingresarSerie.php">Registrar Guía</a></li>
    <li id="submenu"><a href="#">Ingresar Datos</a>
      <ul>
        <li><a href="../pantallas/ingresarMarca.php">Ingresar Marca</a></li>
        <li><a href="../pantallas/ingresarModelo.php">Ingresar Modelo</a></li>
        <li><a href="../pantallas/ingresarProveedor.php">Ingresar Proveedor</a></li>
        <li><a href="../pantallas/ingresarTipo.php">Ingresar Tipo equipo</a></li>
      </ul>
    </li>
  </ul>
  <li>
    <span style="display: flex; justify-content: center">
      <a class="btn btn-primary d-flex align-items-center" id="cerrar_sesion" href="/inventarioti/cerrarSesion/cerrarSesion.php">
        cerrar sesión <span class="material-symbols-outlined">mode_off_on</span></a>
    </span>
  </li>
</nav>