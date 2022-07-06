<?php
    include_once '../../Model/database.php';
    $id = $_GET['id'];


    $sql="UPDATE orden SET estado = 1 WHERE ID_ORDEN = '$id'";
    $resul=mysqli_query($conection,$sql);
    header('location: ../../Views/Views_Orden/V_orden.php');

?>