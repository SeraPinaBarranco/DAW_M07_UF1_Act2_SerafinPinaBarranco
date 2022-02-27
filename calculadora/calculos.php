<?php

    // $num1=$_POST["num1"];
    // $num2=$_POST["num2"];  
    
    // if($num1 !== "0" || $num2 !== "0"){
    //     if(empty($_POST["num1"]) || empty($_POST["num2"])){
    //         salir();
    //         exit("Ningun numero puede venir vacio!!</br>");
    //     }        
    // }

    // comprobar_numero($num1);
    // comprobar_numero($num2);
    
    // $n1 = intval($num1);
    // $n2 = intval($num2);
    //if(!empty($_POST["operacion"])){
        // $operacion= $_POST["operacion"];

    if($_POST["num1"] != "" && $_POST["num2"] != ""){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];

        if(!empty($_POST["operacion"])){
            $operacion= $_POST["operacion"];
        }else{
            salir();
            exit("no ha seleccionado una operación!!</br>");
        }

        //comprobar_numero($num1);
        //comprobar_numero($num2);

        if($operacion == "suma"){
            echo ("El resultado de la suma es ". ($num1 + $num2)) ;
        }else if($operacion == "resta"){
            echo ("El resultado de la resta es ". ($num1 - $num2)) ;
        }else if($operacion == "multi"){
            echo ("El resultado de la multiplicacion es ". ($num1 * $num2)) ;
        }else if($operacion == "divi"){
            if($num2= "0"){
                echo ("El resultado de la division es ". sprintf("%.2f", ($num1 / $num2))) ;
            }else{
                salir();
                exit("El denominador no puede ser 0");
            }            
        }
    }else{
        echo("Ingresa todos los valores!!</br>");
        salir();
    }
        

    //     salir();

    // }else{
    //     echo("no ha seleccionado una operación!!</br>");
    //     salir();
     //}
    
   

    function comprobar_numero($n){      
        if(!filter_var($n,FILTER_VALIDATE_FLOAT)){
            salir();
            exit("Alguno de los valores tienen formato incorrecto (el signo digital es el punto)!!</br>");
        }
    }
    
    // function comprobar_operacion($op){
    //     if(empty($op)){
            
    //         salir();
    //     }
    // }
    
    function salir(){        
        header("Refresh: 4; url=" . $_SERVER["HTTP_REFERER"]);
    }
?>