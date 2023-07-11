<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}
?>
<!doctype html>
  <html lang="en">
  <head>
  	<title>Crear_Orden</title>
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
<!----------------------------------------------------------------------- END nav ---------------------------------------------------->

<div class="container"><br><br>
<?php 
require_once "../../Controller/Controller_Orden/C_crearOrden.php";

    ?>

  <form method="POST" class="needs-validation" novalidate action="../../Controller/Controller_Orden/C_guardarOrdenDia.php">
  <bt><button class="btn btn-success float-right" type="submit">Crear Orden del Día</button></bt>
  <b style="font-size:150%;">Crear</b><br>
  <b style="font-size:200%;">MRP Orden Del Día</b><br><br>
  <?php  
  date_default_timezone_set("America/Bogota");
  $dia = date('d'); 
  $mes = date('m'); 
  $ano = date('y'); 
  $cont = mysqli_fetch_array($contador);
  $od = ("N."."OD". $dia.$mes.$ano.($cont[0]+1));
  ?>
  <input type="hidden" class="form-control" name="codigo" value="<?php echo $od ?>"  aria-label="Disabled input example" required readonly>
  <b style="font-size:100%;"><?php  echo $od; ?></b>
    <hr>  
    <?php
    $y = 1; 
    $costo_total =0;
    $arr_cantidad = array (
      array("xx","000")
);
    while($result=mysqli_fetch_array($result1)){
      $id_p = $result[0];
      $result2 = mysqli_query($conection,"SELECT * from producto where ID_PRODUCTO = '$result[0]'");
      $result_P=mysqli_fetch_array($result2);
      $result3 = mysqli_query($conection,"SELECT SUM(cantidadProductoSolicitado) from orden a JOIN ordenproducto e on a.ID_ORDEN = e.FK_ID_ORDEN and a.estado = 1 
      where e.FK_ID_PRODUCTO = '$result[0]'");
      $result=mysqli_fetch_array($result3);
    ?>
    <p style="text-align:center; font-size:200%;">Producto <?php echo $y ?> </p>
    <?php  $y = $y+1; ?>
    <br>
    <div class="form-row">
      <div class="col-md-1 mb-3">
        <label>Código</label>
        <input type="text" class="form-control" value="<?php echo $result_P['codigoProducto'] ?>"  aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Nombre</label>
        <input type="text" class="form-control" value="<?php echo $result_P['nombreProducto'] ?>"  aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom02">Cantidad</label>
        <input type="text" class="form-control" value="<?php echo $result[0] ?>" aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label>Valor Unidad</label>
        <input style="text-align:right" type="text" class="form-control" value="<?php echo $result_P['valorUnidad'] ?>"  aria-label="Disabled input example" required readonly>
      </div>
      <div class="col-md-2 mb-3">
        <label>Total</label>
        <?php $total = ($result_P['valorUnidad'] * $result[0]) ?>
        <input style="text-align:right" type="text" class="form-control" value="<?php echo $total ?>"  aria-label="Disabled input example" required readonly>
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
      <?php 
    $id_producto=mysqli_fetch_array($res_id_producto);
    $res_material = mysqli_query($conection,"SELECT * From material e JOIN productomaterial a ON e.ID_MATERIAL = a.FK_ID_MATERIAL AND a.FK_ID_PRODUCTO = '$id_producto[0]'");
    ?>
        <tr>
        <?php 
        $total_MT = 0;
        $cantidad_pedido = 0;
        $c_pedido = 0;
    while($res_mostrar=mysqli_fetch_array($res_material)){?>
          <td style="text-align:right"><?php echo $res_mostrar['codigoMaterial'] ?></td>
          <td style="text-align:right"><?php echo $res_mostrar['nombreMaterial'] ?></td>
          <?php
          $si = true;
          $cantidad_pedido = ($res_mostrar['cantidadMaterialProducto'] * $result[0]);  
          $longitud = count($arr_cantidad);
          for($i=0; $i<$longitud; $i++)
          {
            if($arr_cantidad[$i][0] == $res_mostrar['codigoMaterial']){
              ?>
              <td style="text-align:right"><?php echo $arr_cantidad[$i][1] ?></td>
              <?php 
              $arr_cantidad[$i][1] = ($arr_cantidad[$i][1] - $cantidad_pedido );
              ?>
              <td style="text-align:right"><?php echo $arr_cantidad[$i][1] ?></td>
              <?php 
              $si = false;
            }
          }
          if($si == true){
            ?>
            <td style="text-align:right"><?php echo $res_mostrar['cantidadMaterialInventario']  ?></td>
            <td style="text-align:right"><?php echo ($res_mostrar['cantidadMaterialInventario'] - $cantidad_pedido ) ?></td>
            <?php
            $cantidad_guardar = $res_mostrar['cantidadMaterialInventario'] - $cantidad_pedido;
            array_push($arr_cantidad, array ( $res_mostrar['codigoMaterial'],$cantidad_guardar));
          }
          ?>
          <td style="text-align:right"><?php echo $cantidad_pedido ?></td>
          <td style="text-align:right"><?php echo $res_mostrar['unidadMedidaMaterial'] ?></td>
          <td style="text-align:right"><?php echo $res_mostrar['valorMaterial'] ?></td>
          <?php $total_M = ($res_mostrar['valorMaterial'] * $cantidad_pedido);?>
          <td style="text-align:right"><?php echo $total_M?></td>
          <?php  $total_MT = $total_MT + $total_M ?>
        </tr>
        <?php
        $c_pedido = $c_pedido +$cantidad_pedido; 
    } 
    ?>

        <tr>
          <td colspan="7"></td>
          <td style="text-align:right"><?php echo $total_MT ?></td>
        </tr>
      </tbody>

    </table>
    <hr>
    <?php
    $costo_total = $costo_total + $total;
    } 
    ?>
    <input type="hidden" class="form-control" name="arr_cantidad" value="<?php echo  base64_encode(serialize($arr_cantidad)); ?>">
  <!--------------------------------------------------------------------------------- total ------------------------------------------------------->
  </form>
      <div class="form-row">
      <div class="col-md-8 mb-3"></div>
      <div class="col-md-2 mb-3">
        <label style="text-align:center" for="validationCustom03">Costos Totales</label>
        <input style="text-align:right" type="text" class="form-control" value="<?php echo $costo_total ?>" id="validationCustom01" aria-label="Disabled input example" required readonly>
      </div>
    </div> <hr> <hr> <hr> <hr>

  </div>

</html>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/add.js"></script>

</body>
</html>
