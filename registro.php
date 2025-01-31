<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar guerrero</title>
</head>

<?php
require('libreria/motor.php');
plantilla::aplicar();


?>

<body>
    <div class="container">
    <h1>Registrar guerrero</h1>
    <form class="form" action="guardar.php" method="post">
        <?php
        echo my_input('id', 'Identificacion');
        echo my_input('nombre', 'Nombre',['required' => 'required']);
        echo my_input('apellido', 'Apellido');
        echo my_input('edad', 'Edad', ['tipo' => 'date']);
        echo my_input('foto', 'Foto', ['tipo' => 'url']);
        ?>
        <button type="submit">Registrar</button>
    </form>
    <a class="botonVolver" href="index.php">Volver</a>
    </div>

</body>
</html>