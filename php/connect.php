<?php
function consultarSQL($query){
$mysqli=new mysqli("localhost","root","","sistemas_ucv");
/*En este caso asumimos el usuario: root, sin contraseña*/
if(mysqli_connect_errno()){
printf("Conexión fallida",mysqli_connect_error());
}
$mysqli->set_charset("utf8");
$mysqli->autocommit(FALSE);
//$mysqli->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
if($consulta=$mysqli->query($query)){
if($mysqli->commit()){
}else {
echo "Error datos no guardados";
}
}else {
$mysqli->rollback();
}
return $consulta;
}
?>