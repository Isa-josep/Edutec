<?php
include('conexion.php');

if (isset($_GET)) {
    $type = $_GET['type'];
    if ($type == 'sesion') {
        $correo = $_GET['correo'];
        $pass = $_GET['pass'];
        echo checkUserSesion($correo, $pass);
    }

}
if(isset($_POST)){

    $type = $_POST['type'] ;
    if($type == 'post'){
        $idUser = $_POST['id'] ; 
        $title  = $_POST['titulo'] ;
        $contentPost = $_POST['contenido'] ; 
        echo  setNewPOST($idUser , $title , $contentPost ) ; 
    }


}

// TODO :  cambiar xD  
function checkUserSesion($correo, $pass)
{
    $query = querySQL(" SELECT * 
                        FROM USER  
                        WHERE Correo='$correo'
                    ");
    if (!$query) {
        return 'SMS:"Datos incorrectos"';
    }
    $parseQuery = json_decode($query);
    $passAns = ($parseQuery[0]->pass);
    if ($passAns == $pass) {
        return 'SMS:"Datos Buenos  Puedes  Continuar"';
    }
    return 'SMS:"Datos incorrectos"';
}

function getDataUser($idUser){
    $query = querySQL("SELECT NombreUsuario , Roll
                        FROM user
                        WHERE  id = {$idUser}  
        ");

    return $query ; 
}
function getPOSTMAX($max = 2)
{
    $query = querySQL(" SELECT * 
                        FROM PostPublic 
                        ORDER BY id DESC
                        LIMIT {$max} 
                          
                    ");

    return $query ; 

}


function  setNewPOST($idUser , $title , $content ){
    date_default_timezone_set('America/Mexico_City');
    $date = explode(' ' , date('m/d/y h:iA')); 
    $hora = $date[1] ; 
    $day = $date[0] ; 
    $answerSQL = insertSQL("INSERT 
                            INTO `postpublic` (`id`, `PostText`, `UserId`, `postJSON`, `Titulopost`) 
                            VALUES (NULL, '{$content}', '{$idUser}', '{\"fecha\":\"{$day}\",\"hora\" : \"{$hora}\"}', '{$title}')
    ") ; 


}

?>