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


if($negativo == false){
$sql="SELECT numeroOrden FROM orden WHERE EXISTS(SELECT numeroOrden FROM orden WHERE numeroOrden = '$numeroOrden')";
$result=mysqli_query($conection,$sql);
$arr = mysqli_fetch_array($result);

if($arr == false){
    if(isset($_POST['id_producto'])){
        $sql="INSERT INTO orden(numeroOrden, fecha, estado, FK_ID_CLIENTE) VALUES
        ('$numeroOrden', CURDATE(), 1, '$id_cliente')";
        $resul=mysqli_query($conection,$sql);

        $sql="SELECT ID_ORDEN FROM orden WHERE numeroOrden = '$numeroOrden'";
        $result=mysqli_query($conection,$sql);
        $guardar=mysqli_fetch_array($result);
        $id_orden = $guardar[0];


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
        echo 'window.location="../../Views/Views_Orden/V_nuevaOrden.php";';
        echo '</script>';
    }

}else{
    echo '<script language="javascript">';
    echo 'alert("El Codigo del la orden ya existe!");';
    echo 'window.location="../../Views/Views_Orden/V_nuevaOrden.php";';
    echo '</script>';
}}else{
    echo '<script language="javascript">';
    echo 'alert("No se permite ingresar valores nagativos!");';
    echo 'window.location="../../Views/Views_Orden/V_nuevaOrden.php";';
    echo '</script>';
}
?>