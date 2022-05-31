<?php
    include_once '../../Model/database.php';

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];

    $sql="SELECT cedula FROM usuario WHERE cedula = '$documento' or password = '$contraseña'";
    $result=mysqli_query($conection,$sql);
    if($mostrar=mysqli_fetch_array($result)){
        echo '<script language="javascript">';
        echo 'alert("Documento o Contraseña duplicada!");';
        echo 'window.location="../../Views/Views_Usuario/V_nuevoUsuario.php";';
        echo '</script>';
    }else{
        $sql="INSERT INTO usuario(username, password, FK_ID_ROL, nombre, cedula, telefono) VALUES ('$usuario', '$contraseña',2, '$nombre', '$documento', '$telefono')";
		$resul=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Usuario/V_usuario.php');
    }


?>