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
<html lang="en">
    <head>
  	<title>nuevo_Cliente</title>
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
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="V.usuario.php">Negocios <span>Verdes</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="../Views_Usuario/V_usuario.php" class="nav-link">USUARIOS</a></li>
	            <li class="nav-item"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
	        	<li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
	        	<li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
	            <li class="nav-item active"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
                <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->
<div class="container"><br><br><br><br><br>
<form class="needs-validation" novalidate action="../Views_Cliente/V_cliente.php">
<bt><button class="btn btn-success float-right" type="submit">Editar Cliente</button></bt>
<br><br><br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" value="John jose bartolomedo" id="validationCustom01" placeholder="Nombre" value="" required>
      <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese un nombre</div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Identificación</label>
      <input type="number" class="form-control" value="9001856721" id="validationCustom02" placeholder="Identificación" value="" required>
      <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Identificación</div>
    </div>
    <div class="col-md-3 mb-3">
    <label for="validationCustom03">Tipo</label><!-- Seleccionar Cliente -->
    <select class="form-control" required aria-label="select example">
      <option class="form-control" value="1">NIT</option>
      <option class="form-control" value="2">C.C</option>
      <option class="form-control" value="3">Nuip</option>
    </select>
    <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un Tipo</div>
  </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Teléfono</label>
      <input type="number" class="form-control" value="7584269" placeholder="Teléfono" value="" required>
      <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Teléfono</div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Dirección</label>
      <input type="text" class="form-control" value="Calle 34 # 4-70"  placeholder="Dirección" required>
      <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese Dirección</div>
    </div>
  </div>
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
	</body>
</html>

