<?php
//Ejercicio 3: Remover etiquetas HTML
//Dada una cadena que contiene HTML, escribe una función que use preg_replace() para eliminar todas las etiquetas HTML.
function removeHtmlTags(string $cadena){
    return preg_replace("/<[a-z].+?>/" , "" , $cadena);
}

$cadena= "<h1><b>Titulo1</b></h1>";

echo removeHtmlTags($cadena);