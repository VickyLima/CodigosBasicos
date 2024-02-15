
<?php
function menu()
{
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
  <menu class="clearfix">
  <div class="logo fab fa-hooli"></div>
  <ul class="main-menu clearfix">
  <link rel="stylesheet" href="estiloo.css">
  <title>Home</title>
</head>

    <li>
      <a href="#">Inicio</a>
      <div class="dropdown clearfix">
    
    <li>
      <a href="#">Servicios</a>
      <div class="dropdown clearfix">
        <ul>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Información</a></li>
          <li><a href="#">Ofertas</a></li>
        </ul>
    <li>
      <a href="#">Catalogos</a>
      <div class="dropdown clearfix">
        <ul>
          <li><a href="#">Catalogos</a></li>
          <li><a href="#">Marcas</a></li>
          <li><a href="#">Modelos</a></li>
          <li><a href="#">Color</a></li>
        </ul>
      </div>
    </li>
    <li>
      <a href="#">Contacto</a>
      <div class="dropdown clearfix">
        <ul>
          <li><a href="#">Contactanos</a></li>
          <li><a href="#">Ubicación</a></li>
          <li><a href="#">Mensaje</a></li>
        </ul>
          </div>
    </li>
    <li>
      <a href="#">Perfil</a>
      <div class="dropdown clearfix">
        <ul>
        <li><a href="#">Perfil</a></li>
          <li><a href="#">Cofiguración</a></li>
          <li><a href="#">Cerrar Sesión</a></li>
        </ul>
      </div>
    </li>
    <li class="search fa fa-search"></li>
  </ul>
</menu>
<?php
}
?>