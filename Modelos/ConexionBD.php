<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=clinica", "root", "");

        $bd -> exec("set names utf-8");

        return $bd;
        
    }
}