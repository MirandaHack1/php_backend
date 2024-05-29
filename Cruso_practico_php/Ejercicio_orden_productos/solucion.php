<?php

// Comprobación de la solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si la solicitud es POST, se muestra un mensaje de confirmación
    echo "DATOS: ENVIADOS CORRECTAMENTE<br>";

    // Obtener y validar el número de productos del formulario
    $numeroProductos = isset($_POST["fproducto"]) ? intval($_POST["fproducto"]) : 0;

    if ($numeroProductos > 0) {
        // Si el número de productos es mayor que cero, se genera el formulario dinámicamente
        $form = "<form action='analisis.php' method='POST'>";
        for ($i = 0; $i < $numeroProductos; $i++) {
            // Se generan campos de entrada para la altura y el ancho de cada producto
            $form .= "Producto " . ($i + 1) . ":<br>";
            $form .= "<label for='productoAltura$i'>Altura:</label>";
            $form .= "<input type='text' id='productoAltura$i' name='productoAltura$i'><br>";
            $form .= "<label for='productoAncho$i'>Ancho:</label>";
            $form .= "<input type='text' id='productoAncho$i' name='productoAncho$i'><br><br>";
        }
        // Se agrega un botón de envío al formulario
        $form .= "<button type='submit'>Enviar</button>";
        $form .= "</form>";

        // Se muestra el formulario generado en la página
        echo $form;
    } else {
        // Si el número de productos es inválido, se muestra un mensaje de error
        echo "MENSAJE: NUMERO DE PRODUCTO TIENE QUE SER MAYOR A 0";
    }
} else {
    // Si la solicitud no es POST, se muestra un mensaje de error
    echo "Error";
}

?>
