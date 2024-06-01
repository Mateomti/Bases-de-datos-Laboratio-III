<?php
include('../../validar_sesion.php');
include('../conexion.php');
$sql = "SELECT cliente.cod_cliente, cliente.nomyape from cliente where 1";
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
            $vec = mysqli_fetch_array($res);
            if ($vec != NULL){
              while ($vector = mysqli_fetch_array($res)){
                echo"
                <fieldset>
                  <legend>Ingrese al cliente</legend>
                  <select class='select-cliente' name='cliente' id='cliente'>
                    <option value='$vector[0]'>$vector[1]</option>
                  </select>
                </fieldset>
                ";
              }
              echo"<input class='submit' type='submit' value='Registrar' />
                <input class='borrar' type='submit' value='Borrar' />";
            }
            else{
              echo"<p>No hay clientes registrados</p>";
            }
            
            ?>
      </form>
    </div>
  
</body>
</html>