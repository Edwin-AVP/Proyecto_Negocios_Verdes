<?php 

if(isset($_POST['search']))
{
	$valueToSearh = $_POST['valueToSearh']; 
	$query = "SELECT * FROM ordendeldia WHERE codigo LIKE '%".$valueToSearh."%' AND estado = 2 OR fecha LIKE '%".$valueToSearh."%' AND estado = 2";
	$result = filterRecord($query);
} 
else
{
	
		$query = "SELECT * FROM ordendeldia WHERE estado = 2 ORDER BY ID_ORDENDELDIA DESC";
		$result = filterRecord($query);
}
function filterRecord($query)
{
	

	include("../../Model/database.php");
	$filter_result = mysqli_query($conection, $query);
	return $filter_result;
}

?>
