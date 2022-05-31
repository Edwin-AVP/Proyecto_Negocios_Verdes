<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en">
  <head>
  	<title>Cliente</title>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="fa fa-bars"></span> Menu
       </button>
       <div class="collapse navbar-collapse" id="ftco-nav">
         <ul class="navbar-nav m-auto">
           <!--Si el usuario no es el administrador no mostrara los USUARIOS-->
           <?php if($_SESSION['rol'] == 1 ){?>
      <li class="nav-item"><a href="../Views_Usuario/V_usuario.php" class="nav-link">USUARIOS</a></li> <?php
            }else{if($_SESSION['rol'] != 1 ){}}
          ?>
           <li class="nav-item"><a href="../Views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
           <li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
           <li class="nav-item"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
           <li class="nav-item active"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
           <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
         </ul>
       </div>
     </div>
   </nav>
   <!------------------------------------------------------------------------------ END nav -------------------------------------------------------------->
   <div class="container"><br><br><br><br><br><br><br> 
    <a href="../Views_Cliente/V_cliente.php" class="btn btn-success float-right" role="button">Atras</a><br><br><br>
    <table class="table ">
      <thead class="thead-light">
        <tr>
          <th>Nombre</th>
          <th>Identificación</th>
          <th>Tipo</th>
          <th>Teléfono</th>
          <th>Dirección</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody>
      <?php 

require_once "../../Controller/Controller_Cliente/C_verCliente.php";
$mostrar=mysqli_fetch_array($result)
  ?>
  <tr>
    <td><?php echo $mostrar['nombreCliente'] ?></td>
    <td><?php echo $mostrar['IdentificacionCliente'] ?></td>
    <td><?php echo $mostrar['tipoIdentificacion'] ?></td>
    <td><?php echo $mostrar['telefono'] ?></td>
    <td><?php echo $mostrar['direccion'] ?></td>
    <td><?php echo $mostrar['correo'] ?></td>
  </tr>
      </tbody>
    </table>
  </div>
  </html>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>

