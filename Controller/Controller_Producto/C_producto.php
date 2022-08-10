<?php 

if(isset($_POST['search']))
{
	$valueToSearh = $_POST['valueToSearh']; 
	$query = "SELECT * FROM producto WHERE nombreProducto LIKE '%".$valueToSearh."%' and estado = 1 OR codigoProducto LIKE '%".$valueToSearh."%' and estado = 1";
	$result = filterRecord($query);
} 
else
{
	
		$query = "SELECT * FROM producto where estado = 1";
		$result = filterRecord($query);
}
function filterRecord($query)
{
	

	include("../../Model/database.php");
	$filter_result = mysqli_query($conection, $query);
	return $filter_result;
}

?>
