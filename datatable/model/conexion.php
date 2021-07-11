<?php
class conexion{
    public static function conectar(){
        $conexion = new mysqli('localhost','root','diossmer','prueba');
        $conexion->set_charset('utf8');
        return $conexion;
    }
}