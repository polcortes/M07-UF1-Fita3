<!--
    -> productes.txt: contindrà una llista de productes, un per línia.
    -> botiga.php: llegirà el contingut de productes.txt i crearà un formulari amb:
        - Un checkbox per cada producte amb el nom del producte.
        - Un input text per al nom de l'usuari.
        - Un submit button.
    -> comandes.txt : quan s'enviï el formulari es guardarà la comanda en aquest arxiu de text, de la forma:
        [ nom_d�39;usuari,prod1,prod2,etc. ]
-->
<form action="" method="POST">
    <input type="checkbox" name="prods[]" value="peres">Peres</input> <br>
    <input type="checkbox" name="prods[]" value="pomes">Pomes</input> <br>
    <input type="checkbox" name="prods[]" value="pastanagues">Pastanagues</input> <br>
    <input type="submit" value="Submit!"> <br>
</form>

<?php
    foreach ($_POST['prods'] as $prod) {
        echo "<p>$prod</p>";
    }
?>