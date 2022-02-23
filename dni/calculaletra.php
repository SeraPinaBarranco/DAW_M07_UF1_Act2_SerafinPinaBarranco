<?php
    //echo("ww");
    $dni = $_POST['dni'];
    $letras=['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];

    

    if(empty($dni) || strlen($dni) != 8 ){
        echo("Error en el dni");
    }else{
        $resto= $dni % 23;
        echo("La letra para el DNI " . $dni . " es la: " . $letras[ $resto]);
    }
    echo '<p><a href="' .$_SERVER['HTTP_REFERER']. '">Atras</a></p>';
?>