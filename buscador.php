!DOCTYPE html>
<html Lang="es">
<head>
<meta charset="utf-8">
<title>Buscador</title>
</head>
<body>
<form class="" action="buscador.php" method="post" autocomplete="off">
<input type="text" name="palabra" placeholder="¿Qué estas buscando?">
<input type="submit" name="" value="Buscar"></form>
<?php
if(isset($_POST['palabra'])){
require_once "php/connect.php";
require_once "procesos/buscar.php";
}
?>
</body>
</html>