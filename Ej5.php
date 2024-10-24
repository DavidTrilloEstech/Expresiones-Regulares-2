<?php
    //Ejercicio 5: Extraer hashtags de un texto
    //Dado un texto que contiene hashtags (por ejemplo, #programación, #php), crea una función que use preg_match_all() 
    //para extraer todos los hashtags de la cadena y devolverlos en un array.

    $patronHastag = "@\B#[[:alpha:]\d]+\w*\b@";

    $ejemplo = "#prueba #ejemplo probando #si"; 

    if (preg_match_all($patronHastag, $ejemplo, $arrayHastag)){
        foreach ($arrayHastag[0] as $hastag){
            echo $hastag . '<br>';
        }
    }

?>