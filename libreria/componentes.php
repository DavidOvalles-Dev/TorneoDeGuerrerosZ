<?php

function my_input ($nombre, $label,$valor, $type= []) {

    $tipo = 'text';
    $required = '';

    extract($type);

    return <<<HTML
<label class="label-input" for="$nombre">$label:</label><br>
<input {$required} class="input" type="{$tipo}" name="{$nombre}" value="{$valor}" id="{$nombre}" ><br><br>
HTML;
}




function guardar_datos ($codigo, $datos) {

    if(!is_dir('datos')) {
        mkdir('datos');
    }
    

    file_put_contents("datos/{$codigo}.dat", serialize($datos));
}

function cargar_datos($codigo) {
    if (!file_exists("datos/{$codigo}.dat")) {
        return false;
    }

    $datos = file_get_contents("datos/{$codigo}.dat");
    $datos = unserialize($datos);

    return $datos;
}   

function listar_registros() {
    $registros = [];
    $archivos = scandir('datos');

    foreach ($archivos as $archivo) {
        if (!is_file("datos/{$archivo}")) {
            continue;
        }

        $codigo = pathinfo($archivo, PATHINFO_FILENAME);
        $datos = cargar_datos($codigo);
        $registros[] = $datos;
    }

    return $registros;
}
