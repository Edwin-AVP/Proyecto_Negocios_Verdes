<?php
    include_once '../Model/database.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: Views_usuario/V.Usuario.php');
            break;

            case 2:
           // header('location: Views_Usuario/V.Usuario.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuario WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                  echo '<script language="javascript">alert("Nombre de usuario o contraseña incorrecto");</script>';
                    header('location: Views_usuario/V.Usuario.php');
                    
                break;

                case 2:
                header('location: Views_usuario/V.Usuario.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
       
            echo '<script language="javascript">alert("Nombre de usuario o contraseña incorrecto");</script>';
          
        }
        

    }

?>