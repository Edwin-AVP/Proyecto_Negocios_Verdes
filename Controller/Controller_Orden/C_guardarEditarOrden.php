<?php
require_once "../../Model/database.php";
$negativo = false;



if(isset($_POST['id_producto'])){

    foreach (array_keys($_POST['cantida']) as $key){
        $cantida = $_POST['cantida'][$key];
        if($cantida < 0){
            $negativo = true;
        }
    }
}

$numeroOrden = $_POST['numeroOrden'];
$id_cliente = $_POST['id_cliente'];
$id_producto = $_POST['id_producto'];
$id_orden = $_POST['id_orden'];


if($negativo == false){
$sql="SELECT numeroOrden FROM orden WHERE EXISTS(SELECT numeroOrden FROM orden WHERE numeroOrden = '$numeroOrden' and ID_ORDEN != $id_orden)";
$result=mysqli_query($conection,$sql);
$arr = mysqli_fetch_array($result);

if($arr == false){
    if(isset($_POST['id_producto'])){

        $sql="UPDATE orden SET numeroOrden = '$numeroOrden', FK_ID_CLIENTE = '$id_cliente' WHERE ID_ORDEN = '$id_orden'";
        $resul=mysqli_query($conection,$sql);

        $sql="DELETE FROM ordenproducto WHERE FK_ID_ORDEN = '$id_orden';";
        $resul=mysqli_query($conection,$sql);

        foreach (array_keys($_POST['cantida']) as $key){
            $cantida = $_POST['cantida'][$key];
            $id_producto = $_POST['id_producto'][$key];
    
            $sql="INSERT INTO ordenproducto(cantidadProductoSolicitado, FK_ID_ORDEN, FK_ID_PRODUCTO) VALUES
            ('$cantida', '$id_orden','$id_producto')";
            $resul=mysqli_query($conection,$sql);
        } 
            header('location: ../../Views/Views_Orden/V_orden.php');
    }else{
                echo '<script language="javascript">';
                echo 'alert("No se permite crear una orden sin productos!");';
                echo 'window.location="../../Views/Views_Orden/V_orden.php";';
                echo '</script>';
            }


}else{
    echo '<script language="javascript">';
    echo 'alert("El Codigo del la orden ya existe!");';
    echo 'window.location="../../Views/Views_Orden/V_orden.php";';
    echo '</script>';
}}else{
    echo '<script language="javascript">';
    echo 'alert("No se permite ingresar valores nagativos!");';
    echo 'window.location="../../Views/Views_Orden/V_orden.php";';
    echo '</script>';
}
?>