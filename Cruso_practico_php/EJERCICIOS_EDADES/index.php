<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Edad del Estudiante</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="solucion.php" method="POST" class="form-container">
        <label for="fedad" class="label">Ingrese la edad del Estudiante:</label>
        <input type="number" name="fedad" id="fedad" class="input-field">
        <button type="submit" class="submit-button">Enviar</button>
    </form>
    <!-- arbolito de navidad con * -->
    <?php
    // $numero_asteristicos = 5;
    graficar_arbolito(5);
    function graficar_arbolito($numero_asteristicos)
    {
        for ($i = 1; $i <= $numero_asteristicos; $i++) {
            echo str_repeat('*', $i) . "<br>";
        }
    }

    ?>
</body>

</html>