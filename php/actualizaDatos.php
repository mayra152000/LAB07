<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=md5($_POST['telefono']);

	$sql="UPDATE usuario set Nombre='$n',
								Apellido='$a',
								Email='$e',
								Clave='$t'
				where Id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>