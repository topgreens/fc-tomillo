<?php
//funcion que elimina caracteres especiales de una cadena
function test_input($data) {
  $data = trim($data); //elimina espacios en blanco(u otro tipo de caracter) del inicio y el final de la cadena
  $data = stripslashes($data); //quita las barras de un string con comillas escapadas
  $data = htmlspecialchars($data); //convierte caracteres especiales en entidades HTML
  return $data;
}

//devuelve la edad a partir de la fecha
function calculaEdad($fnacimiento){
  list($ano,$mes,$dia) = explode("-",$fnacimiento);
  $ano_diferencia = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia = date("d") - $dia;
  if ($dia_diferencia < 0  || $mes_diferencia < 0 )
    $ano_diferencia--;
    return $ano_diferencia;
}
?>