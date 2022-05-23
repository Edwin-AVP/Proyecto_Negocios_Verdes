<?php
require_once "../../Model/database.php";

$id = $_GET['id'];
$result1 = mysqli_query($conection,"SELECT * from orden a JOIN cliente b ON a.FK_ID_CLIENTE = b.ID_CLIENTE AND a.ID_ORDEN = '$id'");


$result2 = mysqli_query($conection,"SELECT * From producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = '$id'");

?>