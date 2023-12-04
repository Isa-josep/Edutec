<?php
// si hay error agregar 
  // session_start();
    class Conectar{
        protected $dbh;
        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=Proyect_c","root","ISA1902_");
                return $conectar;
            }
            catch(Exception $e){
                print "!ERROR BD!" . $e->getMessage(). "<br/>";
                die();
            }
        }
        public function set_name(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
        public function ruta(){
            return "http://localhost/proyect_c/";
        }
    }
?>