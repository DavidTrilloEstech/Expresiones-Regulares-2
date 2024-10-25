<?php

    //Ejercicio 6: Validación de nombres de usuario
    //Escribe una función que valide un nombre de usuario. Debe tener entre 5 y 15 caracteres, solo letras y números, y comenzar con una letra.

    function validateUsername(string $username ){
        $patronUsuario = "@^[a-zA-Z][a-zA-Z0-9]{4,14}$@";
        return preg_match($patronUsuario, $username);
    }
    

    $username = "abc123";

    if (validateUsername($username)){
        echo "El usuario $username es valido";
    }else {
        echo "El usuario $username no es valido";
    }
?>