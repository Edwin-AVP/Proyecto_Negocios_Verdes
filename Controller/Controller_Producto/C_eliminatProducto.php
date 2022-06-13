<?php
    include_once '../../Model/database.php';



    $id = $_GET['id'];

    $sql="DELETE FROM productomaterial WHERE FK_ID_PRODUCTO = '$id';";
    $resul=mysqli_query($conection,$sql);
    $sql="DELETE FROM producto WHERE ID_PRODUCTO = '$id';";
    $resul=mysqli_query($conection,$sql);
    header('location: ../../Views/Views_Producto/V_producto.php');
?>
