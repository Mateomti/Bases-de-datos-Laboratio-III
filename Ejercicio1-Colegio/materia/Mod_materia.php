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
                <li>
                  <a class="dropdown-item" href="../alumno/ListadoAlumno.php">Alumnos</a>
                </li>
                <li><hr class="dropdown-divider" /></li>

                <li>
                  <a class="dropdown-item" href="ListadoMateria.php">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../cursada/ListadoCursada.php">Cursada</a></li>
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
                <li>
                  <a class="dropdown-item" href="../alumno/reg_alumno.html">Alumnos</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="reg_materia.html">Materias</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../cursada/reg_cursada.php">Cursada</a></li>
              </ul>
            </li>
            
        </div>
      </div>
    </nav>
    <?php
    include("../conexion.php");

    $idm = $_GET["idm"];

    $sql = "SELECT * FROM materia WHERE id_materia =".$idm;
    $res = mysqli_query($con,$sql);
    $vec = mysqli_fetch_array($res);
    ?>
<h1 class="titulo"><center>Modifique la materia</center></h1>
<form method="post" action="ProcesarMod_materia.php">
      <table align="center"
      class="table table-bordered w-50">>
        <td>
          <div class="mb-3">
            <label for="idm" class="form-label">ID de la Materia</label>
            <input type="text" class="form-control" id="idm" name="idm" value="<?php echo$vec[0]?>" readonly>
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Materia</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo$vec[1]?>">
          </div>
          <div class="mb-3">
            <label for="hs" class="form-label">Ingrese la cantidad de horas</label>
            <input  type="number" name="hs" id="hs" min="1" max="100000" class="form-control"  value="<?php echo$vec[2]?>">
  
          </div>
          <div class="mb-3">
            <label for="corre" class="form-label">Tiene correlativas?</label>
            <select class="form-select" size="2" aria-label="Size 3 select example" id="corre" name="corre">
            <?php 
            if ($vec[3]=='si' || $vec[3]=='Si'){
              echo'<option value="Si" selected="" >Si</option>';
              echo'<option value="No">No</option>';
            }else{
              echo'<option value="Si" >Si</option>';
              echo'<option value="No" selected="" >No</option>';
            }
            
            ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="curso" class="form-label">Ingrese el curso al que pertenece</label>
            <select class="form-select" size="2" aria-label="Size 3 select example" name="curso" id="curso">
            <?php 
            if ($vec[4]==1){
              echo'<option value="1" selected="" >Curso 1</option>';
              echo'<option value="2">Curso 2</option>';
            }else{
              echo'<option value="1" >Curso 1</option>';
              echo'<option value="2" selected="" >Curso 2</option>';
            }
            
            ?>
            </select>
          </div>
          <center><input  type="submit"class="btn btn-outline-success"  value="Enviar">
            <input  type="reset" class="btn btn-outline-danger" value="Borrar"></center>
  
        </td>
      </table>
    </form> 
</body>


</html>