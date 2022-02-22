<?php

    if(empty($_POST["num1"]) || empty($_POST["num2"]))exit("Ningun numero puede venir vacio!!");

    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    
    $n1 = intval($num1);
    $n2 = intval($num2);
    
    
    if(empty($_POST["operacion"]))exit("no ha seleccionado una operación!!");
    $operacion= $_POST["operacion"];

    if($operacion == "suma")echo ("El resultado de la suma es ". ($n1 + $n2)) ;
    if($operacion == "resta")echo ("El resultado de la resta es ". ($n1 - $n2)) ;
    if($operacion == "multi")echo ("El resultado de la multiplicacion es ". ($n1 * $n2)) ;
    if($operacion == "divi")echo ("El resultado de la division es ". sprintf("%.2f", ($n1 / $n2))) ;

    //echo "<a href=”’.$_SERVER['HTTP_REFERER'].’”>Ejemplo de Botón Regresar en PHP</a>’;

    echo '<p><a href="' .$_SERVER['HTTP_REFERER']. '">Atras</a></p>';




?>