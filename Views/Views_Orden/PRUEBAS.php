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
$arr_cantidad = array (
                        array("code","canti"),
                        array("cod","cant")
        );
        //$arr_cantidad = ["code"]["canti"];
?>


        
        <?php
        $i_f = "codfe";
        array_push($arr_cantidad, array ( "codge",$i_f));
        $si = true;
        $longitud = count($arr_cantidad);
        for($i=0; $i<$longitud; $i++)
        {
            if($arr_cantidad[$i][1] == "codfe"){
            ?>
            <td style="text-align:right"><?php echo $arr_cantidad[$i][0]."  ll"?></td>
            <?php echo  "--------------" ?>
            <hr>
            <?php 

            $si = false;
            }
        }
        if($si == true){
            ?>
            <td style="text-align:right"><?php echo  $arr_cantidad[0][0]  ?></td>
            <hr>
            <td style="text-align:right"><?php echo  $arr_cantidad[0][1]  ?></td>
            <hr>
            <?php
            $arr_cantidad[][] = "h";
            $arr_cantidad[][] = "f" ;
            ?>
            <hr>
            <td style="text-align:right"><?php echo  $arr_cantidad[1][0]  ?></td>
            <td style="text-align:right"><?php echo  $arr_cantidad[1][1]  ?></td>
            <?php

        }?>
    
</body>
</html>