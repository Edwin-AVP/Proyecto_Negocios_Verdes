<?php
require_once "../../Model/database.php";
$id = $_GET['id'];
$id_orden_dia = mysqli_query($conection,"SELECT codigo from ordendeldia WHERE ID_ORDENDELDIA = $id");
$result1 = mysqli_query($conection,"SELECT DISTINCT FK_ID_PRODUCTO from orden a JOIN ordenproducto e on a.ID_ORDEN = e.FK_ID_ORDEN and a.ID_ORDENDELDIA = $id");
$res_id_producto = mysqli_query($conection,"SELECT DISTINCT FK_ID_PRODUCTO from orden a JOIN ordenproducto e on a.ID_ORDEN = e.FK_ID_ORDEN and a.ID_ORDENDELDIA = $id");

?>