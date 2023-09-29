<!--
    -> Mostra el text PROCESSA CONTACTES.
    -> Obre el fitxer contactes31.txt i el llegeix.
    -> Mostra els contactes del fitxer en una taula o en una llista.
    -> Genera un fitxer contactes31b.txt on has de traspassar tots els contactes de contactes31.txt, però enlloc de
       separats per comes, separats pel símbol #.
-->
<table>
<?php
    // Treure els contactes del .txt i desar-los a la taula.
    $contactes = file("contactes31.txt");
    foreach ($contactes as $contacte) {
        echo "<tr>";
        $contacte_exploded = explode(",", $contacte);
        echo "<td> Nom: ".$contacte_exploded[0]."</td>";
        echo "<td> 1r cognom: ".$contacte_exploded[1]."</td>";
        echo "<td> 2r cognom: ".$contacte_exploded[2]."</td>";
        echo "<td> Telèfon: ".$contacte_exploded[3]."</td>";
        echo "</tr>";
    }

    // Desar els contactes a un .txt però hara separats per una #.
    $dades = '';
    foreach ($contactes as $contacte) {
        $contacte_exploded = explode(",", $contacte);
        $dades .= "$contacte_exploded[0]#$contacte_exploded[1]#$contacte_exploded[2]#$contacte_exploded[3]";
    }

    file_put_contents("contactes31b.txt", $dades);
?>
</table>

<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        border: 1px solid;
        border-collapse: collapse;
        padding: 5px;
    }
</style>