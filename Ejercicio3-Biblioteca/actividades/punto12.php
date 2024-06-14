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
      <?php
        include('../conexion.php');
        $hoy = new DateTime();
        $fecha = $hoy->format('Y-m-d');
        $cons ="SELECT P.*, S.*, L.*
                FROM prestamo P
                JOIN socio S ON P.cod_socio = S.cod_socio
                JOIN detalleprestamo D ON D.cod_prestamo = P.cod_prestamo
                JOIN libro L ON D.cod_libro = L.cod_libro
                WHERE P.fecha_devolucion > '$fecha'";
        $res = mysqli_query($con, $cons);
        if ($res == false){
          echo "
          <script> alert ('No se han encontrado socios menores de edad');
          window.location.href = '../index.php';
          </script>";
        }else{
            ?>
            <div class="formulario">
                <table class="tabla" >
                <tr>
                    <td>Prestamo</td>
                    <td>Socio</td>
                    <td>Libro</td>
                    <td>Fecha de prestamo</td>
                    <td>Fecha de devolucion</td>
                    <td>Estado</td>

                </tr>
                <?php
                while($vec = mysqli_fetch_assoc($res)) {
                  echo "<tr>";
                  echo "<td>{$vec['cod_prestamo']}</td>";
                  echo "<td>{$vec['nomyape']}</td>";
                  echo "<td>{$vec['titulo']}</td>";
                  echo "<td>{$vec['fecha_prestamo']}</td>";
                  echo "<td>{$vec['fecha_devolucion']}</td>";
                  echo "<td>{$vec['estado']}</td>"; 
                  echo "</tr>";
                }
                echo "</table>";
        }
      
    ?>
    

</body>
</html>