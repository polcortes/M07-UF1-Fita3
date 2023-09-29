<!--
    -> ex32.php (ull, només 1 pàgina):
        · Mostra un formulari enviat amb POST amb:
            - El text INTRODUEIX DADES
            - Un textarea amb name = “comentari”
            - Un camp de text amb el label “separador:” i amb name = “separador”
            - Botó d’enviar.
        · Si es reben dades:
            - Si no existís el fitxer comentaris.txt , el creem.
            - Afegim al fitxer comentaris.txt el contingut del camp “comentari”
              però substituint els espais pel text introduït a “separador”.
-->

<form action="#" method="post">
    <h3>Introdueix les dades:</h3>
    <textarea name="comentari" cols="3" rows="10" placeholder="Afegeix un comentari..." required></textarea>
    <input type="text" name="separador" placeholder="Separador" required maxlength="1">
    <button type="submit">Submit!</button>
</form>

<?php 
    if (isset($_POST)) {
        $comentari = $_POST['comentari'];
        $separador = $_POST['separador'];
        file_put_contents('comentaris.txt', str_replace(' ', $separador, $comentari));
    }
?>

<style>
    form {
        display: flex;
        flex-direction: column;
        width: fit-content;
    }

    input {
        margin-top: 10px;
    }
</style>