<?php 

if(isset($_POST['search']))
{
	$valueToSearh = $_POST['valueToSearh']; 
	$query = "SELECT * FROM material WHERE nombreMaterial LIKE '%".$valueToSearh."%' OR codigoMaterial LIKE '%".$valueToSearh."%'";
	$result = filterRecord($query);
} 
else
{
	
		$query = "SELECT *FROM material";
		$result = filterRecord($query);
}
function filterRecord($query)
{
	

	include("../../Model/database.php");
	$filter_result = mysqli_query($conection, $query);
	return $filter_result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<script>
                $("body").on("click","#mitabla a",function(event){
                    //-----------------------------entrada
                    event.preventDefault();
                    idd = $(this).attr("href");
                    nombreM = $(this).parent().parent().children("td:eq(1)").text();
                    //------------------------------salida
                    idss = $(this).attr("href");
                    nombreMS = $(this).parent().parent().children("td:eq(1)").text();
                    //------------------------------editar
                    id = $(this).attr("href");
                    codigo = $(this).parent().parent().children("td:eq(0)").text();
					nombre = $(this).parent().parent().children("td:eq(1)").text();
					unidad = $(this).parent().parent().children("td:eq(3)").text();
					valor = $(this).parent().parent().children("td:eq(4)").text();
					tipo = $(this).parent().parent().children("td:eq(5)").text();
                    //------------------------------Eliminar
                    idE = $(this).attr("href");
                    nombreE = $(this).parent().parent().children("td:eq(1)").text();
                    codigoE = $(this).parent().parent().children("td:eq(0)").text();
                    can = $(this).parent().parent().children("td:eq(2)").text();
                    //Cargamos en el formulario los valores del registro
                    //-------------------------------entrada
                    $("#nombreM").val(nombreM);
                    $("#idd").val(idd);
                    //--------------------------------salida
                    $("#idss").val(idss);
                    $("#nombreMS").val(nombreMS);
                    //---------------------------------editar
                    $("#codigo").val(codigo);
				    $("#nombre").val(nombre);
				    $("#unidad").val(unidad);
				    $("#valor").val(valor);
				    $("#tipo").val(tipo);
				    $("#id").val(id);
                    //---------------------------------Eliminar
                    $("#idE").val(idE);
				    $("#nombreE").val(nombreE);
				    $("#codigoE").val(codigoE);
                    $("#can").val(can);
                });
</script>


</body>
</html>
