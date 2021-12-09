<?php

include_once("modelos/jugador.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorJugadores{

    public function inicio(){
        $jugadores =Jugador::consulta();
        include_once("vistas/jugadores/inicio.php");

    }
    //access url al crud
    //http://localhost:7777/crudphp/?controlador=jugadores&accion=inicio
    public function crear(){
        if($_POST){
           // print_r($_POST);

           $nombre=$_POST['nombre'];
           $nivel=$_POST['nivel'];
           Jugador::crear($nombre, $nivel);
           header("Location:./?controlador=jugadores&accion=inicio");

        }
        include_once("vistas/jugadores/crear.php");
    }
    public function editar(){
       

        if($_POST){
            print_r($_POST);
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $nivel=$_POST['nivel'];

            Jugador::editar($id,$nombre,$nivel);
        }

        $id=$_GET['id'];
        $jugador=Jugador::buscar($id);
        include_once("vistas/jugadores/editar.php");

    }
    public function borrar(){
        $id=$_GET['id'];
        Jugador::borrar($id);
        header("Location:./?controlador=jugadores&accion=inicio");
    }


}

?>