<?php
include('../conexion.php');
include('../../validar_sesion.php');

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$cliente = $_POST['cliente'];


$sql = "INSERT into `auto` (marca, modelo, color, pventa, cod_cliente) values ('$marca','$modelo','$color',$precio, $cliente)";
$res = mysqli_query($con, $sql);

if ($res==true){
  echo"
  <script>
    alert('El auto ha sido registrado correctamente! ');
    window.location.href = 'listado_auto.php';
  </script>
  ";
}
?>