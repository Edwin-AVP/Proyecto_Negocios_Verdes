<?php
    include_once '../../Model/database.php';



    $id = $_POST['idE'];
    $cantidad = $_POST['can'];
    
    $sql="SELECT FK_ID_MATERIAL FROM productomaterial WHERE EXISTS(SELECT FK_ID_MATERIAL FROM productomaterial WHERE FK_ID_MATERIAL = '$id')";
    $result=mysqli_query($conection,$sql);
    $arr=mysqli_fetch_array($result);

    if($arr == false){

        if($cantidad > 0){
            echo '<script language="javascript">';
            echo 'alert("No se puede eliminar un material que tenga inventario!");';
            echo 'window.location="../../Views/Views_Material/V_Material.php";';
            echo '</script>';
        }else{
            $sql="DELETE FROM material WHERE ID_MATERIAL = '$id';";
            $resul=mysqli_query($conection,$sql);
            header('location: ../../Views/Views_Material/V_Material.php');
        }
    }else{
        echo '<script language="javascript">';
        echo 'alert("No se puede eliminar un material que pertenesca a un producto!");';
        echo 'window.location="../../Views/Views_Material/V_Material.php";';
        echo '</script>';
    }
?>
