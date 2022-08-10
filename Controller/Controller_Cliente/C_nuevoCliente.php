<?php
    include_once '../../Model/database.php';

    $nombre = $_POST['nombre'];
    $identificacion = $_POST['identificacion'];
    $tipo = $_POST['tipo'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];

    $sql="SELECT estado FROM cliente WHERE IdentificacionCliente = '$identificacion'";
    $result=mysqli_query($conection,$sql);
    if($mostrar=mysqli_fetch_array($result)){

        if($mostrar[0] == 2){
            $sql="UPDATE cliente SET nombreCliente = '$nombre', IdentificacionCliente = '$identificacion', tipoIdentificacion = '$tipo', telefono = '$telefono',
            correo = '$correo', direccion = '$direccion', estado = '1' WHERE IdentificacionCliente = '$identificacion'";
            $result=mysqli_query($conection,$sql);
            header('location: ../../Views/Views_Cliente/V_cliente.php');
        }else{
            echo '<script language="javascript">';
            echo 'alert("La identificación ya existe!");';
            echo 'window.location="../../Views/Views_Cliente/V_nuevoCliente.php";';
            echo '</script>';
        }

    }else{
        $sql="INSERT INTO cliente(nombreCliente, IdentificacionCliente, tipoIdentificacion, telefono, correo, direccion, estado) VALUES
        ('$nombre', '$identificacion','$tipo', '$telefono', '$correo', '$direccion', '1')";
		$resul=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Cliente/V_cliente.php');
    }
?>