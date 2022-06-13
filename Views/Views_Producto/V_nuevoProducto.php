  <?php
  session_start();

  if(!isset($_SESSION['rol'])){ 
    header('location: ../login.php');
  }

 


  ?>
  <!doctype html>
    <html lang="en">
    <head>
    	<title>Nuevo_Producto</title>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
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
            }
          ?>
          <li class="nav-item"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
          <li class="nav-item active"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
          <li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
          <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
          <li class="nav-item"><a href="../../Controller/Controller_Sesion.php?cerrar_sesion='1'" class="nav-link">SALIR</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------------------------------------------------------------------- END nav ------------------------------------------------------------------>
  <div class="container"><br><br><br><br><br>

    <form method="POST"  class="needs-validation" novalidate action="../../Controller/Controller_Producto/C_guardarNuevoProducto.php">
      <bt><button class="btn btn-success float-right" type="submit">Crear Producto</button></bt>
      <br><br><br>
      <div class="form-row">
        <div class="col-md-2 mb-3">
          <label for="validationCustom01">Código Producto</label>
          <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código Producto"  required>
          <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Código Producto</div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom01">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"  required>
          <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Nombre</div>
        </div>
        <div class="col-md-2 mb-3">
        <label for="validationCustom01">Valor Unidad</label>
        <input type="number" step="any" value="" class="form-control" name="valor" id="valor" placeholder="Valor Unidad"  required>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese valor producto</div>
      </div> 
        <div class="col-md-1 mb-3"></div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Nota</label>
          <label>Recuerde que debe ingresar los materiales necesarios para la creación de un solo ítem.</label>
        </div> 

      </div>
      <hr>   
      <div id="newRow"></div>                
      <button id="addRow" type="button" class="btn btn-info">+</button>

<?php 
require_once "../../Controller/Controller_Producto/C_nuevoProducto.php";
?>
</form>

    <script type="text/javascript">

        // funcion que se ejecuta cada vez que se selecciona una opción

        function ShowSelected() {
            
          var cod = document.getElementById("id_material").value;
          //var idd = cod.dataset.id;
          document.getElementById("id").value = cod;
          //elQty.value = cod;
          //alert(cod);
        }
    </script>
<script type="text/javascript">
// agregar registro
<?php 
require_once "../../Controller/Controller_Producto/C_nuevoProducto.php";
?>
$("#addRow").click(function () {
var html = '';
html += '<div class="form-row" id="inputFormRow">';

html += '<div class="col-md-3 mb-3" >';
html += '<select class="form-control selectpicker" name="id_material[]"  id="id_material" onchange="ShowSelected()"  required aria-label="select example">';
html += '<option class="form-control" value="">Seleccione Material</option>';
html += '<?php while($mostra=mysqli_fetch_array($filter_result)){ ?>';
html += '<option class="form-control" value="<?php echo $mostra['ID_MATERIAL']?>" data="<?php echo $mostra['unidadMedidaMaterial']?>"><?php echo $mostra['nombreMaterial'] ?></option>';
html += ' <?php } ?>';
html += '</select>';
html += '<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un Material</div>';
html += '</div>';

html += '<div class="col-md-3 mb-3">';
html += '<input type="number" name="cantida[]" id="cantida[]" class="form-control"  placeholder="Cantidad" required >';
html += '<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Digite una cantidad</div>';
html += '</div>';

html += '<div class="col-md-3 mb-3">';
html += '<form name="FormABC">';
html += '<input type="text" name="id[]" id="id" class="form-control"  placeholder="Unidad" aria-label="Disabled input example" readonly >';
html += '</form>';
html += '</div>';

html += '<div class="col-md-3 mb-3">';
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
<script src="js/add.js"></script>
<script src="js/agregarCelda.js"></script>

</body>
</html>

