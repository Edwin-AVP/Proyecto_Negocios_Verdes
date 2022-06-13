<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php 
$cadena = $_GET['OcultoDatoTabla'];
$partes = explode("/",$cadena); // divide una cadena segun separador
array_pop($partes); // elimina el ultimo elemento del array
for($i=0;$i<=(count($partes)-1);$i++){
$subpartes = explode("-",($partes[$i])); 
/* CONEXION PARA LA TABLA DE MEDICAMENTOS */

}


/*for($i=0;$i<=(count($partes));$i++)
{
	echo $partes[$i];
	echo "<br>";	
}*/

/*echo "<pre>";
var_dump($partes);
echo "</pre>";*/

/*$i = 0;
foreach($partes as $v) {
   print "\$a[$i] => $v<br>";
   $i++;
}*/
?> 

<body>
</body>
</html>