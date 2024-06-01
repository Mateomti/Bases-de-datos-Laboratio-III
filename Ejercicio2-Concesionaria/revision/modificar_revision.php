<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_GET['cod'];
$a = "SELECT * from auto";
$aut = mysqli_query($con, $a);


$sql = "SELECT R.* from revision R
where cod_revision = $cod";
$res = mysqli_query($con, $sql);
$vector = mysqli_fetch_array($res);
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
        
  <div class="reg_revision">
      <form
        class="formulario"
        action="procesar_mod_revision.php"
        method="post"
        onsubmit="return validarFechas(event);"
      >
        <h1>Modificar revision</h1>
        <fieldset class="codigo">
          <legend class="otro-legend">ID de la revision</legend>
          <?php echo'<input type="text" id="cod" name="cod" value="'.$vector[0].'" readonly/>';?>
        </fieldset>  
        <br>
        <fieldset>
          <legend class="otro-legend">Fecha de ingreso -------- Fecha de egreso</legend>
          <?php echo'<input type="date" id="ingreso" value="'.$vector[1].'" name="ingreso" required/>'; ?>
          <?php echo'<input type="date" id="egreso" value="'.$vector[2].'" name="egreso" required/>'; ?>
        </fieldset>  
        
        <fieldset class="auto">
          <legend>Ingrese el auto </legend>
          <select class="select-auto" name="auto" id="auto">
            <?php
            while ($autos = mysqli_fetch_array($aut)){
              if ($autos[1] == $vector[8]){
                echo"<option value='$autos[0]'>$autos[1] - $autos[2]</option>";
                }
                else{
                echo"<option selected='' value='$autos[0]'>$autos[1] - $autos[2]</option>";
                }
              }
            ?>
          </select>
        </fieldset> 
        <fieldset >
          <legend>Ingrese el estado</legend>
          <select class="estado" name="estado" id="estado">
            <?php
              if ($vector[3] == "En espera"){
              echo"<option selected='' value='En espera'>En espera</option>
              <option value='En revision'>En revision</option>
              <option value='Finalizado'>Finalizado</option>";
              }
              if ($vector[3] == "En revision"){
                echo"<option  value='En espera'>En espera</option>
                <option selected='' value='En revision'>En revision</option>
                <option value='Finalizado'>Finalizado</option>";
              }
              if ($vector[3] == "Finalizado"){
                  echo"<option  value='En espera'>En espera</option>
                  <option value='En revision'>En revision</option>
                  <option selected='' value='Finalizado'>Finalizado</option>";
              }
            ?>
          </select>
        </fieldset>  
        <fieldset>
        <legend>Cambio de aceite</legend>
              <?php
              if ($vector[4] === "Si"){
                  echo'<input class="radio" checked type="radio" id="aceite-si" name="aceite" value="Si">
                  <label for="aceite-si" class="btn">Si</label>
                  <input  class="radio" type="radio" id="aceite-no" name="aceite" value="No">
                  <label for="aceite-no" class="btn">No</label>';
              }else{
                echo'<input class="radio"  type="radio" id="aceite-si" name="aceite" value="Si">
                <label for="aceite-si" class="btn">Si</label>
                <input  class="radio" checked type="radio" id="aceite-no" name="aceite" value="No">
                <label for="aceite-no" class="btn">No</label>';
              }
              ?>
        </fieldset>
        <fieldset>
        <legend>Cambio de filtro</legend>
            <?php
              if ($vector[5] === "Si"){
                  echo'<input class="radio" checked type="radio" id="filtro-si" name="filtro" value="Si">
                  <label for="filtro-si" class="btn">Si</label>
                  <input  class="radio" type="radio" id="filtro-no" name="filtro" value="No">
                  <label for="filtro-no" class="btn">No</label>';
              }else{
                echo'<input class="radio"  type="radio" id="filtro-si" name="filtro" value="Si">
                  <label for="filtro-si" class="btn">Si</label>
                  <input  class="radio" checked type="radio" id="filtro-no" name="filtro" value="No">
                  <label for="filtro-no" class="btn">No</label>';
              }
              
              ?>
          
        </fieldset>
        <fieldset>
        <legend>Cambio de freno</legend>
              <?php
              if ($vector[6] === "Si"){
                  echo'<input class="radio" checked type="radio" id="freno-si" name="freno" value="Si">
                  <label for="freno-si" class="btn">Si</label>
                  <input  class="radio" type="radio" id="freno-no" name="freno" value="No">
                  <label for="freno-no" class="btn">No</label>';
              }
              else{
                echo'<input class="radio" type="radio" id="freno-si" name="freno" value="Si">
                  <label for="freno-si" class="btn">Si</label>
                  <input  class="radio" checked type="radio" id="freno-no" name="freno" value="No">
                  <label for="freno-no" class="btn">No</label>';
              }
              ?>
          
        </fieldset>
        <fieldset class="text-field">
          <legend>Descripcion</legend>
          <?php echo'<textarea name="descripcion" id="descripcion">'.$vector[7].'</textarea>'; ?>
        </fieldset> 
        <input class="s-reg" type="submit" value="Registrar" />
        <input class="b-reg" type="reset" value="Borrar" />
      </form>
    </div>
    
</body>
</html>