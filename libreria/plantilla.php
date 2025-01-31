<?php 

class plantilla {

    static $instancia = null;

    public static function aplicar() {
        if (self::$instancia == null) {
            self::$instancia = new plantilla();
        }
    }

    public function __construct()
    {
        $cssFile = './css/main.css'; // Ruta del archivo CSS
        if (file_exists($cssFile)) {
            $cssContent = file_get_contents($cssFile);
            echo "<style>\n" . $cssContent . "\n</style>";
        } else {
            echo "<!-- Error: No se encontró el archivo CSS -->";
        }
    }

    public function __destruct()
    {
        ?>
        
        <div class="creditos">
        <h1>📝Desarrollado por Angel David Ovalles (DavidOvalles-Dev)</h1>
        </div>

        <?php
    }
} 

