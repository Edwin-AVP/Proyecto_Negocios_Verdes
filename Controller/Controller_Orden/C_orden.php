<?php
require_once "../../Model/database.php";
        $sql="SELECT * from orden a JOIN cliente b ON a.FK_ID_CLIENTE = b.ID_CLIENTE ";
		$result=mysqli_query($conection,$sql);

?>