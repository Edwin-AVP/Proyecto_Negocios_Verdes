<?php 
if(isset($_POST['search']))
{
	$valueToSearh = $_POST['valueToSearh']; 
	$query = "SELECT * FROM cliente WHERE nombreCliente LIKE '%".$valueToSearh."%' and estado = 1 OR IdentificacionCliente LIKE '%".$valueToSearh."%' and estado = 1";
	$result = filterRecord($query);
} 
else
{
	
		$query = "SELECT * FROM cliente where estado = 1";
		$result = filterRecord($query);
}
function filterRecord($query)
{
	
	include("../../Model/database.php");
	$filter_result = mysqli_query($conection, $query);
	return $filter_result;
}
?>