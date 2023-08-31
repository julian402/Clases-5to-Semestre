<?php
class personas_model{
    private $db;
    private $personas;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    public function get_personas(){
        $consulta=$this->db->query("select * from pagedata;"); //Resultado es filas y columnas
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas; //es un arreglo que almacena informacion contenida en arrglos
        }
        return $this->personas;
    }
}
?>