<?php
//Ejercicio 2: Reemplazo de espacios múltiples
//Escribe una función que use preg_replace() para reemplazar todos los espacios múltiples en una cadena por un solo espacio.

$cadena = "Hola      mundo";
$cadenaFinal = preg_replace("@ +@" , " " , $cadena);

echo $cadenaFinal;
?>