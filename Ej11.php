<?php 
// Ejercicio 11: Reemplazo de números por su valor al cuadrado
// Escribe una función que encuentre todos los números en una cadena y los reemplace por su valor al cuadrado.

function str_squareAllNumbers(string &$str){
    $patron = "@[1-9]\d*@";
    if (preg_match_all($patron, $str, $matches)){
        foreach ($matches[0] as $numero){
        $str = str_replace($numero,$numero*$numero, $str);
        }
    }
}

$cadena = "Enhorabuena agente 47";
str_squareAllNumbers($cadena);
echo $cadena;

?>