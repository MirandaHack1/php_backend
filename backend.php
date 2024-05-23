<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
</head>

<body>
    <h1>Lista de Empleados Registrados</h1>

    <?php
    // Iniciar la sesión para almacenar la lista de empleados
    session_start();

    // Verificar si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['name']);
        $edad = (int)$_POST['age'];
        $email = htmlspecialchars($_POST['email']);

        // Validar la edad
        if ($edad < 18) {
            echo "Error: El empleado debe ser mayor de edad.<br>";
        }
        // Validar el correo electrónico
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Error: El correo electrónico no es válido.<br>";
        } else {
            // Si las validaciones son correctas, agregar a la lista de empleados
            $empleado = [
                'nombre' => $nombre,
                'edad' => $edad,
                'email' => $email
            ];

            // Si no existe la lista de empleados en la sesión, inicializarla
            if (!isset($_SESSION['empleados'])) {
                $_SESSION['empleados'] = [];
            }

            // Agregar el nuevo empleado a la lista
            $_SESSION['empleados'][] = $empleado;

            echo "Empleado registrado correctamente.<br>";
        }
    }

    // Mostrar la lista de empleados
    if (isset($_SESSION['empleados']) && count($_SESSION['empleados']) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Email</th>
                </tr>";
        foreach ($_SESSION['empleados'] as $empleado) {
            echo "<tr>
                    <td>{$empleado['nombre']}</td>
                    <td>{$empleado['edad']}</td>
                    <td>{$empleado['email']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No hay empleados registrados.";
    }
    ?>
    <br>
    <a href="frontend.php">Registrar otro empleado</a>
</body>

</html>