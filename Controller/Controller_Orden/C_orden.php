<?php 
if(isset($_POST['search']))
{
	$valueToSearh = $_POST['valueToSearh']; 
	$query = "SELECT * from orden a JOIN cliente b ON a.FK_ID_CLIENTE = b.ID_CLIENTE WHERE a.estado = 1 and a.numeroOrden LIKE
    '%".$valueToSearh."%' AND a.estado = 1 OR b.nombreCliente LIKE '%".$valueToSearh."%' AND a.estado = 1 OR a.fecha LIKE '%".$valueToSearh."%' AND a.estado = 1" ;
	$result = filterRecord($query);
} 
else
{
	
		$query = "SELECT * from orden a JOIN cliente b ON a.FK_ID_CLIENTE = b.ID_CLIENTE WHERE a.estado = 1 or a.estado = 0";
		$result = filterRecord($query);
}
function filterRecord($query)
{
	
	include("../../Model/database.php");
	$filter_result = mysqli_query($conection, $query);
	return $filter_result;
}
?>

