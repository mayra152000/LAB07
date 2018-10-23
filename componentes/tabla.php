
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
 
 

<div class="row" background="imagenes/fondo2.jpg"    >
	<div class="col-sm-12">
	<font color="white"><h2 class= "letra"> USUARIOS</h2> </font> 
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				<font color="white">Nuevo Usuario </font>
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Email</td>
				<td>Contraseña</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT * from usuario where Id='$idp'";
					}else{
						$sql="SELECT * 
						from usuario ";
					}
				}else{
					$sql="SELECT * 
						from usuario";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>