<?php
// Ejercicio 8: Reemplazo de todas las vocales por asteriscos
// Escribe una función que reemplace todas las vocales (tanto mayúsculas como minúsculas) en una cadena de texto por un asterisco (*).

function censorAllVocals(string $cadena){
    $patron = "/[aeiouAEIOU]/";
    $result = preg_replace($patron, "*", $cadena);
        
   
    return $result;
}

$cadena = "HolA mundo";
echo censorAllVocals( $cadena);
?>