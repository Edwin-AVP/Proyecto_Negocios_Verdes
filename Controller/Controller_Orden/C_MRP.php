<?php
require_once "../../Model/database.php";

$id = $_GET['id'];
$res_orden = mysqli_query($conection,"SELECT * from orden a JOIN cliente b ON a.FK_ID_CLIENTE = b.ID_CLIENTE AND a.ID_ORDEN = '$id'");

$res_producto = mysqli_query($conection,"SELECT * From producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = '$id'");
$res_id_producto = mysqli_query($conection,"SELECT FK_ID_PRODUCTO From producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = '$id';");

?>