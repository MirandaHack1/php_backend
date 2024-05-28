<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Datos: Enviados correctamente";
    echo "<br>";
    $valor_prodcucto = $_POST["fvalorp"];
    $valor_prodcucto = intval($valor_prodcucto);









    function valor_descuento($valor_prodcucto)
    {
        $valordescuneto = (0.35 * $valor_prodcucto);
        $productodescuento = ($valor_prodcucto - $valordescuneto);
        return $productodescuento;
    }

    $producto_con_descuento = valor_descuento($valor_prodcucto);

    echo "El valor del producto original es: $valor_prodcucto" . "<br>" . "El valor del producto con descuento es:" . $producto_con_descuento . "<br>";

} else {
    echo "Datos: Error";
}
