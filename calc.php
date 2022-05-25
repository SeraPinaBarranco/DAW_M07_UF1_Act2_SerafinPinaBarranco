<?php

    if(!empty($_POST['num1']) && !empty($_POST['num2'])){
        if(isset($_POST['operacion'])){
            $op = $_POST['operacion'];

            if($op == "suma"){
                echo "Suma = " . ($_POST['num1'] + $_POST['num2']);
            } 
            if($op == "resta"){
                echo "Resta = " . ($_POST['num1'] - $_POST['num2']);
            }
            if($op == "division"){
                echo "Division = " . sprintf("%.2f",($_POST['num1'] / $_POST['num2']));
            }
        }
    }

    

?>