

<?php
error_reporting(0);
session_start();

$varsesion = $_SESSION["user"];

if ($varsesion == null || $varsesion = '') {
    echo 'usted no tiene autorizacion';
    die();

}

?>

<!DOCTYPE html>
<html Lang="es">
<head>
<meta charset="utf-8">
<title>Guardar datos</title>
</head>
<body>
<form action="./procesos/guardarDatos.php" method="post">
<label>Nombre</label><input type="text" name="nombre"><br><br>
<label>Apellido</label><input type="text" name="apellido"><br><br>
<label>E-mail</label><input type="email" name="email"><br><br>
<label>Clave</label><input type="password" name="clave"><br><br>
<input type="submit" value="Guardar">
</form>
</body></html>