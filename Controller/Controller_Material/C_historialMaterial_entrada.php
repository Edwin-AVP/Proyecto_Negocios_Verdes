<?php 

if(isset($_POST['search']))
{
	$valueToSearh = $_POST['valueToSearh']; 
	$query = "SELECT * FROM historial_entrada WHERE nombre LIKE '%".$valueToSearh."%' OR codigo LIKE '%".$valueToSearh."%'";
	$result = filterRecord($query);
} 
else
{
	
		$query = "SELECT * FROM historial_entrada ORDER BY ID_HISTORIAL_ENTRADA DESC";
		$result = filterRecord($query);
}
function filterRecord($query)
{
	

	include("../../Model/database.php");
	$filter_result = mysqli_query($conection, $query);
	return $filter_result;
}

?>	
