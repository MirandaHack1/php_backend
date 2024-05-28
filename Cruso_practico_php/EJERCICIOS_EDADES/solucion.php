<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST") {

    echo "DATOS: ENVIADOS CORRECTAMENTE <br>";
    $edad = $_POST["fedad"];

    $edad = intval($edad);
    // var_dump($edad);

    if ($edad < 5) {
        echo "El estudiante con $edad años tendrá sus juguetes en la parte inferior de la bodega. ";
    }
    if ($edad > 5 && $edad < 7) {
        echo "El estudiante con $edad años tendrán sus espacios en la parte media de la bodega.";
    }
    if ($edad > 7) {
        echo "El estudiante con $edad años tendrán sus espacios en la parte alta de la bodega.";
    }
} else {
    echo "DATOS: ERROR";
}
