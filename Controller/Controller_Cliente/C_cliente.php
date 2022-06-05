<?php 
if(isset($_POST['search']))
{
	$valueToSearh = $_POST['valueToSearh']; 
	$query = "SELECT * FROM cliente WHERE nombreCliente LIKE '%".$valueToSearh."%' OR IdentificacionCliente LIKE '%".$valueToSearh."%'";
	$result = filterRecord($query);
} 
else
{
	
		$query = "SELECT * FROM cliente";
		$result = filterRecord($query);
}
function filterRecord($query)
{
	
	include("../../Model/database.php");
	$filter_result = mysqli_query($conection, $query);
	return $filter_result;
}
?>