<?php
require_once "../../Model/database.php";

$contador = mysqli_query($conection,"SELECT contador from ordendeldia");
$result1 = mysqli_query($conection,"SELECT DISTINCT FK_ID_PRODUCTO from orden a JOIN ordenproducto e on a.ID_ORDEN = e.FK_ID_ORDEN and a.estado = 1");
$res_id_producto = mysqli_query($conection,"SELECT DISTINCT FK_ID_PRODUCTO from orden a JOIN ordenproducto e on a.ID_ORDEN = e.FK_ID_ORDEN and a.estado = 1");

?>

