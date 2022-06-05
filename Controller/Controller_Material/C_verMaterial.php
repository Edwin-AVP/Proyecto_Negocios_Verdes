<?php
require_once "../../Model/database.php";

$id = $_GET['id'];
$result = mysqli_query($conection,"SELECT * FROM material WHERE ID_MATERIAL ='$id'");

?>