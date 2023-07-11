<?php
    include_once '../../Model/database.php';
    $id = $_GET['id'];


    $sql="UPDATE orden SET estado = 3 WHERE ID_ORDEN = '$id'";
    $resul=mysqli_query($conection,$sql);

    $sql="SELECT * From producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = '$id '";
    $result_producto=mysqli_query($conection,$sql);


while($producto=mysqli_fetch_array($result_producto)){
    $sql="INSERT INTO h_producto(ID_PRODUCTO, nombreProducto, codigoProducto, valorUnidad, HP_ID_ORDEN) VALUES 
    ('$producto[ID_PRODUCTO]', '$producto[nombreProducto]', '$producto[codigoProducto]', '$producto[valorUnidad]', '$producto[FK_ID_ORDEN]')";
    $guardar=mysqli_query($conection,$sql);
}

    header('location: ../../Views/Views_Orden/V_orden.php');

?>