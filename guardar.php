<?php

require('libreria/motor.php');

$peleador = new peleador();
$peleador->id = $_POST['id'];
$peleador->nombre = $_POST['nombre'];
$peleador->apellido = $_POST['apellido'];
$peleador->fecha_nacimiento = $_POST['edad'];
$peleador->foto = $_POST['foto'];



if (isset($_POST['habilidades']['nombre']) && is_array($_POST['habilidades']['nombre'])) {
    foreach ($_POST['habilidades']['nombre'] as $i => $nombre) {
        $habilidad = new habilidad();
        $habilidad->nombre = $nombre;
        $habilidad->tipo = $_POST['habilidades']['tipo'][$i];
        $habilidad->nivel = $_POST['habilidades']['nivel'][$i];
        $peleador->habilidades[] = $habilidad;
    }
}

guardar_datos($peleador->id, $peleador);


plantilla::aplicar();

?>

<h1>💾🤺Datos guardar_datos</h1>
<p>Los datos del peleador han sido guardados correctamente ✅
</p>
<a class="botonVolver" href="index.php">Volver</a>