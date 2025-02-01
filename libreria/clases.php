<?php

class habilidad {
    var $nombre = "";
    var $tipo = "";
    var $descripcion = "";
    var $nivel = "";
}

class peleador {
    var $id = "";
    var $nombre = "";
    var $apellido = "";
    var $fecha_nacimiento = "";
    var $foto = "";
    var $habilidades = [];

    function h_mas_alta () {
        $habilidad_mas_alta = $this->habilidades[0];
        foreach ($this->habilidades as $habilidad) {
            if ($habilidad->nivel > $habilidad_mas_alta->nivel) {
                $habilidad_mas_alta = $habilidad;
            }
        }
        echo '<pre>';
        print_r($habilidad_mas_alta);
        echo '</pre>';
        return $habilidad_mas_alta;
    }

    function n_habilidades () {
        $this->habilidades;
        return count($this->habilidades);

        return ;
    }

    function total_habilidaes () {
        $total = 0;
        foreach ($this->habilidades as $habilidad) {
            $total += $habilidad->nivel;
        }
        return $total;
    }

    function edad() {
        $fecha_n = strtotime($this->fecha_nacimiento);
        $fecha_a = time();
        $edad = ($fecha_a - $fecha_n) / 60 / 60 / 24 / 365;
        return floor($edad);
    }


    function signo_zodiacal() {

        $fecha = strtotime($this->fecha_nacimiento);
        $mes = date('m', $fecha);
        $dia = date('d', $fecha);

        if (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
            return 'acuario';
        } 
        elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
            return 'piscis';
        }
        elseif (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
            return 'aries';
        }
        elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
            return 'tauro';
        }
        elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
            return 'géminis';
        }
        elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
            return 'cancer';
        }
        elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
            return 'leo';
        }
        elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
            return 'virgo';
        }
        elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
            return 'libra';
        }
        elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
            return 'escorpio';
        }
        elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
            return 'sagitario';
        }
        elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
            return 'capricornio';
        }
        
        
    }



}