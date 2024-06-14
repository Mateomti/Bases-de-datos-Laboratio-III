<!DOCTYPE html>
<html lang="es">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
  <script type="text/javascript" src="../js/jquery-3.7.1.min.js" ></script>
  <script type="text/javascript" src="../js/funciones.js" ></script>
</head>
<body>
  <div class="conteiner">
    <ul class="nav-bar">
      <a href="../index.php">Inicio <br> <br> <br></a>
      <li>
          <a href="#">Libros</a>
          <ul class="items">
              <li><a href="../libros/reg_libro.php">Registrar</a></li>
              <li><a href="../libros/listado_libro.php">Listado</a></li>
          </ul>
      </li>
      <li>
          <a href="#">Socios</a>
          <ul class="items">
              <li><a href="../socio/reg_socio.php">Registrar</a></li>
              <li><a href="../socio/listado_socio.php">Listado</a></li>
          </ul>
      </li>
      <li>
          <a href="#">Prestamos</a>
          <ul class="items">
              <li><a href="../prestamo/reg_prestamo.php">Registrar</a></li>
              <li><a href="../prestamo/listado_prestamo.php">Listado</a></li>
          </ul>
      </li>
      <li>
          <a href="#">Detalle Prestamos</a>
          <ul class="items">
              <li><a href="../detalle/reg_detalle.php">Registrar</a></li>
              <li><a href="../detalle/listado_detalle.php">Listado</a></li>
          </ul>
      </li>
      <li>
          <a href="#">Reparacion</a>
          <ul class="items">
              <li><a href="../reparacion/reg_reparacion.php">Registrar</a></li>
              <li><a href="../reparacion/listado_reparacion.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Actividades</a>
        <ul class="acts">
          <li><a href="punto8.php">Punto 8</a></li>
          <li><a href="punto9.php">Punto 9</a></li>
          <li><a href="punto10.php">Punto 10</a></li>
          <li><a href="punto11.php">Punto 11</a></li>
          <li><a href="punto12.php">Punto 12</a></li>
          <li><a href="punto13.php">Punto 13</a></li>
          </ul>
      </li>
      <div class="footer">
          <a href="../../menu.php">Menu Principal <br><br></a>
          <a href="../../cerrar_sesion.php">Cerrar Sesion</a>
      </div>
    </ul> 
  </div>
<body>
  <form class="formulario" action="" method="POST">
    <table class="tabla">
      <tr>
        <td>
          <label for="estado">Ingrese el estado del libro</label>
          <select name="estado" id="estado">
            <option value="En Biblioteca">En Biblioteca</option>
            <option value="Prestado">Prestado</option>
            <option value="En Reparacion">En Reparacion</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="buscar" id="buscar" >Buscar</button>
          <button type="reset">Resetear</button>
        </td>
      </tr>
    </table>
  </form>
  <?php
  include('../conexion.php');
  if (isset($_POST['buscar'])==true){
    $estado = $_POST['estado'];
    $cons ="SELECT L.* 
            FROM libro L
            WHERE L.estado = '$estado'";
  $res = mysqli_query($con, $cons);
  if ($res === false){
    echo "
    <script> alert ('No se han encontrado libros en ese estado!');
    window.location.href = '../index.php';
    </script>";
  }
  else{
    ?>
    <div class="formulario">
      <table class="tabla">
        <tr>
          <td>Titulo</td>
          <td>Editorial</td>
          <td>Fecha de edicion</td>
          <td>Idioma</td>
          <td>Paginas</td>
          <td>Estado</td>
        </tr>
      <?php
      while($vec = mysqli_fetch_array($res)){
        echo"<tr>";
        echo"<td>$vec[1]</td>";
        echo"<td>$vec[2]</td>";
        echo"<td>$vec[3]</td>";
        echo"<td>$vec[4]</td>";
        echo"<td>$vec[5]</td>";
        echo"<td>$vec[6]</td>";
        echo"</tr>";
      }echo"</table></div>";
    }
  }

  ?>
</body>
</html>