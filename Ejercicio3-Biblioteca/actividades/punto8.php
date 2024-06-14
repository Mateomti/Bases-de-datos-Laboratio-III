<!DOCTYPE html>
<html lang="es">
<head>
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
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
                <ul class="items">
                    <li><a href="punto8.php">Punto 8</a></li>
                    <li><a href="punto9.php">Punto 9</a></li>
                </ul>
            </li>
          <div class="footer">
              <a href="../../menu.php">Menu Principal <br><br></a>
              <a href="../../cerrar_sesion.php">Cerrar Sesion</a>
          </div>
      </ul> 
    </div>
    <body>
      
    <?php
    include('../conexion.php');

    $sql = "SELECT * FROM socio";
    $res1 = mysqli_query($con,$sql);
    if($res1 == true){
      ?>
      <form class="formulario" action="" method="post">
        <table class="tabla">
          <tr>
            <td>
              <select name="socio" id="socio">
              <?php
            while($vec = mysqli_fetch_array($res1)){
              echo"<option value='$vec[0]'>$vec[1]</option>";
            }echo"</select>";
            echo"</td>";
          echo"</tr>";
      }?>
      <tr>
        <td>
        <button type="submit" name="buscar" id="buscar" >Buscar</button>
        </td>
      </tr>
      </table>
      </form>
      <?php
      if (isset($_POST['buscar'])==true){
        $socio = $_POST['socio'];
        $cons ="SELECT L.*, D.cod_libro, P.cod_socio, S.nomyape, S.cod_socio
                FROM libro L, detalleprestamo D, prestamo P, socio S
                WHERE L.cod_libro = D.cod_libro
                AND P.cod_prestamo = D.cod_prestamo
                AND P.cod_socio = $socio
                AND S.cod_socio = $socio";
        $res = mysqli_query($con, $cons);
        if ($res == false){
          echo "
          <script> alert ('No se han encontrado libros prestados a ese socio');
          window.location.href = '../index.php';
          </script>";
        }else{
            ?>
            <div class="formulario">
                <table class="tabla" >
                <tr>
                    <th>Titulo</th>
                    <th>Editorial</th>
                    <th>Edicion</th>
                    <th>Idioma</th>
                    <th>Paginas</th>
                    <th>Estado</th>
                    <th>Socio</th>
                </tr>
                <?php
                while($vec = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>$vec[1]</td>";
                echo "<td>$vec[2]</td>";
                echo "<td>$vec[3]</td>";
                echo "<td>$vec[4]</td>";
                echo "<td>$vec[5]</td>";
                echo "<td>$vec[6]</td>";
                echo "<td>$vec[9]</td>";
                echo "</tr>";
            }echo "</table>";
        }
      }
    ?>
    

</body>
</html>