<?php
    include_once '../../Model/database.php';


    $cambiar = false;
    $id = $_GET['id'];
    $sql="SELECT FK_ID_PRODUCTO FROM ordenproducto WHERE EXISTS(SELECT FK_ID_ORDEN FROM ordenproducto WHERE  FK_ID_PRODUCTO = '$id')";
    $result=mysqli_query($conection,$sql);
    $arr = mysqli_fetch_array($result);

    if($arr == false ){
        $sql="DELETE FROM productomaterial WHERE FK_ID_PRODUCTO = '$id';";
        $resul=mysqli_query($conection,$sql);

        $sql="DELETE FROM producto WHERE ID_PRODUCTO = '$id';";
        $resul=mysqli_query($conection,$sql);
        header('location: ../../Views/Views_Producto/V_producto.php');
    }else{
        $sql="SELECT FK_ID_ORDEN FROM ordenproducto WHERE FK_ID_PRODUCTO = '$id'";
        $result2=mysqli_query($conection,$sql);
        while($id_orden = mysqli_fetch_array($result2)){
            $sql="SELECT estado FROM orden WHERE ID_ORDEN = '$id_orden[0]'";
            $result3=mysqli_query($conection,$sql);
            $estado = mysqli_fetch_array($result3);
            $estado_resul = $estado[0];
            if($estado_resul == 1){
                $cambiar = true;
                break;
            }
        } 
        if($cambiar == false){
            $sql="UPDATE producto SET estado = '2' WHERE ID_PRODUCTO = '$id'";
            $resu=mysqli_query($conection,$sql);
            header('location: ../../Views/Views_Producto/V_producto.php');
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("¡El producto no se puede eliminar pertenece a una orden!");';
            echo 'window.location="../../Views/Views_Producto/V_producto.php";';
            echo '</script>';
        }
    }

?>
