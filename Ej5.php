<?php
    //Ejercicio 5: Extraer hashtags de un texto
    //Dado un texto que contiene hashtags (por ejemplo, #programación, #php), crea una función que use preg_match_all() 
    //para extraer todos los hashtags de la cadena y devolverlos en un array.

    function str_getHashtags(string $cadena, &$matches) {
        $patronHastag = "@\B#[[:alpha:]\d]+\w*\b@";

        return preg_match_all($patronHastag, $cadena, $matches);
    }

    $cadena = "#prueba #ejemplo probando #si"; 

    if (str_getHashtags($cadena, $matches)){
        foreach ($matches[0] as $match) {
            echo $match . '<br>';
        }
    }

    

?>