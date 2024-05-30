<?php
include('../../validar_sesion.php');
include('../conexion.php');
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
      <li><a href="../menu.php">Menu Principal</a></li>
      <li><a href="../cerrar_sesion.php">Cerrar sesion</a></li>
    </ul>
  </nav>
  
    <?php
      $sql = "SELECT * from cliente where 1";
      $res = mysqli_query($con, $sql);
      if ($res == false){
        echo"
          <script>
            alert('Actualmente no hay clientes cargados, Registre uno.');
            window.location.href = 'reg_cliente.php';
          </script>
          ";
      }
      else{
        ?>
        <table class="tabla-auto">
          <tr >
            <td class="titulo">Nombre y Apellido</td>
            <td class="titulo">Direccion</td>
            <td class="titulo">Ciudad</td>
            <td class="titulo">Telefono</td>
            <td class="titulo">Fecha de Alta</td>
            <td class="otros">Modificar</td>
            <td class="otros">Eliminar</td>
          </tr>
        <?php
        while ($vec = mysqli_fetch_array($res)){
          echo"<tr>"; 
          echo"<td>$vec[1]</td>
            <td>$vec[2]</td>
          <td>$vec[3]</td>
          <td>$vec[4]</td>
          <td>$vec[5]</td>
          <td><a href='modificar_cliente.php?cod=$vec[0]'>Modificar</a> </td>
          <td><center><a href='eliminar_cliente.php?cod=$vec[0]' onclick='return confirmar()'> Eliminar</a></center></center></td>";
          echo"</tr>";
        }echo"</table>";
        }
    ?>
    <script>
    function confirmar(){
      return confirm('¿Esta seguro que desea eliminar este auto?');
    }
  </script>
  
</body>
</html>