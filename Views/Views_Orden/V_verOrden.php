<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en"></html>
  <head>
  	<title>Ver_Orden</title>
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
        <li class="nav-item active"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
        <li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
        <li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
        <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
        <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
      </ul>
    </div>
  </div>
</nav>
<!------------------------------------------------------------------------------- END nav ------------------------------------------------------------->
<div class="container"><br><br><br><br><br>
  <form class="needs-validation" novalidate action="../Views_Orden/V_orden.php">
    <a href="../Views_Orden/V_orden.php" class="btn btn-success float-right" role="button">Atras</a>
    <br><br><br>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Número de Orden</label>
        <input type="text" value="TP025" class="form-control" id="validationCustom01" placeholder="Numero de Orden" aria-label="Disabled input example" required  readonl></div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Cliente</label>
          <input type="text" class="form-control" value="Cliente 2" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationCustom02">Teléfono</label>
          <input type="text" class="form-control" value="7516364" placeholder="Teléfono" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom03">Dirección</label>
          <input type="text" class="form-control" value="Calle 95 # 5-25" placeholder="Dirección" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom04">Número Documento</label>
          <input type="text" class="form-control" value="9007824596" placeholder="Número Documento" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-1 mb-3">
          <label for="validationCustom04">Tipo</label>
          <input type="text" class="form-control" value="NIT" placeholder="Tipo" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
      </div> 
      <hr> <!-------------------------------------------------------------------------- Separador ---------------------------------------------------------------->
      <div class="form-row"> 
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Producto</label><!-- Seleccionar producto -->
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
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" value="Producto 1" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-2 mb-3">
          <input type="number" value="20" class="form-control"  placeholder="Cantidad" id="validationCustom01" aria-label="Disabled input example" required readonly >
        </div>
        <div class="col-md-2 mb-3">
          <input type="text" class="form-control" value="13.770" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-2 mb-3">
          <input type="text" class="form-control" value="275.400" placeholder="Total" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
      </div>
      <div class="form-row"> 
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" value="Producto 3" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-2 mb-3">
          <input type="number" value="10" class="form-control"  placeholder="Cantidad" aria-label="Disabled input example" required readonly  >
        </div>
        <div class="col-md-2 mb-3">
          <input type="text" class="form-control" value="13.770" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-2 mb-3">
          <input type="text" class="form-control" value="137.700" placeholder="Total" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
      </div> 
    </form>
    <div class="form-row">
      <div class="col-md-8 mb-3"> </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom04">Total</label>
        <input type="text" class="form-control" value="413.100" placeholder="Total" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
    </div> 
  </div>
  </html>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
