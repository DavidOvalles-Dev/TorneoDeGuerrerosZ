<?php

require('libreria/motor.php');

$peleador = new peleador();
$peleador->id = $_POST['id'];
$peleador->nombre = $_POST['nombre'];
$peleador->fecha_nacimiento = $_POST['edad'];
$peleador->foto = $_POST['foto'];

guardar_datos($peleador->id, $peleador);


plantilla::aplicar();

?>

<h1>💾🤺Datos guardar_datos</h1>
<p>Los datos del peleador han sido guardados correctamente</p>
<a class="botonVolver" href="index.php">Volver</a>