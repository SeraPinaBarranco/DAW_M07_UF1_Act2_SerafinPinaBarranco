<?php

$nota = $_POST["nota"];

if(empty($_POST["nota"])){
    $nota="cero";
}

if(empty($nota)){
    echo("Tienes que poner un nota!!");
}
else{
   //$nota= intval($_POST["nota"]);
   if($nota === "cero")echo("Suspenso");
   if($nota >= 0.1 and $nota < 5)echo("Suspenso");
   if($nota >= 5 and $nota < 7)echo("Aprobado");
   if($nota >= 7 and $nota < 9)echo("Notable");
   if($nota >= 9 and $nota < 10)echo("Excelente");
   if($nota == 10)echo("Matrícula de honor");
}
  echo '<p><a href="' .$_SERVER['HTTP_REFERER']. '">Atras</a></p>';

?>