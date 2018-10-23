<?php

$email     = $_POST['email'];
$clave     = md5($_POST['clave']);
$query     = "Select * from usuario where email='$email' and clave='$clave'";
$consulta2 = consultarSQL($query);
if ($consulta2->num_rows >= 1) {
    $fila = $consulta2->fetch_array(MYSQLI_ASSOC);
    session_start();
    $_SESSION['user']      = $fila['Nombre'];
    $_SESSION['verificar'] = true;
    header("Location:seleccionar.php");
} else {
    echo "Los datos son incorrectos";
}
