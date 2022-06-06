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
        <li class="nav-item"><a href="../views_Orden/V_orden.php" class="nav-link">ORDEN</a></li>
        <li class="nav-item"><a href="../Views_Producto/V_producto.php" class="nav-link">PRODUCTOS</a></li>
        <li class="nav-item active"><a href="../Views_Material/V_material.php" class="nav-link">MATERIALES</a></li>
        <li class="nav-item"><a href="../Views_Cliente/V_cliente.php" class="nav-link">CLIENTES</a></li>
        <li class="nav-item"><a href="../../Controller/Controller_Sesion.php?cerrar_sesion='1'" class="nav-link">SALIR</a></li>
      </ul>
    </div>
  </div>
</nav>
<!----------------------------------------------------------------------- END nav ----------------------------------------->
<div class="container"><br><br><br><br>
        <form action="" method="POST" class="form-inline">
          <input class="form-control mr-sm-2" name="valueToSearh" type="search" placeholder="Search" aria-label="Search">
          <button type="submit" name="search" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
        </form><br>
  <a href="../Views_Material/V_agregarMaterial.php" class="btn btn-success float-right" role="button">Agregar Material</a>
  <a href="../Views_Material/V_historialMaterial.php" class="btn btn-success float-right" role="button">Historial</a>
  <br><br><br>
  <table class="table" id="mitabla">
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
          
          <a <?php echo "href='".$mostrar['ID_MATERIAL']."'"?> name="idsele" class="btn btn-success" data-toggle="modal" data-target="#modaleditar">Editar</a>
          <a <?php echo "href='".$mostrar['ID_MATERIAL']."'"?> name="idd" class="btn btn-primary" data-toggle="modal" data-target="#modalentrada">Entrada</a>
          <a <?php echo "href='".$mostrar['ID_MATERIAL']."'"?> name="id" class="btn btn-secondary" data-toggle="modal" data-target="#modalsalida">Salida</a>
          <a <?php echo "href='".$mostrar['ID_MATERIAL']."'"?> name="idE" class="btn btn-danger" data-toggle="modal" data-target="#modaleliminar">Eliminar</a>


    </td>

  </tr>
  <?php 
} 
  ?>
    </tbody>
  </table>
</div>
<br><br><br>
<!------------------------------------------------------------------------- Modal editar------------------------------------------------------------------------->
<div class="modal fade bd-example-modal-lg" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Editar Material</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">

  <form method="POST" class="needs-validation" novalidate action="../../Controller/Controller_Material/C_editarMaterial.php">
    </bt><br><br><br>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Código</label>
        <input type="text" class="form-control" value="" name="codigo" id="codigo" placeholder="Código"  required>
        <input type="hidden" type="text" class="form-control" value="" name="id" id="id" placeholder="id"  required>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese un Codigo</div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nombre Material</label>
        <input type="text" class="form-control" value="" name="nombre" id="nombre" placeholder="Nombre Material"  required>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese un Nombre</div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-2 mb-3">
        <label for="validationCustom03">Unidad</label><!-- Seleccionar Cliente -->
        <select name="unidad" id="unidad" class="form-control" required aria-label="select example">
        <?php
            if($mostrar['unidadMedidaMaterial'] == 'Kg'){
              ?> 
              <option class="form-control" value="Kg">Kg</option>
              <option class="form-control" value="Ml">Ml</option>
              <option class="form-control" value="Lt">Lt</option>
              <?php
            }else{
              if($mostrar['unidadMedidaMaterial'] == 'Ml'){
                ?> 
                <option class="form-control" value="Ml">Ml</option>
                <option class="form-control" value="Kg">Kg</option>
                <option class="form-control" value="Lt">Lt</option>
                    <?php
              }else{
                  ?>           
                  <option class="form-control" value="Lt">Lt</option>
                  <option class="form-control" value="Kg">Kg</option>
                  <option class="form-control" value="Ml">Ml</option>
                    <?php
              }
            }
            ?>
        </select>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione una unidad</div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Valor por Unidad</label>
        <input type="number" step="any" class="form-control" name="valor" id="valor" value="<?php echo $mostrar['valorMaterial'] ?>" placeholder="Valor por unidad" required>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Ingrese un Valor</div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Tipo</label><!-- Seleccionar Cliente -->
        <select name="tipo" id="tipo" class="form-control" required aria-label="select example">

        <?php
            if($mostrar['tipoMaterial'] != 'Insumo'){
              ?> 
          <option class="form-control" value="Materia Prima">Materia Prima</option>
          <option class="form-control" value="Insumo">Insumo</option>
              <?php
            }else{
              ?>           
          <option class="form-control" value="Insumo">Insumo</option>
          <option class="form-control" value="Materia Prima">Materia Prima</option>
              <?php
            }
            ?>

        </select>
        <div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un Tipo</div>
      </div>
      
    </div>
    <bt><button class="btn btn-success " type="submit">Editar Material</button></bt>
  </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------Fin Modal  editar--------------------------------------------------------------------->

<!------------------------------------------------------------------------- Modal entrada------------------------------------------------------------------------->
<div class="modal fade" id="modalentrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Entrada de Material</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form method="POST" class="needs-validation" novalidate action="../../Controller/Controller_Material/C_entradaMaterial.php">
            <div  class="form-row">
              <div class="col-md-4 mb-3">
              <label for="validationCustom01">Nombre Material</label>
                <input   class="form-control" placeholder="id" name="nombreM" id="nombreM" value="" aria-label="Disabled input example" readonly>
                <input type="hidden" type="text" class="form-control" value="" name="idd" id="idd" placeholder="idsele"  required>
              </div>
            </div>
            <div  class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Cantidad de material</label>
                <input type="number" step="any" class="form-control" value="" name="cantidad" placeholder="Cantidad de material"  required>
                <div class="valid-feedback">Bien!</div>
              </div>
            </div>
            <div  class="form-row C-centro">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Valor del Material</label>
                <input type="number" class="form-control" value="" name="valor" placeholder="Valor del Material"  required>
                <div class="valid-feedback">Bien!</div>
              </div>
            </div>
            <bt><button class="btn btn-primary" type="submit">Guardar</button></bt>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------Fin Modal  Entrada--------------------------------------------------------------------->


<!---------------------------------------------------------------------- Modal  salida--------------------------------------------------------------------->
<div class="modal fade" id="modalsalida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Salida de Material</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form method="POST" class="needs-validation" novalidate action="../../Controller/Controller_Material/C_salidaMaterial.php">
          <div  class="form-row">
              <div class="col-md-4 mb-3">
              <label for="validationCustom01">Nombre Material</label>
              <input type="text" class="form-control" value="" name="nombreMS" id="nombreMS" placeholder="Nombre" aria-label="Disabled input example" readonly>
                <input type="hidden" type="text" class="form-control" value="" name="idss" id="idss" placeholder="id"  required>
              </div>
            </div>
            <div  class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Cantidad de material</label>
                <input type="number" step="any" class="form-control" value="" name="cant" id="cant" placeholder="Cantidad de material"  required>
                <div class="valid-feedback">Bien!</div>
              </div></div>
              <div  class="form-row C-centro">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Motivo de salida</label>
                  <select name="motivo" id="motivo" class="form-control" required aria-label="select example">
                    <option class="form-control" value="Error en producción">Error en producción</option>
                    <option class="form-control" value="Por descomposición">Por descomposición</option>
                    <option class="form-control" value="Otros">Otros</option>
                  </select>
                  <div class="invalid-feedback">Seleccione una unidad</div>
                </div>
              </div>
              <bt><button class="btn btn-primary" type="submit">Guardar</button></bt>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!----------------------------------------------------------------------Fin Modal  salida--------------------------------------------------------------------->
  <!---------------------------------------------------------------------- Modal  Eliminar--------------------------------------------------------------------->
<div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Eliminar Material</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <form method="POST" class="needs-validation" novalidate action="../../Controller/Controller_Material/C_eliminarMaterial.php">
          <div  class="form-row C-centro">
              <div class="col-md-4 mb-3">
              <label for="validationCustom01">¿Desea Eliminar el siguiente material?</label>
              </div>
            </div>
          <div  class="form-row C-centro">
              <div class="col-md-4 mb-3">
              <label for="validationCustom01">Nombre Material</label>
              <input type="text" class="form-control" value="" name="nombreE" id="nombreE" placeholder="Nombre"  aria-label="Disabled input example" readonly>
              <input type="hidden" type="text" class="form-control" value="" name="idE" id="idE" placeholder="id"  required>
              <input type="hidden" type="text" class="form-control" value="" name="can" id="can" placeholder="can"  required>
              </div>
            </div>
            <div  class="form-row C-centro">
              <div class="col-md-4 mb-3">
              <label for="validationCustom01">Código</label>
              <input type="text" class="form-control" value="" name="codigoE" id="codigoE" placeholder="código"  aria-label="Disabled input example" readonly>
              </div>
            </div>
              <bt><button class="btn btn-danger" type="submit">Eliminar</button></bt>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!----------------------------------------------------------------------Fin Modal Eliminar--------------------------------------------------------------------->
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

