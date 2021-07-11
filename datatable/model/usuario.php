<?php
include_once('conexion.php');
class Usuario{
    var $usuarios;
    public function __construct(){
        $this->acceso = Conexion::conectar();
    }
    function mostrar(){
        $sql = "SELECT * FROM 'tabla'";
        $result = $this->acceso->query($sql);
        $this->usuarios= $result->fetch_all();
        return $this->usuarios;
    }
}