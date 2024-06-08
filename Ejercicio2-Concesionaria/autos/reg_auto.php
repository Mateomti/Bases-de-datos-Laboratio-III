<?php
include('../../validar_sesion.php');
include('../conexion.php');
$sql = "SELECT * from cliente";
$res = mysqli_query($con, $sql);
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
            <li><a href="reg_auto.php">Registrar</a></li>
            <li><a href="listado_auto.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Cliente</a>
          <ul class="navbar-vertical">
            <li><a href="../clientes/reg_cliente.php">Registrar</a></li>
            <li><a href="../clientes/listado_cliente.php">Listado</a></li>
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
        class="formulario"
        action="procesar_auto.php"
        method="post"
      >
        <h1>Registro de autos</h1>
        <fieldset>
          <legend>Ingrese la marca </legend>
          <input type="text" id="marca" name="marca" required/>
        </fieldset>
        <fieldset>
          <legend>Ingrese el modelo  </legend>
          <input type="text" id="modelo" name="modelo" required/>
        </fieldset>  
        <fieldset>
          <legend>Ingrese el color</legend>
          <input type="text" id="color" name="color" required/>
        </fieldset>  
        <fieldset>
          <legend>Ingrese precio de venta</legend>
          <input type="number" id="precio" name="precio" required/>
        </fieldset> 
          <?php
          if ($res && mysqli_num_rows($res) > 0) {
              echo "<fieldset>
                      <legend>Ingrese al cliente</legend>
                      <select class='select-cliente' name='cliente' id='cliente'>";
              while ($vector = mysqli_fetch_array($res)) {
                  echo "<option value='$vector[0]'>$vector[1]</option>";
              }
              echo "</select>
                    </fieldset>
                    <input class='submit' type='submit' value='Registrar' />
                    <input class='borrar' type='submit' value='Borrar' />";
          } else {
              echo "<p>No se han registrado clientes.<br>Registre un <a href='../clientes/reg_cliente.php'>cliente aquí</a>!</p>";
          }
          ?>
      </form>
    </div>
  
</body>
</html>