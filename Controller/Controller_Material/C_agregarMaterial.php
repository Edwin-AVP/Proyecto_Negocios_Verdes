<?php
    include_once '../../Model/database.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $unidad = $_POST['unidad'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];

    $sql="SELECT codigoMaterial FROM material WHERE codigoMaterial = '$codigo'";
    $result=mysqli_query($conection,$sql);
    $mostrar=mysqli_fetch_array($result);
    if($mostrar[0] == $codigo ){
        echo '<script language="javascript">';
        echo 'alert("El codigo de material ya existe!");';
        echo 'window.location="../../Views/Views_Material/V_agregarMaterial.php";';
        echo '</script>';
    }else{
        $sql="INSERT INTO material(nombreMaterial, codigoMaterial, unidadMedidaMaterial, valorMaterial, tipoMaterial, cantidadMaterialInventario) VALUES
        ('$nombre', '$codigo','$unidad', '$valor', '$tipo', 0)";
		$resul=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Material/V_material.php');
    }
?>

