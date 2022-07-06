<?php
require_once "../../Model/database.php";
$sql =  "SELECT * FROM material ";
$filter_result = mysqli_query($conection, $sql);
?>
<script type="text/javascript">
// agregar registro

$("#addRow").click(function () {
var html = '';
html += '<div class="form-row" id="inputFormRow">';

html += '<div class="col-md-3 mb-3" >';
html += '<select class="form-control selectpicker" name="id_material[]"  id="id_material" onchange="ShowSelected()"  required aria-label="select example">';
html += '<option class="form-control" value="">Seleccione Material</option>';
html += '<?php while($mostra=mysqli_fetch_array($filter_result)){ ?>';
html += '<option class="form-control" value="<?php echo $mostra['ID_MATERIAL']?>" data="<?php echo $mostra['unidadMedidaMaterial']?>"><?php echo $mostra['nombreMaterial'] ?></option>';
html += ' <?php } ?>';
html += '</select>';
html += '<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Seleccione un Material</div>';
html += '</div>';

html += '<div class="col-md-3 mb-3">';
html += '<input type="number" name="cantida[]" id="cantida" class="form-control"  placeholder="Cantidad" required >';
html += '<div class="valid-feedback">Bien!</div><div class="invalid-feedback">Digite una cantidad</div>';
html += '</div>';

html += '<div class="col-md-3 mb-3">';
html += '<input type="text" name="id[]" id="id[]" class="form-control"  placeholder="Unidad" aria-label="Disabled input example" readonly >';
html += '</div>';

html += '<div class="col-md-3 mb-3">';
html += '<button id="removeRow" type="button" class="btn btn-danger">Borrar</button>';
html += '</div>';

html += '</div> ';

$('#newRow').append(html);
});
// borrar registro
$(document).on('click', '#removeRow', function () {
$(this).closest('#inputFormRow').remove();
});

</script>
<script type="text/javascript">
        // funcion que se ejecuta cada vez que se selecciona una opción
        function ShowSelected() {
            
        var cod = document.getElementById("id_material").value;
          //var idd = cod.dataset.id;
        document.getElementById("id[]").value = cod;
          //elQty.value = cod;
          //alert(cod);
        }
    </script>

