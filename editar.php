<?php
include("conexion.php");

$id =$_GET['id'];
$nombre =$_GET['nombre'];
$direccion =$_GET['direccion'];
$edad =$_GET['edad'];
$estado =$_GET['estado'];

mysqli_query($mysqli,"UPDATE PERSONAS SET nombre ='$nombre' , direccion = '$direccion', edad = '$edad', estado = '$estado' WHERE id  = '$id'") or die("Error al Actualizar");
$res = json_decode("Exito al Actualizar");
echo $res;
return $res;
?>