<?php

// Ejercicio 12: Validación de archivos con extensión .jpg o .png
// Escribe una función que valide si un nombre de archivo tiene una extensión .jpg o .png.

function validatePngJpg($filename){
    $patron = "\.jpg|\.png$";

    if (preg_match($patron, $filename, $res)){
        return $res[0];
    }
    return false;
    
}

$imagen = "imagen.png";

if ($formato = validatePngJpg($imagen)){
    echo "$imagen tiene formato $formato";
}else{
    echo "$imagen no tiene formato png ni jpg";
}

?>