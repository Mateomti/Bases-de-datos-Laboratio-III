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
            <li><a href="reg_auto.php">Registrar</a></li>
            <li><a href="listado_auto.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Cliente</a>
          <ul class="navbar-vertical">
            <li><a href="#">Registrar</a></li>
            <li><a href="../listado_cliente.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Revision</a>
        <ul class="navbar-vertical">
          <li><a href="#">Registrar</a></li>
          <li><a href="../listado_revision.php">Listado</a></li>
        </ul>
      </li>
      <li><a href="../../menu.php">Menu Principal</a></li>
      <li><a href="../../cerrar_sesion.php">Cerrar sesion</a></li>
    </ul>
  </nav>
  <?php
  include('../conexion.php');
  $sql = "SELECT * FROM `auto` where 1";
  $res = mysqli_query($con, $sql);
  $vector = mysqli_fetch_array($res);
  if ($res == false){
    echo"
  <script>
    alert('Actualmente no hay autos cargados, Registre uno.');
    window.location.href = 'reg_auto.php';
  </script>
  ";
  }
  else{
    ?>
  <table class="tabla-auto">
    <tr >
      <td class="titulo">Marca</td>
      <td class="titulo">Modelo</td>
      <td class="titulo">Color</td>
      <td class="titulo">Precio Venta</td>
      <td class="otros">Modificar</td>
      <td class="otros">Eliminar</td>
    </tr>|
    <?php
    while ($vector = mysqli_fetch_array($res)){
    echo"<tr>"; 
    echo"<td>$vector[1]</td>
      <td>$vector[2]</td>
      <td>$vector[3]</td>
      <td>$vector[4]</td>
      <td><a href='modificar_auto.php?cod=$vector[0]'>Modificar</a> </td>
      <td><center><a href='eliminar_auto.php?cod=$vector[0]' onclick='return confirmar()'> Eliminar</a></center></center></td>";
    echo"</tr>";
    }echo"</table>";
  }?>
  <script>
    function confirmar(){
      return confirm('¿Esta seguro que desea eliminar este auto?');
    }
  </script>
  
</body>

</html>