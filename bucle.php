<?php
    if(isset($_POST['num']) && !empty($_POST['num'])){
        $n = $_POST['num'];
        for ($i=0; $i < $n; $i++) { 
            echo ($i + 1) . ". Los bucles son fáciles<br>";
        }
        echo "Se acabó!";
    }else{
        echo "numero erroneo";
    }
?>