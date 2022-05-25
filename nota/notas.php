<?php

$nota = $_POST["nota"];

if($nota === "0"){   //si el valor es cero al se puede considerar como empty
  echo("Suspenso");
}elseif(filter_var($nota,FILTER_VALIDATE_FLOAT)){
  $f_nota = floatval($nota);
  if($f_nota >= 0.1 and $nota < 5)echo("Suspenso");
  if($f_nota >= 5 and $nota < 7)echo("Aprobado");
  if($f_nota >= 7 and $nota < 9)echo("Notable");
  if($f_nota >= 9 and $nota < 10)echo("Excelente");
  if($f_nota == 10)echo("Matrícula de honor");
  if($f_nota > 10)echo("Introduce una nota válida");
}else{
  echo("La nota introducida no es correcta");
}

header("Refresh: 2; url=" . $_SERVER["HTTP_REFERER"]);

?>