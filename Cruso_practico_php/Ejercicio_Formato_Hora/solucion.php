<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Datos: ENVIADOS CORRECTAMENTE";
    echo "<br>";
    $date_format = $_POST["date_format"];
    $firsSplit = explode(' ', $date_format); // Cambiado '' por ' '
    //"12:05:06" "PM" dos array (0,1)
    $secondSplit = explode(':', $firsSplit[0]);
    // "12" "05" "06"  tres arreglos (0, 1, 2)
    $times = $firsSplit[1];   //"PM", "AM"
    $hora = $secondSplit[0]; // horas
    $minutos = $secondSplit[1]; // minutos
    $segundos = $secondSplit[2]; // segundos


    if ($times === 'AM' && $hora === '12') {
        $hora = '00';
    }

    if ($times === 'PM' && $hora < '12') {
        $hora = strval(+$hora + 12);
    }


    echo "HORA: $hora:$minutos:$segundos";
} else {
    echo "DATOS: ERROR NO ENVIADOS";
}
