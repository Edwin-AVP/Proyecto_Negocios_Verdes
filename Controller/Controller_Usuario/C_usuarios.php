
<?php 
require_once "../../Model/database.php";
		$sql="SELECT username, password, nombre, cedula from usuario";
		$result=mysqli_query($conection,$sql);
?>