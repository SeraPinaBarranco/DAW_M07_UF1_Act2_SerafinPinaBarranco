<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n = 99;
        notas();
    ?>

    <form action="calc.php" method="POST">
        <input type="number" name="num1" id="num1">
        <input type="number" name="num2" id="num2">
        <input type="radio" name="operacion" value="suma">
        <input type="radio" name="operacion" value="resta">
        <input type="radio" name="operacion" value="division">
        <input type="submit" name="calcular" id="calcular">
    </form>

    <form action="bucle.php" method="post">
        <input type="number" name="num" id="">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>


<?php 
    $n2 = 88;
    function notas(){
        global $n;
        $alumnos = array();
        $alumnos['Jose']= 4;
        $alumnos['Ana']=9;
        $alumnos['Eva']=6;
        $media=0;
        foreach ($alumnos as $key => $value) {
            if($value == max($alumnos))echo "La nota mas alta es de $key con una nota de $value <br>";
        
            if($value == min($alumnos))echo "La nota mas baja es de $key con una nota de $value <br>";

            $media += $value; 
        }

        echo "La nota media es de " . sprintf("%.2f", ($media / count($alumnos))) ."<br><br>" ;

        arsort($alumnos);
    
        foreach ($alumnos as $key => $value) { 
            echo "$key: nota $value <br>";
        }
        
        echo $n;
        echo $GLOBALS['n2'];
    }
    
    notas();
   
?>