<?php
    $num1;
    $num2;
    $operacion;

    //Si el numero es un numero valido lo guarda
    if((filter_var($_POST["num1"], FILTER_VALIDATE_FLOAT) || $_POST["num1"] === "0") && (filter_var($_POST["num2"], FILTER_VALIDATE_FLOAT) || $_POST["num2"] === "0")){
        
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);

        if(!empty($_POST["operacion"])){
            $operacion= $_POST["operacion"];
            $msg = operarcion($num1, $num2,$operacion);
            echo ($msg);
            salir();
        }else{
            salir();
            exit("No ha seleccionado una operación!!</br>");
        }

    }else{//sino sale del script
        salir();
        exit ("Números con formato erróneo o campos vacios");
    }

    //Funcion que devuelve a la pagina que lo llamó
    function salir(){        
        header("Refresh: 4; url=" . $_SERVER["HTTP_REFERER"]);
    }

    //Funcion que realiza las operaciones
    function operarcion($n1, $n2, $op){
        if($op === "divi"){
            if($n2 == 0){
                salir();
                exit ("No se puede dividir entre 0");
            }else{
                return "El resultado de la division es: ". sprintf("%.2f", ($n1 / $n2));
            }            
        }elseif($op == "suma"){
            return "El resultado de la suma es: ". sprintf("%.2f", ($n1 + $n2));
        }
        elseif($op == "resta"){
            return "El resultado de la resta es: ". sprintf("%.2f", ($n1 - $n2));
        }
        elseif($op == "multi"){
            return "El resultado de la multiplicacion es: ".  sprintf("%.2f", ($n1 * $n2));
        }
    }
?>