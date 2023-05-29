<?php
include("conexion.php");
$id =$_GET['id'];

mysqli_query($mysqli,"DELETE FROM  personas WHERE id  = '$id'") or die("Error al eliminar");
$res = json_decode("Exito al Eliminar");
echo $res;
return $res;
?>