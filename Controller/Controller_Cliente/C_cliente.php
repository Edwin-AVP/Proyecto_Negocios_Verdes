<?php 
require_once "../../Model/database.php";
		$sql="SELECT nombreCliente, identificacionCliente, tipoIdentificacion, telefono, ID_CLIENTE from cliente";
		$result=mysqli_query($conection,$sql);
?>
