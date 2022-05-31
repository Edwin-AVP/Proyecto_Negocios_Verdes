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
          <li class="nav-item"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
          <li class="nav-item active"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
          <li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
          <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
          <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------------------------------------------------------------------- END nav ------------------------------------------------------------------>
  <div class="container"><br><br><br><br><br>

    <form class="needs-validation" novalidate action="../Views_Producto/V_producto.php">
      <bt><button class="btn btn-success float-right" type="submit">Crear Producto</button></bt>
      <br><br><br>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationCustom01">Código Producto</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Código Producto"  required>
          <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Código Producto</div>
        </div>
        <div class="col-md-4 mb-3">
         <label for="validationCustom01">Nombre</label>
         <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre"  required>
         <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Nombre</div>
       </div>
       <div class="col-md-1 mb-3"></div>
       <div class="col-md-4 mb-3">
         <label for="validationCustom01">Nota</label>
         <label>Recuerde que debe ingresar los materiales necesarios para la creación de un solo ítem.</label>
       </div> 

     </div>
     <hr>                   
     <div class="form-row"> <!--------------------------------------- div de Productos -------------------------------------------------->
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Material</label><!-- Seleccionar producto -->
        <select class="form-control" required aria-label="select example">
          <option class="form-control" value="">Seleccione Material</option>
          <option class="form-control" value="1">Material 1</option>
          <option class="form-control" value="2">Material 2</option>
          <option class="form-control" value="3">Material 3</option>
        </select>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un Material</div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Cantidad</label>
        <input type="number" class="form-control"  placeholder="Cantidad" required >
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Digite una cantidad</div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Unidad</label>
        <input type="text" value="" class="form-control" placeholder="Unidad" id="validationCustom01" aria-label="Disabled input example" required  readonly>
      </div>
    </div> 


    <script>    $(document).ready(function() {
      $("#add_pro").click(function(){
        var contador = $("input[type='text']").length;
        $(this).before('<div required><div class="form-row"><div class="col-md-4 mb-3"> <select  class="form-control" required aria-label="select example" id="material'+ contador +'" name="Material[]"><option  value="">Material</option><option  value="1">Material 1</option><option  value="2">Material 2</option><option  value="3">Material 3</option></select><div class="invalid-feedback">Seleccione un Material</div></div><div class="col-md-3 mb-3"> <input type="number" class="form-control" placeholder="Cantidad" required id="cantidad'+ contador +'" name="cantidad[]"/></div><div class="invalid-feedback">Seleccione un Material</div><div class="col-md-3 mb-3"><input type="text" value="" class="form-control" placeholder="Unidad" id="unidad'+ contador +'" aria-label="Disabled input example" required  readonly></div><button type="button" class="btn btn-danger bt-eliminar">Eliminar</button></div></div><div class="invalid-feedback">Seleccione una unidad</div>');

      });

      $(document).on('click', '.btn-danger', function(){
        $(this).parent().remove();
      });
    });	</script> 

  </form>
  <button class="btn btn-success" type="button" id="add_pro">+</button>
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

</body>
</html>

