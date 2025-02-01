<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar guerrero</title>
    <link rel="stylesheet" href="styles.css">
</head>

<?php
require('libreria/motor.php');
plantilla::aplicar();

$peleador =  new peleador();

if (isset($_GET['codigo'])) {
    $peleador = cargar_datos($_GET['codigo']);
}
if(!$peleador) {
    echo "<h1>⚠Error</h1>";
    echo "<p>El guerrero no existe</p>";
}
?>

<body>
    <div class="container">
        <h1>Registrar guerrero</h1>
        <form class="form" action="guardar.php" method="post">
            <?php
            echo my_input('id', 'Identificacion', $peleador->id);
            echo my_input('nombre', 'Nombre', $peleador->nombre, ['required' => 'required']);
            echo my_input('apellido', 'Apellido', $peleador->apellido);
            echo my_input('edad', 'Edad', $peleador->fecha_nacimiento, ['tipo' => 'date']);
            echo my_input('foto', 'Foto', $peleador->foto, ['tipo' => 'url']);
            ?>
<button type="submit" class="botonRegistro">Registrar</button>

            
            <h3 class="center">Habilidades</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Nivel</th>
                        <td><button type="button" onclick="agregarHabilidad()">➕</button></td>
                    </tr>
                </thead>
                <tbody id="tdHabilidades">
                    <?php
                    foreach ($peleador->habilidades as $habilidad) {
                        echo "<tr>";
                        echo "<td><input type='text' name='habilidades[nombre][]' value='{$habilidad->nombre}'></td>";
                        echo "<td><input type='text' name='habilidades[tipo][]' value='{$habilidad->tipo}'></td>";
                        echo "<td><input type='text' name='habilidades[nivel][]' value='{$habilidad->nivel}'></td>";
                        echo "<td><button type='button' onclick='quitarHabilidad(this)'>❌</button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </form>
        <a class="botonVolver" href="index.php">Volver</a>
    </div>
    
    <script>
        function agregarHabilidad() {
            var tr = document.createElement('tr');
            var td = document.createElement('td');
            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'habilidades[nombre][]';
            td.appendChild(input);
            tr.appendChild(td);

            var td = document.createElement('td');
            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'habilidades[tipo][]';
            td.appendChild(input);
            tr.appendChild(td);

            var td = document.createElement('td');
            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'habilidades[nivel][]';
            td.appendChild(input);
            tr.appendChild(td);

            var td = document.createElement('td');
            var button = document.createElement('button');
            button.type = 'button';
            button.onclick = function() {
                quitarHabilidad(this);
            }
            button.innerText = '❌';
            td.appendChild(button);
            tr.appendChild(td);

            document.getElementById('tdHabilidades').appendChild(tr);
        }

        function quitarHabilidad(button) {
            var tr = button.parentElement.parentElement;
            tr.remove();
        }
    </script>
</body>
</html>
