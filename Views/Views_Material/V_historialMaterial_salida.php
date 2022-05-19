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
  	<title>V_historialMaterial_entrada</title>
    <link rel="shortcut icon" href="../../images/logo PV.png">
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
	        	<li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
	        	<li class="nav-item active"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
	            <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
                <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
	        </ul>
	      </div>
	    </div>
	</nav>
    <!-- END nav -->
<div class="container"><br><br>
<a href="../Views_Material/V_historialMaterial.php" class="btn btn-success float-right" role="button">Atras</a>
<br><br>

<p style="text-align:center; font-size:200%;">Historial de Salidas</p>
<br><br>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
        </form>
<br><br>
  <table class="table table">
    <thead class="thead-light">
      <tr>
        <th >Código</th>
        <th >Nombre</th>
        <th >Motivo</th>
        <th >Fecha</th>
        <th >Cantidad</th>
        <th >Unidad</th>
        <th >Tipo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td >MT010</td>
        <td >D</td>
        <td >Error en producción</td>
        <td >11/05/2022</td>
        <td >360</td>
        <td >Kg</td>
        <td >Insumo</td>
      </tr>
      <tr>
        <td >MT010</td>
        <td >D</td>
        <td >Error en producción</td>
        <td >11/05/2022</td>
        <td >360</td>
        <td >Kg</td>
        <td >Insumo</td>
      </tr>
      <tr>
        <td >MT010</td>
        <td >D</td>
        <td >Error en producción</td>
        <td >11/05/2022</td>
        <td >360</td>
        <td >Kg</td>
        <td >Insumo</td>
      </tr>
      <tr>
        <td >MT010</td>
        <td >D</td>
        <td >Error en producción</td>
        <td >11/05/2022</td>
        <td >360</td>
        <td >Kg</td>
        <td >Insumo</td>
      </tr>
      <tr>
        <td >MT010</td>
        <td >D</td>
        <td >Error en producción</td>
        <td >11/05/2022</td>
        <td >360</td>
        <td >Kg</td>
        <td >Insumo</td>
      </tr>
    </tbody>
  </table>
</div>
<br><br><br>

</html>
	<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/add.js"></script>
	</body>
</html>
