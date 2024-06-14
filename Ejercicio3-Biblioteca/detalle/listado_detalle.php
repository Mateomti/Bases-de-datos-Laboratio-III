<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listado detalle</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="conteiner">
      <ul class="nav-bar">
          <a href="../index.php">Inicio  <br> <br> <br></a>
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
                  <li><a href="reg_detalle.php">Registrar</a></li>
                  <li><a href="listado_detalle.php">Listado</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Reparacion</a>
              <ul class="items">
                  <li><a href="../reparacion/reg_reparacion.php">Registrar</a></li>
                  <li><a href="../reparacion/listado_reparacion.php">Listado</a></li>
              </ul>
          </li>
          <div class="footer">
              <a href="../../menu.php">Menu Principal <br><br></a>
              <a href="../../cerrar_sesion.php">Cerrar Sesion</a>
          </div>
      </ul> 
    </div>
    <?php
    include('../conexion.php');
        $sql = "SELECT D.*, L.cod_libro, L.titulo, S.cod_socio, S.nomyape, P.cod_prestamo, P.cod_socio 
                FROM detalleprestamo D, libro L, socio S, prestamo P
                WHERE P.cod_socio = S.cod_socio
                AND D.cod_prestamo = P.cod_prestamo
                AND D.cod_libro = L.cod_libro";
        $res = mysqli_query($con, $sql);
        
    if($res == false){
        echo"error";
    }else{
    ?>
    <div class="formulario">
        <table class="tabla">
            <tr>
                <td>Prestamo / Socio</td>
                <td>Libro</td>
                <td>Observaciones</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
            <?php
            while($vec = mysqli_fetch_array($res)){
            echo"<tr>";
            echo"<td>$vec[8] - $vec[7]</td>";
            echo"<td>$vec[5]</td>";
            echo"<td>$vec[3]</td>";
            echo"<td><a href='mod_detalle.php?cod=$vec[0]'>Modificar</a></td>";
            echo"<td><a href='eliminar_detalle.php?cod=$vec[0]' onclick='return confirmar();'>Eliminar</a></td>";
            echo"</tr>";}echo"</table>";}
            
        ?>
    </div>
</body>
</html>