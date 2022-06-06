<?php
    include_once '../../Model/database.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $unidad = $_POST['unidad'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];
    $id = $_POST['id'];

    $sql="SELECT codigoMaterial FROM material WHERE EXISTS(SELECT codigoMaterial FROM material WHERE codigoMaterial = '$codigo'  AND ID_MATERIAL != '$id')";
    $result=mysqli_query($conection,$sql);
    $arr = mysqli_fetch_array($result);

    if($arr == false){
        $sql="UPDATE material SET nombreMaterial = '$nombre', codigoMaterial = '$codigo', unidadMedidaMaterial = '$unidad', valorMaterial = '$valor',
        tipoMaterial = '$tipo' WHERE ID_MATERIAL = '$id'";
        $resul=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Material/V_Material.php');

    }else{
        echo '<script language="javascript">';
        echo 'alert("Codigo duplicado!");';
        echo 'window.location="../../Views/Views_Material/V_Material.php";';
        echo '</script>';
    }
?>