<?php
//Ejercicio 1: Extracción de números
//Dada una cadena de texto que contiene tanto letras como números, escribe una función que use preg_match_all() para extraer todos los números presentes en la cadena y devolverlos en un array.

$patron = "/\d/";

$cadena = "a56dsa7bdsr98o93h3j";

if (preg_match_all($patron, $cadena, $res)) {
    foreach ($res as $value) {
        foreach ($value as $int) {
            $arrayInt[] = $int; 
        }
    }
}

print_r($arrayInt);
?>