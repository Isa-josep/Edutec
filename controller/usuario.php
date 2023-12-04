<?php
    require_once("../config/conexion.php");
    require_once("../model/Usuarios.php");
    $usuario = new Usuario();

    switch($_GET["op"]){
        case"acceso":
            $datos=$usuario->get_login($_POST["userCorreo"],$_POST["userPassword"]);
            if(is_array($datos)==true and count($datos)>0){
                echo "1";
            }
            else{
                echo "0";
                // echo json_encode("Error");
            }
            break;

        case"resgistro":
            $datos=$usuario->get_correo($_POST["UserGmail"]);
            if(is_array($datos)==true and count($datos)>0){
                echo "1";
            }
            else{
                $usuario->registro_user($_POST["UserName"],$_POST["UserGmail"],$_POST["UserPassword"]);
                echo "0";
            }
            
            break;
    }
?>