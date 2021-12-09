<?php

//incluimos una prueba de que podemos recibir las variables del get
//valoresque obtenemos por la url
// echo $controlador;
// echo $accion;

include_once("controladores/controlador_".$controlador.".php");

$objControlador ="Controlador".ucfirst($controlador);

//objeto del controlador.
$controlador= new $objControlador();
$controlador->$accion();

?>