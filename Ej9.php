<?php

// Ejercicio 9: Remover todas las letras mayúsculas
// Escribe una función que elimine todas las letras mayúsculas de una cadena de texto

function removeUppercase(string $cadena){
    $patron = "/[A-Z]/";

    return preg_replace($patron,"",$cadena);
}

$cadena = "Hola MuNdo";
echo removeUppercase( $cadena);


?>