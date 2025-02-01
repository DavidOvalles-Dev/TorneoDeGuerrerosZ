<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo de la Fuerza💪</title>
</head>

<?php

require('libreria/motor.php');
plantilla::aplicar();



?>



<body>
    <div class="container">
    <h1>Bienvenidos al torneo de la Fuerza💪</h1>
    <p>En este torneo se enfrentarán los guerreros más poderosos de la galaxia.</p>
    <p>participantes registrados:</p>

    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Signo zodiacal</th>
                <th>Habilidades</th>
                <th>detalles</th>
            </tr>
        </thead>
        <div class="d-derecha">
            <a class="boton" href="registro.php">➕Registrar participante</a>
            <a class="boton" href="panel.php">📃Estadisticas</a>
        </div>
        <tbody>
            <?php
            $datos = listar_registros();

            foreach ($datos as $peleador) {
                echo "
                <tr>
                    <td><img src='{$peleador->foto}' alt='{$peleador->nombre}' width=50px;></td>
                    <td>{$peleador->nombre} {$peleador->apellido}</td>
                    <td>{$peleador->edad()}</td>
                    <td>{$peleador->signo_zodiacal()}</td>
                    <td>{$peleador->n_habilidades()}</td>

                    <td><a class='detalles-button' href='registro.php?codigo={$peleador->id}'>Ver detalles</a></td>
                </tr>
               ";
            }
            ?>

        </tbody>
    </table>
    </div>

</body>
    
</body>
</html>