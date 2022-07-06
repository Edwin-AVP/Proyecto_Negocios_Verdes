<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en">
  <head>
  	<title>Orden</title>
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
<!-------------------------------------------------------------------------------- END nav ---------------------------------------------------------------->
<div class="container"><br><br><br><br>   
<form action="" method="POST"  class="form-inline">
    <input class="form-control mr-sm-2" name="valueToSearh" type="search" placeholder="Search" aria-label="Search">
          <button type="submit" name="search" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
    </form><br>
  <a href="../Views_Orden/V_nuevaOrden.php" class="btn btn-success float-right" role="button">Nuevo Orden</a>
  <a href="../Views_Orden/V_historialOrden.php" class="btn btn-success float-right" role="button">Historial</a>
  <br><br><br>
  <table class="table ">
    <thead class="thead-light">
      <tr>
        <th>No°</th>
        <th>Nombre Cliente</th>
        <th>Fecha</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php 
require_once "../../Controller/Controller_Orden/C_orden.php";
while($mostrar=mysqli_fetch_array($result)){
    ?>

  <tr>
    <td><?php echo $mostrar['numeroOrden'] ?></td>
    <td><?php echo $mostrar['nombreCliente'] ?></td>
    <td><?php echo $mostrar['fecha'] ?></td>

    <td>
      
        <a <?php echo "href='../Views_Orden/V_MRP.php?id=".$mostrar['ID_ORDEN']."'" ?>class="btn btn-primary" role="button">MRP</a>
        <a <?php echo "href='../Views_Orden/V_verOrden.php?id=".$mostrar['ID_ORDEN']."'" ?>class="btn btn-info" role="button">Ver</a>
        <a <?php echo "href='../Views_Orden/V_editarOrden.php?id=".$mostrar['ID_ORDEN']."'" ?>class="btn btn-success" role="button">Editar</a>
        <a <?php echo "href='../../Controller/Controller_Orden/C_cancelarOrden.php?id=".$mostrar['ID_ORDEN']."'" ?> class="btn btn-danger" role="button">Cancelar</a>
        <?php if($mostrar['estado'] == 1 ){
        ?><a <?php echo "href='../../Controller/Controller_Orden/C_pausarOrden.php?id=".$mostrar['ID_ORDEN']."'" ?> class="btn btn-secondary" role="button">Pausar</a>
          <?php
            }else{if($mostrar['estado'] == 0 ){
              ?><a <?php echo "href='../../Controller/Controller_Orden/C_continuarOrden.php?id=".$mostrar['ID_ORDEN']."'" ?>class="btn btn-primary " role="button">Continuar</a>  <?php
          }
          }
          ?>
    </td>
  </tr>
  <?php 
}
  ?>
  </table>
</div>
<br><br><br>
<div class="container">

  <a href="../Views_Orden/V_ordenDia.php" class="btn btn-success float-right" role="button">Orden del día</a>
  <a href="../Views_Orden/V_historialOrdenDia.php" class="btn btn-success float-right" role="button">Historial Orden del día</a>
  <a href="../Views_Orden/V_crearOrden.php" class="btn btn-success float-right" role="button">Crear Orden del día</a>
</div> 
</html>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

