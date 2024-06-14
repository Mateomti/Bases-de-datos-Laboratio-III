<?php
include('../conexion.php');

$cod = $_GET['cod'];

$sql1= "SELECT P.cod_prestamo, S.nomyape, S.cod_socio 
        FROM prestamo P, socio S 
        WHERE P.cod_socio = S.cod_socio";
$res1= mysqli_query($con,$sql1);

$sql2= "SELECT L.cod_libro, L.titulo, L.estado
        FROM libro L
        WHERE L.estado = 'prestado'";
$res2= mysqli_query($con,$sql2);
    
$sql = "SELECT D.* FROM detalleprestamo D
        WHERE D.cod_detalle = $cod";
$res = mysqli_query($con, $sql);
$vec = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css">
    <title>Detalle de Prestamos</title>
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
    <body>
    <form class="formulario" action="proc_mod_detalle.php" method="post">
      <table class="tabla">
      <tr>
          <td><label for="codigo">Codigo</label></td>
          <td><input type="number" name="codigo" id="codigo" value="<?php echo$vec[0]; ?>" readonly/></td>
        </tr>
        <tr>
          <td><label for="socio">Prestamo - Socio</label></td>
          <td><select name="socio" id="socio">
            <?php
              while($socios = mysqli_fetch_array($res1)){
                if($socios[0] == $vec[1]){
                  echo"<option selected value='$socios[0]'>$socios[0] - $socios[1]</option>";
                }
                else{
                  echo"<option  value='$socios[0]'>$socios[0] - $socios[1]</option>";
                }
              }
            ?>
          </select></td>
        </tr>
        <tr>
          <td><label for="libro">Libro</label></td>
          <td><select name="libro" id="libro">
            <?php
            while($libro = mysqli_fetch_array($res2)){
              if($libro[0] == $vec[2]){
                echo"<option selected value='$libro[0]'>$libro[1]</option>";
              }
              else{
                echo"<option  value='$libro[0]'>$libro[1]</option>";
              }
            }
            ?>
          </select></td>
        </tr>
        <tr>
          <td><label for="observacion">Observaciones</label></td>
          <td><input type="text" name="observacion" id="observacion" /></td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <button type="submit">Enviar</button>
              <button type="reset">Reset</button>
            </center>
          </td>
        </tr>
      </table>
    </form>


  </body>
</html>