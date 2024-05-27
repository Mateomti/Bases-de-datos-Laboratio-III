<?php
include('validar_sesion.php');

$_SESSION['user'] = null;
// Destruye todas las variables de sesión
$_SESSION = array();

// Finalmente, destruye la sesión
session_destroy();

header("Location: ../index.html");
exit();
?>