<?php
include_once '../../Model/database.php';


$cambiar = false;
$id = $_GET['id'];

$sql="UPDATE cliente SET estado = '2' WHERE ID_CLIENTE = '$id'";
$resu=mysqli_query($conection,$sql);
header('location: ../../Views/Views_Cliente/V_cliente.php');
?>