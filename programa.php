<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    //Formulario html sensillo
    <form method="POST">
        <label for="fname">Ingresa tiempos a segundos:</label><br>
        <input type="text" id="ftimes" name="ftimes" value=""><br>
        <br>
        <input type="submit" value="Enviar">
    </form>

    //codigo php
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Datos enviados correctamente.<br>";
        $ftimes = $_POST["ftimes"];
        $ftimes= intval($ftimes);
        // var_dump($ftimes);
        $ftimes = $ftimes / 3600;
        $ftimes = round($ftimes, 2);

        echo "El valor enviado es: " .($ftimes);
    } else {
        echo "Error al enviar datos.";
    }
    ?>

</body>

</html>
