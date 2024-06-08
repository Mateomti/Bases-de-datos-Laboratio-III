<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_GET['cod'];

$sql = "SELECT * from cliente where cod_cliente = $cod";
$res = mysqli_query($con, $sql);
$vector = mysqli_fetch_array($res);
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
            <li><a href="../auto/reg_auto.php">Registrar</a></li>
            <li><a href="../auto/listado_auto.php">Listado</a></li>
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
      <li>
        <a href="#">Actividades</a>
        <ul class="navbar-vertical-act">
          <li><a href="../actividades/punto1.php">Búsqueda y listado de revisiones </a></li>
          <li><a href="../actividades/punto2.php">Revisiones por cliente </a></li>
          <li><a href="../actividades/punto3.php">Revisiones por auto </a></li>
          <li><a href="../actividades/punto4.php">Revisiones no finalizadas </a></li>
        </ul>
      </li>
      <li><a href="../../menu.php">Menu Principal</a></li>
      <li><a href="../../cerrar_sesion.php">Cerrar sesion</a></li>
    </ul>
  </nav>
  <div class="mod">
      <form
        class="modificar"
        action="procesar_mod_cliente.php"
        method="post"
      >
        <h1>Modificacion de clientes</h1>
        <fieldset>
          <legend>Codigo del cliente</legend>
          <?php echo"<input type='number' id='cod' name='cod' readonly value='$vector[0]'"?>
        </fieldset>
        <fieldset>
          <legend>Ingrese un nuevo nombre </legend>
          <?php echo"<input type='text' id='nombre' name='nombre'  value='$vector[1]'"?>/>
        </fieldset>
        <fieldset>
          <legend>Ingrese una nueva direccion  </legend>
          <?php echo"<input type='text' id='direccion' name='direccion'  value='$vector[2]'"?>/>
        </fieldset>  
        <fieldset>
          <legend>Ingrese una nueva ciudad</legend>
          <?php echo"<input type='text' id='ciudad' name='ciudad'  value='$vector[3]'"?>/>
        </fieldset>  
        <fieldset>
          <legend>Ingrese un nuevo telefono</legend>
          <?php echo"<input type='number' id='telefono' name='telefono'  value='$vector[4]'"?>/>
        </fieldset>  
        <fieldset>
          <legend>Ingrese una nueva fecha de alta</legend>
          <?php echo"<input type='text' id='fecha' name='fecha'  value='$vector[5]'"?>/>
        </fieldset>  
        <input class="submit" type="submit" value="Modificar" />
        <input class="borrar" type="reset" value="Borrar" />
      </form>
    </div>
  
</body>
</html>