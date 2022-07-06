<?php
require_once "../../Model/database.php";

$id = $_GET['id'];
$result1 = mysqli_query($conection,"SELECT * FROM producto WHERE ID_PRODUCTO ='$id'");


$result2 = mysqli_query($conection,"SELECT * From material e JOIN productomaterial a ON e.ID_MATERIAL = a.FK_ID_MATERIAL AND a.FK_ID_PRODUCTO = '$id'");

?>