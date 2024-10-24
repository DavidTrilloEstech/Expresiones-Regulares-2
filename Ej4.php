<?php
//Ejercicio 4: Validación de contraseña
//Escribe una función que valide si una contraseña es válida utilizando preg_match(). Las contraseñas válidas deben tener:
// Al menos 8 caracteres.
// Al menos una letra mayúscula.
// Al menos una letra minúscula.
// Al menos un número.
// Al menos un carácter especial (por ejemplo, @, #, !, etc.).

$patronPasswords = "/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@#!%*?&])^[A-Za-z\d$#@!%*?&]{8,}$/";

$ejemploContrasena = "abC3#McD436";

if (preg_match($patronPasswords, $ejemploContrasena, $res)){
    echo "la contraseña $res[0] es valida";
}else{
    echo "La contraseña $ejemploContrasena no es valida";
}

