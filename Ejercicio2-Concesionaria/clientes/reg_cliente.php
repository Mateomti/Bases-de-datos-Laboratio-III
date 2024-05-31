<?php
include('../../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicio 2</title>
  
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <nav>
    <ul class="navbar-horizontal">
      <li>
        <a href="../index.php">Inicio</a>
      </li>
      <li>
        <a href="#">Autos</a>
          <ul class="navbar-vertical">
            <li><a href="../autos/reg_auto.php">Registrar</a></li>
            <li><a href="../autos/listado_auto.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Cliente</a>
          <ul class="navbar-vertical">
            <li><a href="reg_cliente.php">Registrar</a></li>
            <li><a href="listado_cliente.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Revision</a>
        <ul class="navbar-vertical">
          <li><a href="../revision/reg_revision.php">Registrar</a></li>
          <li><a href="../revision/listado_revision.php">Listado</a></li>
        </ul>
      </li>
      <li><a href="../../menu.php">Menu Principal</a></li>
      <li><a href="../../cerrar_sesion.php">Cerrar sesion</a></li>
    </ul>
  </nav>
  <div class="login">
      <form
        class="formulario"
        action="procesar_cliente.php"
        method="post"
      >
        <h1>Registro de clientes</h1>
        <fieldset>
          <legend>Ingrese el nombre y apellido </legend>
          <input type="text" id="nombre" name="nombre" required/>
        </fieldset>
        <fieldset>
          <legend>Ingrese la direccion</legend>
          <input type="text" id="direccion" name="direccion" required/>
        </fieldset>  
        <fieldset>
          <legend>Ingrese la ciudad</legend>
          <input type="text" id="ciudad" name="ciudad" required/>
        </fieldset>  
        <fieldset>
          <legend>Ingrese el telefono</legend>
          <input type="number" id="telefono" name="telefono" required/>
        </fieldset>
        <fieldset>
          <legend>Ingrese la fecha de alta</legend>
          <input type="date" id="fecha" name="fecha" required/>
        </fieldset>  
        <input class="submit" type="submit" value="Registrar" />
      </form>
    </div>
  
</body>
</html>