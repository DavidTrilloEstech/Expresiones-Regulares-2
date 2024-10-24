<?php

    //Ejercicio 6: Validación de nombres de usuario
    //Escribe una función que valide un nombre de usuario. Debe tener entre 5 y 15 caracteres, solo letras y números, y comenzar con una letra.

    $patronUsuario = "@^[a-zA-Z][a-zA-Z0-9]{4,14}$@";

    $cadenaUsuario = "abc123";

    if (preg_match($patronUsuario, $cadenaUsuario)){
        echo "El usuario $cadenaUsuario es valido";
    }else {
        echo "El usuario $cadenaUsuario no es valido";
    }
?>