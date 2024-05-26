<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EJERCICIO 4</h1>
    <p>Sistema de que te diga la hora!</p>
    <label for="text">HOLA!¿ME PODRIAS DECIR QUE HORA ES?</label>
    <label for="text">CLARO SON LAS: <?php echo obtener_hora();?></label>
    <!-- PROGRAMANDO LA FUNCION DATE -->
    <?php
    function obtener_hora()
    {
        date_default_timezone_set("America/Guayaquil");
        return date("h:i a");
        // return  "holaa";
    }

    ?>

</body>

</html>

