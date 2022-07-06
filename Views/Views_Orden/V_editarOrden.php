<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en">
  <head>
  	<title>Editar_Orden</title>
    <link rel="shortcut icon" href="../../images/logoPV.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style-button.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/style-button.css" media="screen" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
     <div class="container">
      <a class="navbar-brand" href="../Views_Usuario/V_usuario.php">Negocios <span>Verdes</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav m-auto">
           <!--Si el usuario no es el administrador no mostrara los USUARIOS-->
           <?php if($_SESSION['rol'] == 1 ){?>
      <li class="nav-item"><a href="../Views_Usuario/V_usuario.php" class="nav-link">USUARIOS</a></li> <?php
            }else{if($_SESSION['rol'] != 1 ){}}
          ?>
        <li class="nav-item active"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
        <li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
        <li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
        <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
        <li class="nav-item"><a href="../../Controller/Controller_Sesion.php?cerrar_sesion='1'" class="nav-link">SALIR</a></li>
      </ul>
    </div>
  </div>
</nav>
<!------------------------------------------------------------------------ END nav --------------------------------------------------------------->
<div class="container"><br><br><br><br><br>
<?php 
require_once "../../Controller/Controller_Orden/C_editarOrden.php";
$result_cliente=mysqli_fetch_array($result_cliente);
$mostrar=mysqli_fetch_array($result);
?>
  <form method="POST" class="needs-validation" novalidate action="../../Controller/Controller_Orden/C_guardarEditarOrden.php">
    <bt><button class="btn btn-success float-right" type="submit">Editar Orden</button></bt>
    <br><br><br>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Número de Orden</label>
        <input type="text" class="form-control" value="<?php echo $result_cliente['numeroOrden']?>" name="numeroOrden" id="numeroOrden" placeholder="Número de Orden"  required>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Número de orden</div>
      </div>
      <div class="col-md-4 mb-3">
        <label>Cliente</label><!-- Seleccionar Cliente -->
        <select class="form-control" name="selec_Cliente" id="selec_Cliente" onchange="ShowSelected()" required aria-label="select example">
        <option selected class="form-control" value="<?php echo $mostrar['ID_CLIENTE']?>/<?php echo $mostrar['telefono']?>/<?php echo $mostrar['direccion']?>
        /<?php echo $mostrar['IdentificacionCliente']?>/<?php echo $mostrar['tipoIdentificacion']?>"><?php echo $result_cliente['nombreCliente']?></option>
    <?php 
    while($mostrar=mysqli_fetch_array($result)){ 
      
		?>

    <option class="form-control" value="<?php echo $mostrar['ID_CLIENTE']?>/<?php echo $mostrar['telefono']?>/<?php echo $mostrar['direccion']?>/<?php echo $mostrar['IdentificacionCliente']?>/<?php echo $mostrar['tipoIdentificacion']?>"><?php echo $mostrar['nombreCliente']?></option>
    <?php 
	  }
	  ?>
        </select>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un cliente</div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Teléfono</label>
        <input type="text" class="form-control" value="<?php echo $result_cliente['telefono']?>" placeholder="Teléfono"  id="telefono" aria-label="Disabled input example" required readonly>
        <input type="hidden" class="form-control" value="<?php echo $result_cliente['ID_CLIENTE']?>" name="id_cliente" id="id_cliente" aria-label="Disabled input example" readonly>
        <input type="hidden" class="form-control" value="<?php echo $result_cliente['ID_ORDEN']?>" name="id_orden" id="id_orden" aria-label="Disabled input example" readonly>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Dirección</label>
        <input type="text" class="form-control" value="<?php echo $result_cliente['direccion']?>" placeholder="Dirección" id="direccion" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04">Número Documento</label>
        <input type="text" class="form-control" value="<?php echo $result_cliente['IdentificacionCliente']?>" placeholder="Número Documento" id="documento" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-1 mb-3">
        <label for="validationCustom04">Tipo</label>
        <input type="text" class="form-control" value="<?php echo $result_cliente['tipoIdentificacion']?>" placeholder="Tipo" id="tipo" aria-label="Disabled input example" required readonly>
      </div>
    </div> 
    <hr>   <!-------------------------------------------------------------------- Separador ----------------------------------------------------------------------->
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Producto</label>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom03">Cantidad</label>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom04">Valor Unitario</label>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom04">Total</label>
      </div>
    </div> 
<!--------------------------------------------------------------------------------->
<?php 
require_once "../../Controller/Controller_Orden/C_verOrden.php";
      $sumatotal = 0;
    while($mostrar=mysqli_fetch_array($result2)){
		?>
<div class="form-row" id="inputFormRow">
<div class="col-md-4 mb-3" >
<select class="form-control selectpicker" name="id_producto[]"  id="id_producto" onchange="ShowSelecte()"  required aria-label="select example">

<option class="form-control" value="<?php echo $mostrar['ID_PRODUCTO']?>"><?php echo $mostrar['nombreProducto'] ?></option>

</select>
<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un producto</div>
</div>

<div class="col-md-2 mb-3">
<input type="number" name="cantida[]" value="<?php echo $mostrar['cantidadProductoSolicitado'] ?>" id="cantida" class="form-control"  placeholder="Cantidad" required >
<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Digite una cantidad</div>
</div>

<div class="col-md-2 mb-3">
<input type="text" class="form-control" value="<?php echo $mostrar['valorUnidad'] ?>" placeholder="Valor Unitario"  aria-label="Disabled input example" required readonly>
</div>
<?php 
        $total =0;  
        $total = ($mostrar['cantidadProductoSolicitado'] * $mostrar['valorUnidad']);
        $sumatotal = $total + $sumatotal; 
        ?>
<div class="col-md-2 mb-3">
<input type="text" class="form-control" value="<?php echo $total?>" placeholder="Total"  aria-label="Disabled input example" required readonly>
</div>

<div class="col-md-2 mb-3">
<button id="removeRow" type="button" class="btn btn-danger">Borrar</button>
</div>
</div>
<?php 
	}
	?> 
    <div id="newRow"></div>                
<button id="addRow" type="button" class="btn btn-info">+</button>

<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
</form>
  <script type="text/javascript">
// agregar registro

$("#addRow").click(function () {
var html = '';
html += '<div class="form-row" id="inputFormRow">';

html += '<div class="col-md-4 mb-3" >';
html += '<select class="form-control selectpicker" name="id_producto[]"  id="id_producto" onchange="ShowSelecte()"  required aria-label="select example">';
html += '<option class="form-control" value="">Seleccione Producto</option>';
html += '<?php while($mostra=mysqli_fetch_array($filter_result)){ ?>';
html += '<option class="form-control" value="<?php echo $mostra['ID_PRODUCTO']?>" data="<?php echo $mostra['valorUnidad']?>"><?php echo $mostra['nombreProducto'] ?></option>';
html += '<?php } ?>';
html += '</select>';
html += '<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un producto</div>';
html += '</div>';

html += '<div class="col-md-2 mb-3">';
html += '<input type="number" name="cantida[]" id="cantida" class="form-control"  placeholder="Cantidad" required >';
html += '<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Digite una cantidad</div>';
html += '</div>';

html += '<div class="col-md-2 mb-3">';
html += '<input type="text"  id="valorunitario" class="form-control"  placeholder="Valor Unitario" aria-label="Disabled input example" readonly >';
html += '</div>';

html += '<div class="col-md-2 mb-3">';
html += '<input type="text"  id="total" class="form-control"  placeholder="Total" aria-label="Disabled input example" readonly >';
html += '</div>';

html += '<div class="col-md-2 mb-3">';
html += '<button id="removeRow" type="button" class="btn btn-danger">Borrar</button>';
html += '</div>';

html += '</div> ';

$('#newRow').append(html);
});
// borrar registro
$(document).on('click', '#removeRow', function () {
$(this).closest('#inputFormRow').remove();
});

</script>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------->
  
  <div class="form-row">
    <div class="col-md-8 mb-3"> </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom04">Total</label>
      <input type="text" class="form-control" value="<?php echo $sumatotal?>" placeholder="Total"  aria-label="Disabled input example" required readonly>
      <div class="invalid-feedback"></div>
    </div>
  </div> 
  <script type="text/javascript">
        // funcion que se ejecuta cada vez que se selecciona una opción
        function ShowSelected() {
            
        var selec = document.getElementById("selec_Cliente").value;
        let arr = selec.split('/');
          //var idd = cod.dataset.id;
        document.getElementById("id_cliente").value = arr[0];
        document.getElementById("telefono").value = arr[1];
        document.getElementById("direccion").value = arr[2];
        document.getElementById("documento").value = arr[3];
        document.getElementById("tipo").value = arr[4];
          //elQty.value = cod;
          //alert(cod);
        }
    </script>
  <script>
  // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
      var forms = document.getElementsByClassName('needs-validation');
     // Bucle sobre ellas y evitar la presentación
     var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
   }, false);
  })();
</script>
</div>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
