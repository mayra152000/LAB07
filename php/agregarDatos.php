<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=md5($_POST['telefono']);

	$sql="INSERT into usuario (Nombre,Apellido,Email,Clave)
								values ('$n','$a','$e','$t')";
	echo $result=mysqli_query($conexion,$sql);

 ?>