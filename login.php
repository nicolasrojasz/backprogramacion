<?php
include("conexion.php");

$result = mysqli_query($mysqli, "SELECT Correo,Contrasena FROM regpariente ") or die("Error del select");
$row = array();
while ($r = mysqli_fetch_assoc($result)) {
    $row[] = $r;
}
$respuesta = json_encode($row);
echo $respuesta;
return $respuesta
    ?>