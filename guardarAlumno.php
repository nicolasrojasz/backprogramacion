<?php
include("conexion.php");
$TE = $_GET['TE'];
$NombreAlum = $_GET['NombreAlum'];
$Idseccion = $_GET['Idseccion'];
$estado = $_GET['estado'];
$Idpariente = $_GET['Idpariente'];

mysqli_query($mysqli, "INSERT INTO personas (TE,NombreAlum,Idseccion,estado,Idpariente) VALUES ( '$TE','$NombreAlum','$Idseccion','$estado','$Idpariente')");
$res = json_decode("Exito al Guardar");
echo $res;
return $res;
?>