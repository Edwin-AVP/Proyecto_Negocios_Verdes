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
  	<title>Ver_Usuario</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
        <li class="nav-item"><a href="../../Controller/Controller_Sesion.php?cerrar_sesion='1'" class="nav-link">SALIR</a></li>
      </ul>
    </div>
  </div>
</nav>
<!------------------------------------------------------------------------------- END nav ----------------------------------------------------------------------->
<div class="container"><br><br><br><br><br><br><br>
  <a href="../Views_Usuario/V_usuario.php" class="btn btn-success float-right" role="button">Atras</a>
  
  <br><br><br>
  <table class="table ">
    <thead class="thead-light">
      <tr>
        <th>C.C.</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Rol</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 

      require_once "../../Controller/Controller_Usuario/C_verUsuario.php";
     $mostrar=mysqli_fetch_array($result)
        ?>
        <tr>
          <td><?php echo $mostrar['cedula'] ?></td>
          <td><?php echo $mostrar['nombre'] ?></td>
          <td><?php echo $mostrar['telefono'] ?></td>
          <td><?php if($mostrar['FK_ID_ROL'] == 2 ){
          echo "Empleado" ;
          }else{if($mostrar['FK_ID_ROL'] == 1 ){
            echo "Administrador" ;
          }else{
            echo "Inhabilitado" ;
          }
          }
          ?></td>
          <td><?php echo $mostrar['username'] ?></td>
          <td><?php echo $mostrar['password'] ?></td>
          
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

