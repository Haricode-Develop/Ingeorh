<?php
require_once "conexion.php";
class modeloPlantilla{
    static public function modeloEstiloPlantilla($tabla){
        $stmt = conexionBaseDeDatos::conectar()->prepare("SELECT * FROM $tabla");
        $stmt -> execute();
        return $stmt->fetch();
        $stmt -> close();        
    }
}