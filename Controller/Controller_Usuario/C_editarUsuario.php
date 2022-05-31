<?php
    include_once '../../Model/database.php';



    $username = $_POST['username'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contrasena'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $id = $_POST['id'];

    $sql="SELECT * FROM usuario WHERE (cedula = '$documento' or password = '$contraseña') AND ID_USUARIO != '$id'";
    $result=mysqli_query($conection,$sql);
    $arr = mysqli_fetch_array($result);

    if(!$arr[0] ==   $id ){
        $sql="UPDATE usuario SET username = '$username', password = '$contraseña', nombre = '$nombre', cedula = '$documento', telefono = '$telefono' WHERE ID_USUARIO = '$id'";
        $resul=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Usuario/V_usuario.php');

    }else{
        echo '<script language="javascript">';
        echo 'alert("Documento o Contraseña duplicada!");';
        echo 'window.location="../../Views/Views_Usuario/V_usuario.php";';
        echo '</script>';
    }

    


?>