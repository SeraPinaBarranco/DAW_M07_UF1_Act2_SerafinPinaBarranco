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
</body>
</html>

<?php
    function notasArray(){
        $alumnos = ["Ana"=>6, "Marcos"=> 5, "Laura"=>8];



        sort($alumnos);
        echo("<h3>Notas ordenadas</h3>");
        // for ($i=0; $i < count($alumnos); $i++) { 
        //     echo("<p>El alumno $alumnos($i) tiene una nota de</p>");
        // }
        foreach ($alumnos as  $value) {
            echo("<p>El alumno * tiene una nota de $value</p>");
        }
        
    }
?>