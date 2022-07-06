<?php
    include_once '../../Model/database.php';
    $codigo = $_POST['codigo'];
    $arr_cantidad = ( unserialize(base64_decode($_POST['arr_cantidad'])) );

    $longitud = count($arr_cantidad);
    $vali = true;

    for($i=0; $i<$longitud; $i++)
    {
        if($longitud == 1){
            header('location: ../../Views/Views_Orden/V_orden.php');
        }
        if($arr_cantidad[$i][1] < 0){
        $vali = false;
        echo '<script language="javascript">';
        echo 'alert("Materiales Insuficientes!");';
        echo 'window.location="../../Views/Views_Orden/V_orden.php";';
        echo '</script>';
        break;
        }
        
    }
if( $longitud > 1 && $vali == true){


    $sql="INSERT INTO ordendeldia(codigo, fecha, estado, contador) VALUES
    ('$codigo', CURDATE(), 1, 0)";
    $resul=mysqli_query($conection,$sql);

    
    $sql="SELECT ID_ORDENDELDIA FROM ordendeldia WHERE codigo = '$codigo'";
    $result=mysqli_query($conection,$sql);
    $mostrar=mysqli_fetch_array($result);
    $id_ordendia = $mostrar[0];

    $sql="UPDATE orden SET ID_ORDENDELDIA = '$id_ordendia' WHERE estado = 1";
    $resul=mysqli_query($conection,$sql);

    $sql="SELECT * From orden WHERE estado = 1";
    $result_orden=mysqli_query($conection,$sql);

    while($orden=mysqli_fetch_array($result_orden)){
        $sql="SELECT * From producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = '$orden[ID_ORDEN]'";
        $result_producto=mysqli_query($conection,$sql);

        while($producto=mysqli_fetch_array($result_producto)){
            $sql="INSERT INTO h_producto(ID_PRODUCTO, nombreProducto, codigoProducto, valorUnidad, HP_ID_ORDEN) VALUES 
            ('$producto[ID_PRODUCTO]', '$producto[nombreProducto]', '$producto[codigoProducto]', '$producto[valorUnidad]', '$producto[FK_ID_ORDEN]')";
            $guardar=mysqli_query($conection,$sql);

            $sql="SELECT * From material e JOIN productomaterial a ON e.ID_MATERIAL = a.FK_ID_MATERIAL AND a.FK_ID_PRODUCTO = '$producto[ID_PRODUCTO]'";
            $result_material=mysqli_query($conection,$sql);

            while($material=mysqli_fetch_array($result_material)){
                $sql="INSERT INTO h_material(ID_MATERIAL, nombreMaterial, codigoMaterial, unidadMedidaMaterial, valorMaterial, tipoMaterial,
                cantidadMaterialInventario, HM_ID_ORDEN, cantidad, ID_PRODUCTO) VALUES 
                ('$material[ID_MATERIAL]', '$material[nombreMaterial]', '$material[codigoMaterial]', '$material[unidadMedidaMaterial]', '$material[valorMaterial]', 
                '$material[tipoMaterial]', '$material[cantidadMaterialInventario]', '$orden[ID_ORDEN]','$material[cantidadMaterialProducto]', '$material[FK_ID_PRODUCTO]')";
                $guardar=mysqli_query($conection,$sql);

                $cantidad = ($producto[5] * $material[8]);
                $sql="SELECT SUM(cantidadMaterialInventario - $cantidad ) FROM material WHERE ID_MATERIAL = '$material[ID_MATERIAL]'";
                $result=mysqli_query($conection,$sql);
                $rest=mysqli_fetch_array($result);

                $sql="UPDATE material SET cantidadMaterialInventario = '$rest[0]' WHERE ID_MATERIAL = '$material[ID_MATERIAL]'";
                $resu=mysqli_query($conection,$sql);
    
                $sql="INSERT INTO historial_salida(codigo, nombre, motivo, fecha, cantidad, unidad, tipo)VALUES
                ('$material[codigoMaterial]', '$material[nombreMaterial]','$codigo', CURDATE(), '$cantidad', '$material[unidadMedidaMaterial]', '$material[tipoMaterial]')";
                $resul=mysqli_query($conection,$sql);
            }
        }
    }
    $sql="UPDATE orden SET estado = 2 WHERE estado = 1";
    $resul=mysqli_query($conection,$sql);

    $sql="SELECT contador From ordendeldia WHERE estado = 0";
    $result_ordendia=mysqli_query($conection,$sql);
    $contador=mysqli_fetch_array($result_ordendia);
    $contador_T = $contador[0]+1;

    $sql="UPDATE ordendeldia SET contador = '$contador_T' WHERE estado = 0";
    $resul=mysqli_query($conection,$sql);

    $sql="UPDATE ordendeldia SET estado = 2 WHERE estado = 1 and ID_ORDENDELDIA !=  $id_ordendia";
    $resul=mysqli_query($conection,$sql);
    header('location: ../../Views/Views_Orden/V_orden.php');

}
?>