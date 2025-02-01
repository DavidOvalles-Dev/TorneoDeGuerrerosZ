<?php

require('libreria/motor.php');
plantilla::aplicar();

$datos = listar_registros();

$signos = [
    'aries' => 0,
    'tauro' => 0,
    'geminis' => 0,
    'cancer' => 0,
    'leo' => 0,
    'virgo' => 0,
    'libra' => 0,
    'escorpio' => 0,
    'sagitario' => 0,
    'capricornio' => 0,
    'acuario' => 0,
    'piscis' => 0,
];


foreach ($datos as $dato) {
    $signo = $dato->signo_zodiacal();
    $signos[$signo] += 1;
}


$total_edad = 0;

foreach ($datos as $dato) {
    $total_edad += $dato->edad();
    $edad_promedio = $total_edad / count($datos);
}
$edad_promedio = intval($edad_promedio);




$total_habilidades = 0;

foreach ($datos as $peleador) {
    foreach ($peleador->habilidades as $habilidad) {
        $total_habilidades += 1;
    }
}

$cantidad_participantes = 0;
foreach ($datos as $dato) {
    $cantidad_participantes += 1;
}

$habilidades_promedio = $total_habilidades / $cantidad_participantes;
$habilidades_promedio = intval($habilidades_promedio);

//nive de habilidades promedio
$nivel_promedio_Habilidades = 0;
foreach ($datos as $peleador) {
    $habilidades = $peleador->habilidades; 
    foreach ($habilidades as $habilidad) {
        $nivel_promedio_Habilidades += $habilidad->nivel;
    }
}
$nivel_promedio_Habilidades = $nivel_promedio_Habilidades / $total_habilidades;
$nivel_promedio_Habilidades = intval($nivel_promedio_Habilidades);


//habilidad mas poderosa 
$nivel_de_habilidad_mas_poderoso = 0;
foreach ($datos as $peleador) {
    $habilidades = $peleador->habilidades;
    foreach ($habilidades as $habilidad) {
        if ($habilidad->nivel > $nivel_de_habilidad_mas_poderoso) {
            $nivel_de_habilidad_mas_poderoso = $habilidad->nivel;
            $habilidad_mas_poderosa = $habilidad->nombre;
        }
    }
}

//habilidad menos poderosa
$nivel_de_habilidad_menos_poderoso = 100;
foreach ($datos as $peleador) {
    $habilidades = $peleador->habilidades;
    foreach ($habilidades as $habilidad) {
        if ($habilidad->nivel < $nivel_de_habilidad_menos_poderoso) {
            $nivel_de_habilidad_menos_poderoso = $habilidad->nivel;
            $habilidad_menos_poderosa = $habilidad->nombre;
        }
    }
}



?>

<h1>📃Estadisticas</h1>

<table style="width: 100%;">
    <tr>
        <td><h1> <?= $cantidad_participantes?></h1> 
        Cantidad de participantes 📊
    </td>

    <td><h1><?= $total_habilidades ?> </h1> 
        Total de Habilidades ⚡
    </td>

    <td><h1><?=$habilidades_promedio?>  </h1> 
        Promedio de Habilidades por guerrero ⚡
    </td>

    <td><h1><?=$edad_promedio?>  </h1> 
        Edad promedio de guerreros 🎂
    </td>
    

    <td><h1><?= $nivel_promedio_Habilidades?> </h1> 
        Nivel Promedio de Habilidades 🚀
    </td>
    <td><h1><?= $habilidad_mas_poderosa?> </h1> 
        Habilidad mas poderosa 🔥
    </td>

    <td><h1> <?=$habilidad_menos_poderosa?> </h1> 
        Habilidad menos poderosa 💧
    </td>
    </tr>

</table>


<h1 class="center">Signos Zodiacales ♈</h1>

<table>
    <thead>
        <tr>
            <th>Signo</th>
            <th>Participantes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($signos as $signo => $cantidad) {
            echo "
            <tr>
                <td>{$signo}</td>
                <td>{$cantidad}</td>
            </tr>
            ";
        }
        ?>
    </tbody>
</table>
<a class="botonVolver" href="index.php">Volver</a>s