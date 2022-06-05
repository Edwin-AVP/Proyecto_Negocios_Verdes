<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en">
  <head>
  	<title>Historial_orden_Día_ver</title>
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
<!------------------------------------------------------------------------------------------ END nav ------------------------------------------------------------------->
<div class="container"><br><br>
  <a href="../Views_Orden/V_historialOrdenDia.php" class="btn btn-success float-right" role="button">Atras</a>
  <br><br>
  <form class="needs-validation" novalidate action="../Views_Orden/V_orden.php">
    <b style="font-size:150%;">Historial</b><br>
    <b style="font-size:200%;">MRP Orden Del Día</b><br><br>
    <b style="font-size:100%;">N.28.03.22</b>
    <hr>  
    <p style="text-align:center; font-size:200%;">Producto 1</p>
    <br>
    <div class="form-row">
      <div class="col-md-1 mb-3">
        <label for="validationCustom01">Código</label>
        <input type="text" class="form-control" value="PR020" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Nombre</label>
        <input type="text" class="form-control" value="Shampoo limón 500ml" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom02">Cantidad</label>
        <input type="text" class="form-control" value="20" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom03">Valor Unidad</label>
        <input style="text-align:right" type="text" class="form-control" value="13.770" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div> 
      <div class="col-md-2 mb-3">
        <label for="validationCustom03">Total</label>
        <input style="text-align:right" type="text" class="form-control" value="275.400" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      
    </div> 
    <p style="text-align:center; font-size:200%;">Materiales</p>
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th style="text-align:center">Código</th>
          <th style="text-align:center">Nombre</th>
          <th style="text-align:center">Inventario<br>Inicial</th>
          <th style="text-align:center">Inventario<br>Final</th>
          <th style="text-align:center">Cantidad<br>Pedido</th>
          <th style="text-align:center">Unidad</th>
          <th style="text-align:center">Valor<br>Unitario</th>
          <th style="text-align:center">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td colspan="7"></td>
          <td style="text-align:right">204.000</td>
        </tr>
      </tbody>
    </table>

    <hr><!--------------------------------------------------------------------------- Separador ------------------------------------------------------------->
    <p style="text-align:center; font-size:200%;">Producto 2</p>
    <br>
    <div class="form-row">
      <div class="col-md-1 mb-3">
        <label for="validationCustom01">Código</label>
        <input type="text" class="form-control" value="PR020" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Nombre</label>
        <input type="text" class="form-control" value="Shampoo limón 250ml" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom02">Cantidad</label>
        <input type="text" class="form-control" value="10" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom03">Valor Unidad</label>
        <input style="text-align:right" type="text" class="form-control" value="13.770" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom03">Total</label>
        <input style="text-align:right" type="text" class="form-control" value="137.700" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div> 
    </div> 
    <p style="text-align:center; font-size:200%;">Materiales</p>


    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th style="text-align:center">Código</th>
          <th style="text-align:center">Nombre</th>
          <th style="text-align:center">Inventario<br>Inicial</th>
          <th style="text-align:center">Inventario<br>Final</th>
          <th style="text-align:center">Cantidad<br>Pedido</th>
          <th style="text-align:center">Unidad</th>
          <th style="text-align:center">Valor<br>Unitario</th>
          <th style="text-align:center">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <tr>
          <td style="text-align:right">MT010</td>
          <td style="text-align:right">D</td>
          <td style="text-align:right">400</td>
          <td style="text-align:right">360</td>
          <td style="text-align:right">40</td>
          <td style="text-align:right">Kg</td>
          <td style="text-align:right">100</td>
          <td style="text-align:right">4000</td>
        </tr>
        <td colspan="7"></td>
        <td style="text-align:right">102.000</td>
      </tbody>
    </table>
    <div class="form-row">
     <div class="col-md-8 mb-3"></div>
     <div class="col-md-2 mb-3">
      <label style="text-align:center" for="validationCustom03">Costos Totales</label>
      <input style="text-align:right" type="text" class="form-control" value="413.100" id="validationCustom01" aria-label="Disabled input example" required readonly>
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
