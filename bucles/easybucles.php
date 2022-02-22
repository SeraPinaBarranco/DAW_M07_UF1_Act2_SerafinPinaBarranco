<?php

    if(empty($_POST['numero'])) exit("Tienes que introducir un número!!!");

    $numero= intval($_POST['numero']);

    for ($i=0; $i < $numero; $i++) { 
        echo ("<p>". ($i+1) . "- Los bucles son faciles</p>");
    }

    echo("<p>Se acabó!! </p>");

    echo '<p><a href="' .$_SERVER['HTTP_REFERER']. '">Atras</a></p>';

?>