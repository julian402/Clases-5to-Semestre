<?php
class Conectar{
    public static function conexion(){
        $conexion = new mysqli("localhost","usuario","cotraseña","basedatos");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>