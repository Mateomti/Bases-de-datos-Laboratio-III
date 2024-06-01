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
  <?php
  include('../conexion.php');
  $sql = "SELECT C.nomyape, C.cod_cliente, A.* FROM auto A, cliente C where C.cod_cliente = A.cod_cliente";
  $res = mysqli_query($con, $sql);
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
      <td class="titulo">Cliente</td>
      <td class="otros">Modificar</td>
      <td class="otros">Eliminar</td>
    </tr>
    <?php
    while ($vector = mysqli_fetch_array($res)){
    echo"<tr>"; 
    echo"<td>$vector[3]</td>
        <td>$vector[4]</td>
      <td>$vector[5]</td>
      <td>$vector[6]</td>
      <td>$vector[0]</td>
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