<?php
    class Usuario extends Conectar{
        //  setParse Login ???  whit main function if true  or is false 
        public function get_login( $userCorreo ,$userPassword ){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="SELECT * FROM Usuarios WHERE UserGmail=? AND UserPassword=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$userCorreo);
            $sql->bindValue(2,$userPassword);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
        public function registro_user ($userNom,$userCorreo ,$userPassword){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="INSERT INTO `usuarios` (User_Id, UserName, UserGmail, UserPassword, UserEstado) VALUES (NULL, ?, ?, ?, '1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$userNom);
            $sql->bindValue(2,$userCorreo);
            $sql->bindValue(3,$userPassword);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function get_correo ($userCorreo){
            $conectar = parent::conexion();
            parent::set_name();
            $sql="SELECT * FROM `usuarios` WHERE UserGmail = ? AND UserEstado ='1'";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$userCorreo);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    }
?>