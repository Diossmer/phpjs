<?php
    class conexiondb{
        private $host = '127.0.0.1';
        private $dbnombre = 'prajax';
        private $usuario = 'root';
        private $contraseña = 'diossmer';
        private $conexion;

        public function connect(){
            try{
                $this->conexion = new PDO(
                "mysql:host=".$this->host."; dbname=".$this->dbnombre.";charset=utf8",
                $this->usuario,$this->contraseña);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Exitosa conexión. ";
                return $this->conexion;
            }catch(Exception $e){
                echo "error de conexión. ".$e->getMessage();
            }finally{
                $this->conexion = null;
            }
        }
    }
    //NO POSEES BASE DE DATO POR ESO TE ENVIA UN ERROR SQLSTATE[HY000] [1049] Unknown database.