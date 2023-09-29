<!--
    -> ex33.txt: crea un arxiu de text i dona-li els permisos adequats per tal que Apache hi pugui escriure.
       Posa algun text d'exemple tipus lorem ipsum.
    
    -> ex33pagina1.php: la pàgina ha de mostrar:
        - El contingut de l’arxiu “text.txt”
        - Un formulari amb un camp de text (textarea) i un botó de submit. Quan s’envia el text, s’afegeix
          a l’arxiu ex33.txt i es torna a mostrar tot.
        - Després de cada missatge enregistrat afegirem una línia horitzontal per separar cadascun dels comentaris transmesos.
-->

<form action="#" method="POST">
    <textarea name="texto"></textarea><br><br>
    <input type="submit">
</form>

<?php 
if (isset($_POST["texto"])) {
    file_put_contents("ex33.txt", 
        file_get_contents("ex33.txt")."\n<hr>\n".$_POST['texto']);
}
$file = file("ex33.txt");
foreach ($file as $paragraf) {
    echo "<p>".trim($paragraf)."</p>\n";
}
?>

<!-- =========================================>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>=>====================================>>==>>==>>==>>==>>==>>==>>==>>==>>==>>==>>==>>==>>==>>= -->