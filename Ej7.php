<?php
//Ejercicio 7: Extracción de palabras que empiezan con vocales
//Escribe una función que extraiga todas las palabras que comienzan con una vocal en una cadena de texto.
function getVocalStartingWords(string $cadena){
    $patron = "/\b[aeiouAEIOU][[:alpha:]ñ]*\b/";
    if (preg_match_all($patron, $cadena, $matches)) {
        foreach ($matches[0] as $match) {
            $arrayResult[] = $match;
        }
    }
    return $arrayResult;
}


$cadena = "Lorem ipsum dolor sit amet consectetur adipiscing elit";

$arrayResult = getVocalStartingWords($cadena);

print_r($arrayResult);
?>