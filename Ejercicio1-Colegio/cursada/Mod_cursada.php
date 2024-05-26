<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../style.css">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/mod.js"></script>
  </head>
  <body class="bg-secondary">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Ejercicio 1</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Listado
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../alumno/ListadoAlumno.php">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/ListadoMateria.php">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="ListadoCursada.php">Cursada</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Registrar
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../alumno/reg_alumno.html">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/reg_materia.html">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="reg_cursada.php">Cursada</a></li>
              </ul>
            </li>
            
        </div>
      </div>
    </nav>
    <?php
      include("../conexion.php");
      $idc = $_GET['idc'];
      $sql = "SELECT * FROM cursada WHERE id_cursada = $idc";
      $res = mysqli_query($con, $sql);
      $vec = mysqli_fetch_array($res);


      $sql1 = "SELECT * FROM alumno";
      $res1 = mysqli_query($con, $sql1);
      $sql2 = "SELECT * FROM materia";
      $res2 = mysqli_query($con, $sql2);

      $prueba = "SELECT * FROM alumno, materia WHERE id_alumno = $vec[1] AND id_materia = $vec[2]";
      $pru = mysqli_query($con, $prueba);
      $vector = mysqli_fetch_array($pru);

    ?>

    <h1 class="titulo"><center>Modificar Cursada</center></h1>
    <form  method="post" action="Procesarmod_cursada.php">
      <table
      align="center"
      class="table table-bordered w-50">
    
      <tr>
        <td  height="40px">
            <label for="idc">ID Cursada</label>
        </td>
        <td  height="40px">
              <input name="idc" id="idc" value="<?php echo$idc?>" readonly>
        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="nombre">Alumno</label>
        </td>
        <td  height="40px">
              <select name="nombre" id="nombre">
                <?php

                while ($veca = mysqli_fetch_array($res1)){
                  if ($veca[3]==$vector[3]){
                  echo"<option value='$veca[0]' selected=''>$vector[3]</option>";

                  }else{
                    echo"<option  value='$veca[0]'>$veca[3]</option>";
                  }
                }
                ?>
              </select>
        </td>
    </tr>
    <tr>
      <td  height="40px">
          <label for="materia">Materia</label>
      </td>
      <td  height="40px">
              <select name="materia" id="materia">
              <?php
              while ($vecm = mysqli_fetch_array($res2)){
                if ($vecm[1]==$vector[10]){
                echo"<option value='$vecm[0]' selected=''>$vector[10]</option>";

                }else{
                  echo"<option  value='$vecm[0]'>$vecm[1]</option>";
                }
              }
                ?>
              </select>
        </td>
  </tr>
  <tr>
    <td  height="40px">
        <label for="n1">Primer Nota</label>
    </td>
    <td  height="40px">
        <input  type="number" name="n1" id="n1"  placeholder="Ingrese la primer nota" value="<?php echo$vec[3]?>" >
    </td>
  </tr>
  <tr>
    <td  height="40px">
      <label for="n2">Segunda Nota</label>
  </td>
  <td  height="40px">
      <input  type="number" name="n2" id="n2"  placeholder="Ingrese la segunda nota"  value="<?php echo$vec[4]?>">
  </td>
  </tr>
  <tr>
    <td  height="40px">
        <label for="asis"> % de Asistencia</label>
    </td>
    <td  height="40px">
        <input  type="number" name="asis" id="asis" placeholder="Ingrese el porcentaje de asistencia" value="<?php echo$vec[5]?>" >
    </td>
  </tr>
  <tr>
    <td  height="40px">
        <label for="estado">Estado</label>
    </td>
    <td  height="40px">
        <input type="text" value="Estado alumno" id="estado" name="estado" readonly>
        <input type="button" value="Ver estado" id="ver" name="ver">
    </td>
    <tr>
        <td colspan="2" 
        
        align="center">
        <center><input  type="submit"class="btn btn-outline-success"  value="Enviar">
            <input  type="reset" class="btn btn-outline-danger" value="Borrar"></center>
        </td>
    </tr>
    </table>
    </form>
  </body>
</html>