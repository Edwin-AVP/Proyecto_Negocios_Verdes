<?php
require_once "../../Model/database.php";
$result = mysqli_query($conection,"SELECT * FROM cliente ");
?>
<?php
require_once "../../Model/database.php";
$sql =  "SELECT * FROM producto ";
$filter_result = mysqli_query($conection, $sql);
?>