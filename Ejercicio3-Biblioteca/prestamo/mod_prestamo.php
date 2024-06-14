<?php
include("../conexion.php");
$id = $_GET['id'];
$sql = "SELECT P.* FROM prestamo P, socio S
        WHERE P.cod_prestamo = $id";
$sql2 = "SELECT * FROM socio";
$res2 = mysqli_query($con,$sql2);
$res = mysqli_query($con, $sql);
$vec = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/funciones.js"></script>

    <link rel="stylesheet" href="../style.css">
    <title>Modificar Prestamo</title>
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
                    <li><a href="reg_prestamo.php">Registrar</a></li>
                    <li><a href="listado_prestamo.php">Listado</a></li>
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
            <div class="footer">
                <a href="../../menu.php">Menu Principal <br><br></a>
                <a href="../../cerrar_sesion.php">Cerrar Sesion</a>
            </div>
        </ul>
    </div>
    <form class="formulario" action="proc_mod.php" method="post">
      <table class="tabla">
        <tr>
          <td><label for="cod">Codigo del prestamo</label></td>
          <td><input type="number" name="cod" id="cod" value="<?php echo$vec[0];?>" readonly /></td>
        </tr>
        <tr>
          <td><label for="socio">Socio</label></td>
          <td>
            <select name="socio" id="socio">
              <?php
                while($vec1 = mysqli_fetch_array($res2)){
                  if($vec1[0] == $vec[1]){
                    echo"<option selected value='$vec1[0]'>$vec1[1]</option>";
                  }
                  else{
                    echo"<option  value='$vec1[0]'>$vec1[1]</option>";
                  }
                }
              ?>
            </select></td>
        </tr>
        <tr>
          <td><label for="ingreso">Fecha Prestamo</label></td>
          <td><input type="date" name="ingreso" id="ingreso" value="<?php echo$vec[2]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="egreso">Fecha Egreso</label></td>
          <td><input type="date" name="devolucion" id="devolucion" value="<?php echo$vec[3]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="estado">estado</label></td>
          <td>
            <input type="text" name="estado" id="estado" value="<?php echo$vec[4];?>"readonly/>
            <button type="button" name ="ver " id="ver" onclick="return Estado();">Ver</button>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <button type="submit">enviar</button>
              <button type="reset">reset</button>
            </center>
          </td>
        </tr>
      </table>
    </form>
    <br /><br /><br /><br />
  </body>
</html>