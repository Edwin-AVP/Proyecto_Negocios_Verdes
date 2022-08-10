<?php
    include_once '../../Model/database.php';

    $nombre = $_POST['nombre'];
    $identificacion = $_POST['identificacion'];
    $tipo = $_POST['tipo'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $id = $_POST['id'];

    $sql="SELECT ID_CLIENTE FROM cliente WHERE IdentificacionCliente = '$identificacion'  AND ID_CLIENTE != '$id'";
    $result=mysqli_query($conection,$sql);
    $arr = mysqli_fetch_array($result);
 

    if(!$arr[0] == $id){
        $sql="UPDATE cliente SET nombreCliente = '$nombre', IdentificacionCliente = '$identificacion', tipoIdentificacion = '$tipo', telefono = '$telefono',
        correo = '$correo', direccion = '$direccion' WHERE ID_CLIENTE = '$id'";
        $resul=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Cliente/V_cliente.php');

    }else{
        echo '<script language="javascript">';
        echo 'alert("Documento o Contraseña duplicada!");';
        echo 'window.location="../../Views/Views_Cliente/V_cliente.php";';
        echo '</script>';
    }
?>
