<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
    <p>Character binding programe</p>
    <!-- FORMULARIO DE REGISTRO INFORMACION PERSONAL -->
    <form method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="fname" name="fname" value="Example:Jhonny"><br>
        <label for="Age">Age:</label><br>
        <input type="text" id="fage" name="fage" value="Example:20 años"><br>

        <input type="submit" value="Submit">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $vnames = $_POST["fname"];
        $vages = $_POST["fage"];

        echo "La informacion ingresada es la siguiente:" . $vnames . "," . $vages . ".";
    } else {
        echo "Error, envio de datos";
    }
    ?>

</body>

</html>