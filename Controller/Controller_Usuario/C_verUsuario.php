<?php
require_once "../../Model/database.php";

$id = $_GET['id'];
$result = mysqli_query($conection,"SELECT * FROM usuario WHERE ID_USUARIO ='$id'");

?>