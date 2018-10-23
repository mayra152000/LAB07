<?php
error_reporting(0);
session_start();

unset($_SESSION['consulta']);
$varsesion = $_SESSION["user"];

if ($varsesion == null || $varsesion = '') {
    echo 'usted no tiene autorizacion';
    die();

}

?>








<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Tabla de usuarios</title>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">


  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
  <style type="text/css">
  td {
    color:white;
    background-color:#3F4740
     }
a
{
    color:white;
    background-color:#3F4740;
    width:100px;
     }

  </style>


</head>




<body background="imagenes/fondo2.png">

  <div class="container">
    <div id="buscador"></div>
    <div id="tabla"></div>
  </div>
    <a  style="text-align: center;"    href="cerrarseccion.php">Cerrar Sesion</a>

  <!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
          <label>Nombre</label>
          <input type="text" name="" id="nombre" class="form-control input-sm" required>
          <label>Apellido</label>
          <input type="text" name="" id="apellido" class="form-control input-sm" required>
          <label>Email</label>
          <input type="email" name="" id="email" class="form-control input-sm" required>
          <label>Contraseña</label>
          <input type="password" name="" id="telefono" class="form-control input-sm" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>

      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idpersona" name="">
          <label>Nombre</label>
          <input type="text" name="" id="nombreu" class="form-control input-sm">
          <label>Apellido</label>
          <input type="text" name="" id="apellidou" class="form-control input-sm">
          <label>Email</label>
          <input type="text" name="" id="emailu" class="form-control input-sm">
          <label>Contraseña</label>
          <input type="text" name="" id="telefonou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){

    $('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');


  });
</script>

<script type="text/javascript">
    $(document).ready(function(){


        $('#guardarnuevo').click(function(){


          nombre=$('#nombre').val();
          apellido=$('#apellido').val();
          email=$('#email').val();
          telefono=$('#telefono').val();

var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;

    if(nombre.trim() == '' ){
        alert('Porfavorenter your nombre.');
        $('#nombre').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Porfavor ingresa tu  email.');
        $('#email').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Porfavor sigue el formato ideal para  email.');
        $('#inputEmail').focus();
        return false;
    }else if(apellido.trim() == '' ){
        alert('Porfavor ingresa tu  Apellido.');
        $('#Apellido').focus();
        return false;
    }else if(telefono.trim() == '' ){
        alert('Porfavor ingresa tu Contraseña.');
        $('#Apellido').focus();
        return false;
    }else{




            agregardatos(nombre,apellido,email,telefono);

}
document.getElementById("nombre").value = "";
document.getElementById("email").value = "";
document.getElementById("apellido").value = "";
document.getElementById("telefono").value = "";

        });






        $('#actualizadatos').click(function(){


          nombreu=$('#nombreu').val();
          apellidou=$('#apellidou').val();
          emailu=$('#emailu').val();
          telefonou=$('#telefonou').val();

var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;

    if(nombreu.trim() == '' ){
        alert('Porfavor enter your nombre.');
        $('#nombreu').focus();
        return false;
    }else if(emailu.trim() == '' ){
        alert('Porfavor ingresa tu  email.');
        $('#emailu').focus();
        return false;
    }else if(emailu.trim() != '' && !reg.test(emailu)){
        alert('Porfavor sigue el formato ideal para  email.');
        $('#inputEmail').focus();
        return false;
    }else if(apellidou.trim() == '' ){
        alert('Porfavor ingresa tu  Apellido.');
        $('#Apellidou').focus();
        return false;
    }else if(telefonou.trim() == '' ){
        alert('Porfavor ingresa tu Contraseña.');
        $('#Apellidou').focus();
        return false;
    }else{




          actualizaDatos();
}



        });

    });
</script>
