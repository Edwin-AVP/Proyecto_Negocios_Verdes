  <?php
  session_start();

  if(!isset($_SESSION['rol'])){ 
    header('location: ../login.php');
  }
  ?>
  <!doctype html>
    <html lang="en"></html>
    <head>
    	<title>Editar_Producto</title>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="fa fa-bars"></span> Menu
       </button>
       <div class="collapse navbar-collapse" id="ftco-nav">
         <ul class="navbar-nav m-auto">
          <li class="nav-item"><a href="../Views_Usuario/V_usuario.php" class="nav-link">USUARIOS</a></li>
          <li class="nav-item"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
          <li class="nav-item active"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
          <li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
          <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
          <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <div class="container"><br><br><br><br><br>

    <form class="needs-validation" novalidate action="../Views_Producto/V_producto.php">
      <bt><button class="btn btn-success float-right" type="submit">Editar Producto</button></bt>
      <br><br><br>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationCustom01">Código Producto</label>
          <input type="text" value="PR020" class="form-control" id="validationCustom01" placeholder="Numero de Orden"  required>
          <div class="valid-feedback">
            Bien!
          </div>
        </div>
        <div class="col-md-4 mb-3">
         <label for="validationCustom01">Nombre</label>
         <input type="text" value="Shampoo Limón 250ml" class="form-control" id="validationCustom01" placeholder="Numero de Orden"  required>
         <div class="valid-feedback">
          Bien!
        </div>
      </div>
      <div class="col-md-1 mb-3"></div>
      <div class="col-md-4 mb-3">
       <label for="validationCustom01">Nota</label>
       <label>Recuerde que debe ingresar los materiales necesarios para la creación de un solo ítem.</label>
     </div> 
   </div>
   <hr>                   <!-- Separador -->
   <div class="form-row"><!---------------------------------------------Titulos-------------------------------------------------------------------------->
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Material</label><!-- Seleccionar producto -->
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Cantidad</label>
      
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Unidad</label><!-- Seleccionar producto -->
    </div>
  </div> 

  <div class="form-row"><!----------------------------------------------------------------------------------------------------------------------->
    <div class="col-md-4 mb-3">
      <select class="form-control" required aria-label="select example">
        <option class="form-control" value="1">D</option>
        <option class="form-control" value="1">E</option>
        <option class="form-control" value="2">F</option>
        <option class="form-control" value="3">G</option>
      </select>
      <div class="invalid-feedback">Seleccione un Material</div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="number" value="2" class="form-control"  placeholder="Cantidad" required >
      <div class="invalid-feedback">Digite una cantidad</div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="text" value="Kg" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
    </div><button type="button" class="btn btn-danger bt-eliminar">Eliminar</button>
  </div> 

  <div class="form-row"><!----------------------------------------------------------------------------------------------------------------------->
    <div class="col-md-4 mb-3">
      <select class="form-control" required aria-label="select example">
        <option class="form-control" value="1">D</option>
        <option class="form-control" value="1">E</option>
        <option class="form-control" value="2">F</option>
        <option class="form-control" value="3">G</option>
      </select>
      <div class="invalid-feedback">Seleccione un Material</div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="number" value="6" class="form-control"  placeholder="Cantidad" required >
      <div class="invalid-feedback">Digite una cantidad</div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="text" value="Kg" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
    </div><button type="button" class="btn btn-danger bt-eliminar">Eliminar</button>
  </div> 
  <div class="form-row"><!----------------------------------------------------------------------------------------------------------------------->
    <div class="col-md-4 mb-3">
      <select class="form-control" required aria-label="select example">
        <option class="form-control" value="1">f</option>
        <option class="form-control" value="1">E</option>
        <option class="form-control" value="2">D</option>
        <option class="form-control" value="3">G</option>
      </select>
      <div class="invalid-feedback">Seleccione un Material</div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="number" value="8" class="form-control"  placeholder="Cantidad" required >
      <div class="invalid-feedback">Digite una cantidad</div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="text" value="Kg" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
    </div><button type="button" class="btn btn-danger bt-eliminar">Eliminar</button>
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
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
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
<br><br><br>
<div class="container">
</div> 
</html>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/add.js"></script>
</body>
</html>