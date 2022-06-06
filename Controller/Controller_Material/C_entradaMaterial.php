<?php
    include_once '../../Model/database.php';


    $cantidad = $_POST['cantidad'];
    $valor = $_POST['valor'];
    $id = $_POST['idd'];
    


    if($cantidad > 0){
        $sql="SELECT SUM(cantidadMaterialInventario + $cantidad ) FROM material WHERE ID_MATERIAL = '$id'";
        $result=mysqli_query($conection,$sql);
        $suma=mysqli_fetch_array($result);
        $sql="UPDATE material SET valorMaterial = '$valor', cantidadMaterialInventario = '$suma[0]' WHERE ID_MATERIAL = '$id'";
        $resul=mysqli_query($conection,$sql);
        $suma = 0;

        $sql="SELECT * FROM material WHERE ID_MATERIAL = '$id'";
        $result=mysqli_query($conection,$sql);
        $datos=mysqli_fetch_array($result);

        $codigo = $datos['codigoMaterial'];
        $nombre = $datos['nombreMaterial'];
        $unidad = $datos['unidadMedidaMaterial'];
        $tipo = $datos['tipoMaterial'];

        $sql="INSERT INTO historial_entrada(codigo, nombre, fecha, cantidad, unidad, valorUnitario, tipo)VALUES
        ('$codigo', '$nombre', CURDATE(), '$cantidad', '$unidad','$valor', '$tipo')";
        $resu=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Material/V_Material.php');

    }else{
        echo '<script language="javascript">';
        echo 'alert("No se permiten ingresar numeros negativos  !");';
        echo 'window.location="../../Views/Views_Material/V_Material.php";';
        echo '</script>';
    }
?>
	
