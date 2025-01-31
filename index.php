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
                <th>detalles</th>
            </tr>
        </thead>
        <div class="d-derecha">
            <a class="boton" href="registro.php">Registrar participante</a>
        </div>
        <tbody>
            <?php
            $datos = listar_registros();

            foreach ($datos as $dato) {
                echo <<<HTML
                <tr>
                    <td><img src="{$dato->foto}" alt="{$dato->nombre}" width=50px;></td>
                    <td>{$dato->nombre} {$dato->apellido}</td>
                    <td>{$dato->edad()}</td>
                    <td><a href="detalles.php">etalles</a></td>
                </tr>
                HTML;
            }
            ?>

        </tbody>
    </table>
    </div>

</body>
    
</body>
</html>