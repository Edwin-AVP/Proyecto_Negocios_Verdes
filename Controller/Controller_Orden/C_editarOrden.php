<?php
require_once "../../Model/database.php";
$result = mysqli_query($conection,"SELECT * FROM cliente ");
$id = $_GET['id'];
$result_cliente= mysqli_query($conection,"SELECT * from orden a JOIN cliente b ON a.ID_ORDEN = $id WHERE a.FK_ID_CLIENTE = b.ID_CLIENTE");
//$result_orden = mysqli_query($conection,"SELECT * From producto e JOIN ordenproducto a ON e.ID_PRODUCTO = a.FK_ID_PRODUCTO AND a.FK_ID_ORDEN = '$id'");

?>
<?php
require_once "../../Model/database.php";
$sql =  "SELECT * FROM producto ";
$filter_result = mysqli_query($conection, $sql);
?>