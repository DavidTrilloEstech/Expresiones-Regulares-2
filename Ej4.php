<?php
//Ejercicio 4: Validación de contraseña
//Escribe una función que valide si una contraseña es válida utilizando preg_match(). Las contraseñas válidas deben tener:
// Al menos 8 caracteres.
// Al menos una letra mayúscula.
// Al menos una letra minúscula.
// Al menos un número.
// Al menos un carácter especial (por ejemplo, @, #, !, etc.).

function validatePassword($password){
    $patronPasswords = "/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@#!%*?&])^[A-Za-z\d$#@!%*?&]{8,}$/";
    return preg_match($patronPasswords, $password);
}



$password = "abC3#McD436";

if (validatePassword($password)){
    echo "la contraseña $password es valida";
}else{
    echo "La contraseña $password no es valida";
}

