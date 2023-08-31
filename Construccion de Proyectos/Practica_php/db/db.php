<?php
class Conectar{
    public static function conexion(){
        $conexion = new mysqli("sql.freedb.tech","freedb_mvc1111","m3Rgm&?N9zGRD3r","freedb_mvc1111");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>


