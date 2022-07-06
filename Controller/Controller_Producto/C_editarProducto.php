<?php
require_once "../../Model/database.php";
$negativo = false;
foreach (array_keys($_POST['cantida']) as $key){
    $cantida = $_POST['cantida'][$key];
    if($cantida < 0){
        $negativo = true;
    }
}

$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$valor = $_POST['valor'];
$ID_PRODUCTO = $_POST['ID_PRODUCTO'];
if($valor < 0){
    $negativo = true;
}
if($negativo == false){
$sql="SELECT codigoProducto FROM producto WHERE EXISTS(SELECT codigoProducto FROM producto WHERE codigoProducto = '$codigo' and ID_PRODUCTO != $ID_PRODUCTO)";
$result=mysqli_query($conection,$sql);
$arr = mysqli_fetch_array($result);

if($arr == false){
    if(isset($_POST['id_material'])){


        $sql="UPDATE producto SET nombreProducto = '$nombre', codigoProducto = '$codigo', valorUnidad = '$valor' WHERE ID_PRODUCTO = '$ID_PRODUCTO'";
        $resul=mysqli_query($conection,$sql);

        $sql="DELETE FROM productomaterial WHERE FK_ID_PRODUCTO = '$ID_PRODUCTO';";
        $resul=mysqli_query($conection,$sql);

        foreach (array_keys($_POST['cantida']) as $key){
            $cantida = $_POST['cantida'][$key];
            $id_material = $_POST['id_material'][$key];
    
            $sql="INSERT INTO productomaterial(cantidadMaterialProducto, FK_ID_PRODUCTO, FK_ID_MATERIAL) VALUES
            ('$cantida', '$ID_PRODUCTO','$id_material')";
            $resul=mysqli_query($conection,$sql);
        } 
            header('location: ../../Views/Views_Producto/V_producto.php');
    }else{
        echo '<script language="javascript">';
        echo 'alert("No se permite crear productos sin materiales!");';
        echo 'window.location="../../Views/Views_Producto/V_producto.php";';
        echo '</script>';
    }

}else{
    echo '<script language="javascript">';
    echo 'alert("El Codigo del producto ya existe!");';
    echo 'window.location="../../Views/Views_Producto/V_producto.php";';
    echo '</script>';
}}else{
    echo '<script language="javascript">';
    echo 'alert("No se permite ingresar valores nagativos!");';
    echo 'window.location="../../Views/Views_Producto/V_nuevoProducto.php";';
    echo '</script>';
}
?>