<?php
include('../../validar_sesion.php');
include('../conexion.php');

$sql = "SELECT A.cod_auto, A.marca, A.modelo from auto A where 1";
$res = mysqli_query($con, $sql);
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
        action="procesar_revision.php"
        method="post"
        onsubmit="return validarFechas(event);"
      >
        <h1>Registro de revisiones</h1>
        <fieldset>
          <legend class="otro-legend">Fecha de ingreso -------- Fecha de egreso</legend>
          <input type="date" id="ingreso" name="ingreso" required/>
          <input type="date" id="egreso" name="egreso" required/>
        </fieldset>  
        <fieldset class="auto">
          
          <?php
          if ($res && mysqli_num_rows($res) > 0) {

              echo "
              <legend>Ingrese el auto </legend>
              <select class='select-auto' name='auto' id='auto'>";
              while ($vector = mysqli_fetch_array($res)) {
                  echo "<option value='$vector[0]'>$vector[1] - $vector[2]</option>";
              }
          } else {
              echo "<p>No se han registrado autos.<br>Registre un <a href='../autos/reg_auto.php'>auto aquí</a>!</p>";
          }
          ?>
          </select>
        </fieldset> 
        <fieldset >
          <legend>Ingrese el estado</legend>
          <select class="estado" name="estado" id="estado">
            <option value="En espera">En espera</option>
            <option value="En revision">En revision</option>
            <option value="Finalizado">Finalizado</option>
          </select>
        </fieldset>  
        <fieldset>
        <legend>Cambio de aceite</legend>
          <input class="radio" type="radio" id="aceite-si" name="aceite" value="Si">
          <label for="aceite-si" class="btn">Si</label>
          <input  class="radio" type="radio" id="aceite-no" name="aceite" value="No">
          <label for="aceite-no" class="btn">No</label>
        </fieldset>
        <fieldset>
        <legend>Cambio de filtro</legend>
          <input class="radio" type="radio" id="filtro-si" name="filtro" value="Si">
          <label for="filtro-si" class="btn">Si</label>
          <input  class="radio" type="radio" id="filtro-no" name="filtro" value="No">
          <label for="filtro-no" class="btn">No</label>
        </fieldset>
        <fieldset>
        <legend>Cambio de freno</legend>
          <input class="radio" type="radio" id="freno-si" name="freno" value="Si">
          <label for="freno-si" class="btn">Si</label>
          <input  class="radio" type="radio" id="freno-no" name="freno" value="No">
          <label for="freno-no" class="btn">No</label>
        </fieldset>
        <fieldset class="text-field">
          <legend>Descripcion</legend>
          <textarea name="descripcion" id="descripcion"></textarea>
        </fieldset> 
        <?php
          if ($res && mysqli_num_rows($res) > 0) {
            echo'<input class="s-reg" type="submit" value="Registrar" />
            <input class="b-reg" type="reset" value="Borrar" />';
            
          } 
        ?>
        
        
      </form>
    </div>
    
</body>
</html>