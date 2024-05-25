<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $edad = (int)$_POST['age'];
    $valor = (int)$_POST['valor'];

    if ($valor >= 100) {
        echo "El valor a retirar:" . $valor;
    } else {
        echo "El valor no supera los 100$:" . $valor;
    }
} else {
    echo "Error";
}

?>

<br>

<button onclick="window.location.href='index.php';" type="button">Regresar al inicio</button>