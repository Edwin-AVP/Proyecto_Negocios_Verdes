<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en"></html>
  <head>
  	<title>Ver_Producto</title>
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
<!-------------------------------------------------------------------------------- END nav ----------------------------------------------------->
<div class="container"><br><br><br><br><br>
  <form class="needs-validation" novalidate action="../Views_Producto/V_producto.php">
    <bt><button class="btn btn-success float-right" type="submit">Atras</button></bt>
    <br><br><br>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Código Producto</label>
        <input type="text" value="PR020" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
      </div>
      <div class="col-md-4 mb-3">
       <label for="validationCustom01">Nombre</label>
       <input type="text" value="shampoo Limon 500ml" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
     </div> 
   </div><!----------------------------------------------------------------------------------------------------------------------->
   <hr>                 
   <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Material</label>
      <input type="text" value="D" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Cantidad</label>
      <input type="text" value="2" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Unidad</label>
      <input type="text" value="Kg" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
    </div>
  </div> <!----------------------------------------------------------------------------------------------------------------------->
  <div class="form-row"> 
   <div class="col-md-4 mb-3">
     <input type="text" value="E" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
   </div>
   <div class="col-md-3 mb-3">
     <input type="text" value="8" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
   </div>
   <div class="col-md-3 mb-3">
     <input type="text" value="Kg" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
   </div>
 </div> <!----------------------------------------------------------------------------------------------------------------------->
 <div class="form-row">
  <div class="col-md-4 mb-3">
   <input type="text" value="F" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
 </div>
 <div class="col-md-3 mb-3">
   <input type="text" value="6" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
 </div>
 <div class="col-md-3 mb-3">
   <input type="text" value="Kg" class="form-control" id="validationCustom01" aria-label="Disabled input example" required  readonly>
 </div>
</div> 
</form>

</div>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/add.js"></script>

</body>
</html>

