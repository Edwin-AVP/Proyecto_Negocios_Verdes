<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en">
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
<!------------------------------------------------------------------------------- END nav ------------------------------------------------------------->
<div class="container"><br><br><br><br><br>
    <a href="../Views_Orden/V_orden.php" class="btn btn-success float-right" role="button">Atras</a>
    <br><br><br>
    <?php 
require_once "../../Controller/Controller_Orden/C_verOrden.php";
$mostrar=mysqli_fetch_array($result1)
  ?>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Número de Orden</label>
        <input type="text" value="<?php echo $mostrar['numeroOrden'] ?>" class="form-control" id="validationCustom01" placeholder="Numero de Orden" aria-label="Disabled input example" required  readonl></div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Cliente</label>
          <input type="text" class="form-control" value="<?php echo $mostrar['nombreCliente'] ?>" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationCustom02">Teléfono</label>
          <input type="text" class="form-control" value="<?php echo $mostrar['telefono'] ?>" placeholder="Teléfono" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom03">Dirección</label>
          <input type="text" class="form-control" value="<?php echo $mostrar['direccion'] ?>" placeholder="Dirección" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom04">Número Documento</label>
          <input type="text" class="form-control" value="<?php echo $mostrar['IdentificacionCliente'] ?>" placeholder="Número Documento" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-1 mb-3">
          <label for="validationCustom04">Tipo</label>
          <input type="text" class="form-control" value="<?php echo $mostrar['tipoIdentificacion'] ?>" placeholder="Tipo" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
      </div> 
      <hr> <!-------------------------------------------------------------------------- Separador ---------------------------------------------------------------->
      <div class="form-row"> 
        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Producto</label>
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

      <?php 
      $sumatotal = 0;
   while($mostrar=mysqli_fetch_array($result2)){
		 ?>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control" value="<?php echo $mostrar['nombreProducto'] ?>" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-2 mb-3">
          <input type="number" value="<?php echo $mostrar['cantidadProductoSolicitado'] ?>" class="form-control"  placeholder="Cantidad" id="validationCustom01" aria-label="Disabled input example" required readonly >
        </div>
        <div class="col-md-2 mb-3">
          <input type="text" class="form-control" value="<?php echo $mostrar['valorUnidad'] ?>" placeholder="Valor Unitario" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
        <div class="col-md-2 mb-3">
        <?php 
        $total =0;  
        $total = ($mostrar['cantidadProductoSolicitado'] * $mostrar['valorUnidad']);
        
        $sumatotal = $total + $sumatotal; 
        ?>
          <input type="text" class="form-control" value="<?php echo $total?>" placeholder="Total" id="validationCustom01" aria-label="Disabled input example" required readonly>
        </div>
      </div>
      <?php 
	  }
	    ?>
      <!--<div class="form-row"> 
Textos completos
ID_PRODUCTO	
nombreProducto	
codigoProducto	
valorUnidad


Textos completos
ID_ORDEN_PRODUCTO	
cantidadProductoSolicitado	
FK_ID_ORDEN	
FK_ID_PRODUCTO	
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
      </div> -->
   
    <div class="form-row">
      <div class="col-md-8 mb-3"> </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom04">Total</label>
        <input type="text" class="form-control" value="<?php echo $sumatotal?>" placeholder="Total" id="validationCustom01" aria-label="Disabled input example" required readonly>
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
