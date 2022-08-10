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
if($valor < 0){
    $negativo = true;
}

if($negativo == false){
$sql="SELECT codigoProducto FROM producto WHERE EXISTS(SELECT codigoProducto FROM producto WHERE codigoProducto = '$codigo')";
$result=mysqli_query($conection,$sql);
$arr = mysqli_fetch_array($result);

if($arr == false){
    if(isset($_POST['id_material'])){
        $sql="INSERT INTO producto(nombreProducto, codigoProducto, valorUnidad, estado) VALUES
        ('$nombre', '$codigo','$valor',1)";
        $resul=mysqli_query($conection,$sql);

        $sql="SELECT ID_PRODUCTO FROM producto WHERE codigoProducto = '$codigo'";
        $result=mysqli_query($conection,$sql);
        $guardar=mysqli_fetch_array($result);
        $id_producto = $guardar[0];


        foreach (array_keys($_POST['cantida']) as $key){
            $cantida = $_POST['cantida'][$key];
            $id_material = $_POST['id_material'][$key];
    
            $sql="INSERT INTO productomaterial(cantidadMaterialProducto, FK_ID_PRODUCTO, FK_ID_MATERIAL) VALUES
            ('$cantida', '$id_producto','$id_material')";
            $resul=mysqli_query($conection,$sql);
        } 
            header('location: ../../Views/Views_Producto/V_producto.php');
    }else{
        echo '<script language="javascript">';
        echo 'alert("No se permite crear productos sin materiales!");';
        echo 'window.location="../../Views/Views_Producto/V_nuevoProducto.php";';
        echo '</script>';
    }

}else{
    echo '<script language="javascript">';
    echo 'alert("El Codigo del producto ya existe!");';
    echo 'window.location="../../Views/Views_Producto/V_nuevoProducto.php";';
    echo '</script>';
}}else{
    echo '<script language="javascript">';
    echo 'alert("No se permite ingresar valores nagativos!");';
    echo 'window.location="../../Views/Views_Producto/V_nuevoProducto.php";';
    echo '</script>';
}
?>