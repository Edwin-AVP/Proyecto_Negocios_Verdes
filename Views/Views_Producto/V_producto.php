<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en">
  <head>
  	<title>Producto</title>
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
    <link rel="stylesheet" type="text/css" href="/css/style-button.css" media="screen"/>
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
           <!--Si el usuario no es el administrador no mostrara los USUARIOS-->
           <?php if($_SESSION['rol'] == 1 ){?>
        <li class="nav-item"><a href="../Views_Usuario/V_usuario.php" class="nav-link">USUARIOS</a></li> <?php
            }
          ?>
        <li class="nav-item"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
        <li class="nav-item active"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
        <li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
        <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
        <li class="nav-item"><a href="../../Controller/Controller_Sesion.php?cerrar_sesion='1'" class="nav-link">SALIR</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-------------------------------------------------------------------- END nav ------------------------------------------------------------------->
<div class="container"><br><br><br><br>
  <form method="POST" class="form-inline">
  <form action="" method="POST" class="form-inline">
          <input class="form-control mr-sm-2" name="valueToSearh" type="search" placeholder="Search" aria-label="Search">
          <button type="submit" name="search" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
        </form><br>
  <a href="../Views_Producto/V_nuevoProducto.php" class="btn btn-success float-right" role="button">Nuevo producto</a>
  <br><br><br>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Valor Unidad</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

<?php 
require_once "../../Controller/Controller_Producto/C_producto.php";
while($mostrar=mysqli_fetch_array($result)){
 ?>

  <tr>
    <td><?php echo $mostrar['codigoProducto'] ?></td>
    <td><?php echo $mostrar['nombreProducto'] ?></td>
    <td><?php echo $mostrar['valorUnidad'] ?></td>

    <td>
        <a <?php echo "href='../Views_Producto/V_verProducto.php?id=".$mostrar['ID_PRODUCTO']."'" ?>class="btn btn-info" role="button">Ver</a>
        <a href="../Views_Producto/V_editarProducto.php" class="btn btn-success" role="button">Editar</a>
        <a <?php echo "href='javascript:preguntar(".$mostrar['ID_PRODUCTO'].")'" ?>class="btn btn-danger" role="button">Eliminar</a>

         
    </td>
  </tr>
  <?php 
}
  ?>
</tbody>
</table>
<script language="JavaScript">
function preguntar(contacto){//comfirmacion para eliminar producto
    if (confirm('¿Estas seguro que desea eliminar este producto?')){
      window.location.href="../../Controller/Controller_Producto/C_eliminatProducto.php?id="+contacto;
    }
}
</script>
</div>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

