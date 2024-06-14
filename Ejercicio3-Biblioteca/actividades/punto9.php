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
        $fecha = new DateTime('2006-01-01');
        $fechaformateada = $fecha->format('Y-m-d');
        $cons ="SELECT S.*, P.cod_prestamo, D.cod_prestamo, L.* 
                FROM socio S, detalleprestamo D, prestamo P, libro L 
                WHERE S.fnacimiento > '2006-01-01' 
                AND S.cod_socio = P.cod_socio 
                AND D.cod_prestamo = P.cod_prestamo
                AND D.cod_libro = L.cod_libro";
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
                    <th>Titulo</th>
                    <th>Editorial</th>
                    <th>Edicion</th>
                    <th>Idioma</th>
                    <th>Paginas</th>
                    <th>Estado</th>
                    <th>Socio</th>
                    <th>Fecha de nacimiento</th>

                </tr>
                <?php
                while($vec = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>$vec[9]</td>";
                echo "<td>$vec[10]</td>";
                echo "<td>$vec[11]</td>";
                echo "<td>$vec[12]</td>";
                echo "<td>$vec[13]</td>";
                echo "<td>$vec[14]</td>";
                echo "<td>$vec[1]</td>";
                echo "<td>$vec[2]</td>";
                echo "</tr>";
            }echo "</table>";
        }
      
    ?>
    

</body>
</html>