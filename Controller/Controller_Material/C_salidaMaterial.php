<?php
    include_once '../../Model/database.php';
    
    $cantidad = $_POST['cant'];
    $motivo = $_POST['motivo'];
    $id = $_POST['idss'];

    if($cantidad > 0){
        $sql="SELECT SUM(cantidadMaterialInventario - $cantidad ) FROM material WHERE ID_MATERIAL = '$id'";
        $result=mysqli_query($conection,$sql);
        $rest=mysqli_fetch_array($result);

        if($rest[0] < 0){
            echo '<script language="javascript">';
            echo 'alert("No hay suficiente inventario!");';
            echo 'window.location="../../Views/Views_Material/V_Material.php";';
            echo '</script>';

        }else{
            $sql="SELECT * FROM material WHERE ID_MATERIAL = '$id'";
            $result=mysqli_query($conection,$sql);
            $datos=mysqli_fetch_array($result);

            $codigo = $datos['codigoMaterial'];
            $nombre = $datos['nombreMaterial'];
            $unidad = $datos['unidadMedidaMaterial'];
            $tipo = $datos['tipoMaterial'];

            $sql="UPDATE material SET cantidadMaterialInventario = '$rest[0]' WHERE ID_MATERIAL = '$id'";
            $resu=mysqli_query($conection,$sql);

            $sql="INSERT INTO historial_salida(codigo, nombre, motivo, fecha, cantidad, unidad, tipo)VALUES
            ('$codigo', '$nombre','$motivo', CURDATE(), '$cantidad', '$unidad', '$tipo')";
            $resul=mysqli_query($conection,$sql);
            $rest = 0;
            header('location: ../../Views/Views_Material/V_Material.php');
        }

    }else{
        echo '<script language="javascript">';
        echo 'alert("No se permiten ingresar numeros negativos!");';
        echo 'window.location="../../Views/Views_Material/V_Material.php";';
        echo '</script>';
    }
?>

