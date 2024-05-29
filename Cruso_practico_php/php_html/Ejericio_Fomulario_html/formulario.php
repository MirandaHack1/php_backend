<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con GET</title>
</head>

<body>
    <!-- METODO GET -->
    <!-- <form action="./serve.php" method="GET">
        <label for="nombre">NOMBRE:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">EDAD:</label>
        <input type="text" name="edad" id="edad">

        <button type="submit">Enviar</button>

    </form> -->
    <!-- METODO POST  -->
    <form action="./serve.php" method="POST">
        <label for="nombre">NOMBRE:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">EDAD:</label>
        <input type="text" name="edad" id="edad">

        <button type="submit">Enviar</button>

    </form>
</body>

</html>