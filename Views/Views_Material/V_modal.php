<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

require_once "../../Controller/Controller_Material/C_verMaterial.php";
$mostrar=mysqli_fetch_array($result)
 ?>
 
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
            <!--type="hidden"-->

          <input  class="form-control" placeholder="id" name="id" value="<?php echo $mostrar['ID_MATERIAL'] ?>" required>
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

    
</body>
</html>

