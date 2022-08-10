<?php
require_once "../../Model/database.php";
$result = mysqli_query($conection,"SELECT * FROM cliente WHERE estado = 1");
?>
<?php
require_once "../../Model/database.php";
$sql =  "SELECT * FROM producto WHERE estado = 1 ";
$filter_result = mysqli_query($conection, $sql);
?>