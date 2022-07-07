<?php
require_once "../../Model/database.php";
$id = $_GET['id'];
$id_orden_dia = mysqli_query($conection,"SELECT codigo from ordendeldia WHERE ID_ORDENDELDIA = $id");
$id_orden = mysqli_query($conection,"SELECT ID_ORDEN from orden WHERE ID_ORDENDELDIA = $id");
$idOrden=mysqli_fetch_array($id_orden);

$res_producto = mysqli_query($conection,"SELECT * From h_producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = e.HP_ID_ORDEN WHERE a.FK_ID_ORDEN = '$idOrden[0]'");
$res_id_producto = mysqli_query($conection,"SELECT FK_ID_PRODUCTO From h_producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = e.HP_ID_ORDEN WHERE a.FK_ID_ORDEN = '$idOrden[0]'");

?>