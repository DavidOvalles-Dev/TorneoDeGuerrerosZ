<?php

class peleador {
    var $id = "";
    var $nombre = "";
    var $apellido = "";
    var $fecha_nacimiento = "";
    var $foto = "";

    function edad() {
        $fecha_n = strtotime($this->fecha_nacimiento);
        $fecha_a = time();
        $edad = ($fecha_a - $fecha_n) / 60 / 60 / 24 / 365;
        return floor($edad);
    }

}