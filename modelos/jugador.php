<?php

class Jugador{

    public $id;
    public $nombre;
    public $nivel;

    public function __construct($id,$nombre,$nivel)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->nivel=$nivel;
    }

    public static function consulta(){
        $listaJugadores=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT*from jugadores");

        foreach($sql->fetchAll() as $jugador){
            $listaJugadores[]= new Jugador($jugador['id'],$jugador['nombre'],$jugador['nivel']);
        }
        return $listaJugadores;
    }


    public static function crear($nombre,$nivel){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO jugadores(nombre,nivel) VALUES (?,?)");
        $sql->execute(array($nombre,$nivel));
    }

    public static function borrar($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM jugadores WHERE id=?");
        $sql->execute(array($id));
    }
    public static function buscar($id){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("SELECT * FROM jugadores WHERE id=?");
        $sql->execute(array($id));
        $jugador= $sql->fetch();

        return new Jugador($jugador['id'],$jugador['nombre'],$jugador['nivel']);
    }
    public static function editar($id,$nombre,$nivel){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE jugadores SET nombre=?,nivel=? WHERE id=?");
        $sql->execute(array($nombre,$nivel,$id));
    }
}
?>