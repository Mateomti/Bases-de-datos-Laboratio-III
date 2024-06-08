<?php
include('../../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicio 2</title>
  <link rel="stylesheet" href="../style.css">
  <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="../js/funciones.js"></script>
  <script src="../js/funciones.js"></script>
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
            <li><a href="../clientes/reg_cliente.php">Registrar</a></li>
            <li><a href="../clientes/listado_cliente.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Revision</a>
        <ul class="navbar-vertical">
          <li><a href="reg_revision.php">Registrar</a></li>
          <li><a href="listado_revision.php">Listado</a></li>
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
  <?php
  include('../conexion.php');
  $sql = "SELECT R.*, C.cod_auto, C.marca, C.modelo from revision R, auto C where R.cod_auto = C.cod_auto";
  $res = mysqli_query($con, $sql);
  
  if ($res == false){
    echo"
    <script>
    alert('Actualmente no hay revisiones registradas, registre una.');
    window.location.href = 'reg_revision.php';
    </script>";
  }
  else{
    ?>
  <table class="tabla-auto">
    <tr>
      <td class="titulo">Ingreso</td>
      <td class="titulo">Egreso</td>
      <td class="titulo">Estado</td>
      <td class="titulo">Filtro</td>
      <td class="titulo">Aceite</td>
      <td class="titulo">Freno</td>
      <td class="otros">Descripcion</td>
      <td class="titulo">Auto</td>
      <td class="otros">Modificar</td>
      <td class="otros">Eliminar</td>
    </tr>
    <?php
    while($vec = mysqli_fetch_array($res)){
      echo "
      <tr>
        <td>{$vec[1]}</td>
        <td>{$vec[2]}</td>
        <td>{$vec[3]}</td>
        <td>{$vec[4]}</td>
        <td>{$vec[5]}</td>
        <td>{$vec[6]}</td>
        <td>{$vec[7]}</td>
        <td>{$vec[10]}-{$vec[11]}</td>
        <td><a href='modificar_revision.php?cod={$vec[0]}'>Modificar</a></td>
        <td><a href='eliminar_revision.php?cod={$vec[0]}' onclick='return confirmar()'>Eliminar</a></td>
      </tr>";
    }echo"</table>";}
    ?>
  
  
</body>
</html>