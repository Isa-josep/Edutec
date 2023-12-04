<?php 
    // conexion a  mysql xD 
    
    $cnx =  mysqli_connect('localhost' ,'root',  'ISA1902_' ,'proyectoC' ) ;
   // echo $cnx ? "Todo Bien"  : "Algo salio mal " ;  
    function querySQL($query){
        global $cnx ; // global cnx 
        $ans =  mysqli_query($cnx,$query) ; //  respuesta  
        if(!$ans){return "error:'Algo salio mal revisa tu query'" ;} // chekar si devolvio algo o no  
         $ansArray = [] ;  
        while($row = mysqli_fetch_array($ans)){
             array_push($ansArray , $row) ; 
        }
        return $ansArray ; 
    }

    function insertSQL($insertData){
        global $cnx  ; 
        $ans  = mysqli_query($cnx ,$insertData) ;
        return $ans ;
    }
?>