<?php

//Validamos si se están pasando los parametros por get, por url, probamos introduciendo manualmente los valores que deseemos para luego pintarlos en la parte superior de la pagina.
//http://localhost:7777/crudphp/?controlador=hola&accion=mundo

$contolador="paginas";
$accion="inicio";

if(isset($_GET['controlador']) && isset($_GET['accion'])){

    if(($_GET['controlador']!="") && ($_GET['accion']!="")){
      $controlador=$_GET['controlador'];
      $accion=$_GET['accion'];

    }

  $controlador=$_GET['controlador'];
  $accion=$_GET['accion'];
}
require_once("vistas/template.php");
?>