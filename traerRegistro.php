<?php
include("conexion.php");
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM personas WHERE id  = '$id'") or die("Error 401");
$row = array();
while ($r = mysqli_fetch_assoc($result)) {
    $row[] = $r;
}
$res = json_encode($row);
echo $res;
return $res;
?>