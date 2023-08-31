<?php

/*
El controlador es la entidad responsable de:

1. llamar el modelo (el espacio donde)
gestiona solo consulas a bases de datos) */

require_once("model/personas_model.php");
$per=new personas_model(); // se crea el objeto
$datos=$per->get_personas(); //instancia el metodo

//2. comunicarse con la vista 
require_once("view/personas_view.phtml");
?>