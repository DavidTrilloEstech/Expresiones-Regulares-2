<?php
// Ejercicio 10: Validación de direcciones MAC
// Escribe una función que valide una dirección MAC. 
// Una dirección MAC válida tiene el formato XX:XX:XX:XX:XX:XX, donde XX son dos caracteres hexadecimales (0-9, A-F).

function validateMacDirection(string $cadena){
    $patron = "@^(?:[0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$@";

    return (preg_match($patron,$cadena));
}

$direccionMac = "5A:3B:F5:23:56:A2";

if (validateMacDirection($direccionMac)){
    echo "La direccion $direccionMac es valida";
}else{
    echo "$direccionMac no es una direccion valida";
}

?>