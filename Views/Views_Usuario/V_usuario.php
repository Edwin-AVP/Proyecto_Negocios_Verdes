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
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="V_usuario.php">Negocios <span>Verdes</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="../Views_Usuario/V_usuario.php" class="nav-link">USUARIOS</a></li>
	        <li class="nav-item"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
	        	<li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
	        	<li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
	          <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
            <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="container"><br><br><br><br>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
        </form>
      <br>
<a href="../Views_Usuario/V_nuevoUsuario.php" class="btn btn-success float-right" role="button">Nuevo Usuario</a>
  
<br><br><br>
  <table class="table ">
    <thead class="thead-light">
      <tr>
        <th>C.C.</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php 
    require_once "../../Controller/Controller_Usuario/C_usuarios.php";
		while($mostrar=mysqli_fetch_array($result)){
		?>
      <tr>
        <td><?php echo $mostrar['cedula'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['username'] ?></td>
        <td><?php echo $mostrar['password'] ?></td>
        <td><a href="../Views_Usuario/V_editarUsuario.php" class="btn btn-success" role="button">Editar</a>
        <button class="btn btn-danger">Inhabilitar</button></td>
      </tr>
      <?php 
	}
	    ?>
    </tbody>
  </table>
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

