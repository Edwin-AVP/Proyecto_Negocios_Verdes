<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}else{
  if($_SESSION['rol'] != 1){ 
      header('location: ../login.php');
  }
}
?>
<!doctype html>
<html lang="en"></html>
    <head>
  	<title>Usuarios</title>
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
	            <li class="nav-item active"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
	        	<li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
	        	<li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
	            <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
                <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->
<div class="container"><br><br>
<form class="needs-validation" novalidate action="../Views_Orden/V_orden.php">
<b style="font-size:200%;">MRP Orden Del Día</b><br><br>

<b style="font-size:100%;">N.28.03.22</b>
<hr>  
<div class="form-row">

  <label style="text-align:center; font-size:200%;">Producto 1</label>
</div><br>
  <div class="form-row">
    <div class="col-md-1 mb-3">
      <label for="validationCustom01">Código</label>
      <input type="text" class="form-control" value="PR020" id="validationCustom01" aria-label="Disabled input example" required readonly>
      <div class="valid-feedback">
        Bien!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">Nombre</label>
      <input type="text" class="form-control" value="Shampoo limón 500ml" id="validationCustom01" aria-label="Disabled input example" required readonly>
      <div class="valid-feedback">
        Bien!
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom02">Cantidad</label>
      <input type="text" class="form-control" value="20" id="validationCustom01" aria-label="Disabled input example" required readonly>
      <div class="valid-feedback">
        Bien!
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom03">Valor Unidad</label>
      <input type="text" class="form-control" value="13.770" id="validationCustom01" aria-label="Disabled input example" required readonly>
      <div class="invalid-feedback"></div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom03">Total</label>
      <input type="text" class="form-control" value="275.400" id="validationCustom01" aria-label="Disabled input example" required readonly>
      <div class="invalid-feedback"></div>
    </div>

  </div> 
  <hr>                   <!-- Separador -->
  

</form>


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
