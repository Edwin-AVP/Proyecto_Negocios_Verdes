<?php
session_start();

if(!isset($_SESSION['rol'])){ 
  header('location: ../login.php');
}

?>
<!doctype html>
  <html lang="en">
  <head>
  	<title>Material</title>
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
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
     <div class="container">
      <a class="navbar-brand" href="../Views_Usuario/V_usuario.php">Negocios <span>Verdes</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav m-auto">
        <li class="nav-item"><a href="../Views_Usuario/V_usuario.php" class="nav-link">USUARIOS</a></li>
        <li class="nav-item"><a href="../views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
        <li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
        <li class="nav-item active"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
        <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
        <li class="nav-item"><a href="../../Controller/cerrarSesion.php" class="nav-link">SALIR</a></li>
      </ul>
    </div>
  </div>
</nav>
<!----------------------------------------------------------------------- END nav ----------------------------------------->
<div class="container"><br><br><br><br>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
  </form><br>
  <a href="../Views_Material/V_agregarMaterial.php" class="btn btn-success float-right" role="button">Agregar Material</a>
  <a href="../Views_Material/V_historialMaterial.php" class="btn btn-success float-right" role="button">Historial</a>
  <br><br><br>
  <table class="table ">
    <thead class="thead-light">
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Cantidad Disponible</th>
        <th>Unidad</th>
        <th>Valor por Unidad</th>
        <th>Tipo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php 

require_once "../../Controller/Controller_Material/C_material.php";
while($mostrar=mysqli_fetch_array($result)){
 ?>
  <tr>
  <td><?php echo $mostrar['codigoMaterial'] ?></td>
    <td><?php echo $mostrar['nombreMaterial'] ?></td>
    <td><?php echo $mostrar['cantidadMaterialInventario'] ?></td>
    <td><?php echo $mostrar['unidadMedidaMaterial'] ?></td>
    <td><?php echo $mostrar['valorMaterial'] ?></td>
    <td><?php echo $mostrar['tipoMaterial'] ?></td>

    <td>
          <a href="../Views_Material/V_editarMaterial.php" class="btn btn-success" role="button">Editar</a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalentrada">Entrada</button>
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalsalida">Salida</button>
          <button class="btn btn-danger">Eliminar</button>
    </td>
  </tr>
  <?php 
}
  ?>
    </tbody>
  </table>
</div>
<br><br><br>
<!------------------------------------------------------------------- Modal entrada------------------------------------------------------------------------->
<div class="modal fade" id="modalentrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrada de Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form class="needs-validation" novalidate action="../Views_Material/V_material.php">
            <div  class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Cantidad de material</label>
                <input type="number" class="form-control" value="" id="validationCustom01" placeholder="Cantidad de material"  required>
                <div class="valid-feedback">Bien!</div>
              </div>
            </div>
            <div  class="form-row C-centro">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Valor del Material</label>
                <input type="number" class="form-control" value="" id="validationCustom01" placeholder="Valor del Material"  required>
                <div class="valid-feedback">Bien!</div>
              </div>
            </div>
            <bt><button class="btn btn-primary" type="submit">Guardar</button></bt>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<!---------------------------------------------------------------------- Modal  salida--------------------------------------------------------------------->
<div class="modal fade" id="modalsalida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Salida de Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form class="needs-validation" novalidate action="../Views_Material/V_material.php">
            <div  class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Cantidad de material</label>
                <input type="number" class="form-control" value="" id="validationCustom01" placeholder="Cantidad de material"  required>
                <div class="valid-feedback">Bien!</div>
              </div></div>
              <div  class="form-row C-centro">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Motivo de salida</label>
                  <select class="form-control" required aria-label="select example">
                    <option class="form-control" value="1">Error en producción</option>
                    <option class="form-control" value="2">Por descomposición</option>
                    <option class="form-control" value="3">Otros</option>
                  </select>
                  <div class="invalid-feedback">Seleccione una unidad</div>
                </div>
              </div>

              <bt><button class="btn btn-primary" type="submit">Guardar</button></bt>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script>
  // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
      var forms = document.getElementsByClassName('needs-validation');
     // Bucle sobre ellas y evitar la presentación
     var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
   }, false);
  })();
</script>
</html>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

