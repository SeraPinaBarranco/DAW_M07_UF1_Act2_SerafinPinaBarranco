<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Actividad 1.1</h2>
        <?php 
            notasArray();
        ?>

    <h2>--- Fin actividad ---</h2>

    <h2>Actividad 1.2</h2>
        <?php 
            echo "<a href='calculadora/index.html'>Ir a calculadora</a>";
        ?>

    <h2>--- Fin actividad ---</h2>

    <h2>Actividad 1.3</h2>
        <?php 
            echo "<a href='bucles/index.html'>Ir a bucles faciles</a>";
        ?>
    <h2>--- Fin actividad ---</h2>

    <h2>Actividad 1.4</h2>
        <?php 
            echo "<a href='nota/index.html'>Ir a notas</a>";
        ?>
    <h2>--- Fin actividad ---</h2>

    <h2>Actividad 1.5</h2>
        <?php 
            echo "<a href='dni/dni.html'>Ir a calcular letra DNI</a>";
        ?>
    <h2>--- Fin actividad ---</h2>
</body>
</html>

<?php
    function notasArray(){
        $alumnos = array();
        $alumnos["Ana"]=6; 
        $alumnos["Marcos"]=5;
        $alumnos["Laura"]=8;

        echo("<h3>Notas</h3>");
        $notaAlta= max($alumnos);
        $notaMin= min($alumnos);

        foreach ($alumnos as $clave => $value) {
            if($value == $notaAlta)echo("<p>El alumno $clave tiene una nota de $value, la mas alta!!</p>");           
        }
        foreach ($alumnos as $clave => $value) {
            if($value == $notaMin)echo("<p>El alumno $clave tiene una nota de $value, la mas baja</p>");
        }

        $suma = 0;
        foreach($alumnos as $value){
            $suma += $value;
        }
        $media = sprintf('%.2f', $suma / count($alumnos));
        echo("<p>La nota media de la clase es:  $media</p>");

        echo("<h3>Notas ordenas por su valor</h3>");
        arsort($alumnos);
       
        foreach ($alumnos as $key => $value) {
            echo("<p>La nota de $key es $value</p>");
        }
        
    }
?>