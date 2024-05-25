<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "DATOS ENVIADOS CORRECTOS";
    echo "<br>";
    $valor = $_POST["valor"];
    $nuevo_valor = intval($valor);
    // var_dump($nuevo_valor);
    $nombres_tiendas = array(
        "Tienda 1",
        "Tienda 2",
        "Tienda 3",
        "Tienda 4",
        "Tienda 5",
        "Tienda 6",
        "Tienda 7",
        "Tienda 8",
        "Tienda 9"
    );
    switch ($nuevo_valor) {
        case 1:
            echo "Para la tienda 1 <br>";
            echo "Numero de caminos es: 0";
            break;
        case 2:
            echo "Para la tienda 2 <br>";
            echo "Numero de caminos es=1";
            break;
        case 3:
            echo "Para la tienda 3 <br>";
            echo "Numero de caminos es=2";

            break;
        case 4:
            echo "Para la tienda 4 <br>";
            echo "Numero de caminos es=3";

            break;
        case 5:
            echo "Para la tienda 5 <br>";
            echo "Numero de caminos es=5";

            break;
        case 6:
            echo "Para la tienda 6 <br>";
            echo "Numero de caminos es=8";

            break;
        case 7:
            echo "Para la tienda 7 <br>";
            echo "Numero de caminos es=13";

            break;
        case 8:
            echo "Para la tienda 8 <br>";
            echo "Numero de caminos es=21";

            break;
        case 9:
            echo "Para la tienda 9 <br>";
            echo "Numero de caminos es=34";

            break;

        default:
            echo "LA TIENDA QUE ME MENCIONASTES NO SE ENCUENTRA: " . $nuevo_valor;
            echo "<br> LAS TIENDAS QUE SE ENCUENTRA EN EL SISTEMA:";
            foreach ($nombres_tiendas as $tienda) {
                echo "<br>" . $tienda;
            }
            break;
    }
} else {
    echo "ERROR: ENVIAR DATOS";
}
?>
<br>
<button onclick="window.location.href='index.php';" type="button">Regresar al inicio</button>