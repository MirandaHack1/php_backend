<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HELLO EJERCIO 2 LOGICA</h1>
    <P>Desarrolla un sistema básico de gestión de empleados que permita registrar nuevos empleados y
        mostrar una lista de todos los empleados registrados. Cada empleado debe tener un nombre, una edad,
        y un correo electrónico. El sistema debe verificar que la edad sea mayor o igual a 18 años y que el
        correo electrónico sea válido.
    </P>
    <form action="backend.php"  method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>