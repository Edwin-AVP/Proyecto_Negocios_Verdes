<?php
    include_once '../../Model/database.php';
    $id = $_GET['id'];


    $sql="UPDATE usuario SET FK_ID_ROL = 2 WHERE ID_USUARIO = '$id'";
    $resul=mysqli_query($conection,$sql);
    header('location: ../../Views/Views_Usuario/V_usuario.php');

?>