<?php
class conexionBaseDeDatos{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=ingeo","root","GJCN4Ey89YmGBi",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    return $link;
    }
}