<?php
require_once "../../Model/database.php";

$contador = mysqli_query($conection,"SELECT codigo from ordendeldia WHERE estado = 1");
$id_ordenDia = mysqli_query($conection,"SELECT ID_ORDENDELDIA from ordendeldia WHERE estado = 1");
$id=mysqli_fetch_array($id_ordenDia);

$result1 = mysqli_query($conection,"SELECT DISTINCT * from orden a JOIN ordenproducto e on a.ID_ORDEN = e.FK_ID_ORDEN and a.ID_ORDENDELDIA = $id[0]");
$res_id_producto = mysqli_query($conection,"SELECT DISTINCT FK_ID_PRODUCTO from orden a JOIN ordenproducto e on a.ID_ORDEN = e.FK_ID_ORDEN and a.ID_ORDENDELDIA = $id[0]");

?>