
<?php 
require_once "../../Model/database.php";
		$sql="SELECT username, password, nombre, cedula, ID_USUARIO from usuario";
		$result=mysqli_query($conection,$sql);
?>
