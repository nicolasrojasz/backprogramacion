<?php
include("conexion.php");
$CC = $_GET['CC'];
$Nombre = $_GET['Nombre'];
$Telefono = $_GET['Telefono'];
$Correo = $_GET['Correo'];
$Contrasena = $_GET['Contrasena'];
$Idcarril = $_GET['Idcarril'];
mysqli_query($mysqli, "INSERT INTO regpariente (CC,Nombre,Telefono,Correo,Contrasena,Idcarril) VALUES ( '$CC','$Nombre','$Telefono','$Correo','$Contrasena','$Idcarril')");
$res = json_decode("Exito al Guardar");
echo $res;
return $res;
?>