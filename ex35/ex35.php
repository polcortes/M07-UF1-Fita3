<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>botiga</title>
</head>
<body>
    <!--
        -> productes.txt: contindrà una llista de productes, un per línia.
        -> botiga.php: llegirà el contingut de productes.txt i crearà un formulari amb:
            - Un checkbox per cada producte amb el nom del producte.
            - Un input text per al nom de l'usuari.
            - Un submit button.
        -> comandes.txt: quan s'enviï el formulari es guardarà la comanda en aquest arxiu de text, de la forma:
            [ nom_d�39;usuari,prod1,prod2,etc. ]
    -->
    <form method="POST">
        <?php
            // Crear formulari
            $file = fopen("productes.txt", "r");
            while ($line = fgets($file)) {
                echo "<input type='checkbox' name='prods[]' value='".trim($line)."'>$line</input><br>";
                
            }
            echo "<input type='text' name='usuario' required>";
            echo "<input type='submit' value='enviar'>";


            // Processar dades
            if (isset($_POST["prods"])) {
                $user = $_POST["usuario"];
                $file2 = fopen("comandes.txt", "a");
                $comanda = $user;
                foreach ($_POST["prods"] as $producte) {
                    $comanda .= ", ".$producte;
                }
                fwrite($file2, $comanda."\n");
            }
        ?>
        
    </form>
</body>
</html>