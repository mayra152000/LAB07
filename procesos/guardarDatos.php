<?php
require_once("../php/connect.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$clave=md5($_POST['clave']);
$query=" INSERT INTO usuario (Nombre,Apellido,Email,Clave) VALUES ('$nombre','$apellido','$email','$clave')";
if(consultarSQL($query)){
echo "Datos guardados";
}else{
echo "Ocurrió un error";
}
?>