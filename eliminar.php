<?php
require_once "php/connect.php";
if(isset($_GET['id'])){
$id=$_GET['id'];
$query="Delete from usuario Where id='$id'";
if(consultarSQL($query)){
echo "Registro eliminado";
}else{
echo "No se pudo eliminar el registro";
}
}else {
echo "Error no se pudo procesar la petición";
}
?>