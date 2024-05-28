<?php
$wordsList = ["sol", "luna", "cielo", "luz", "estrellas", "lluvia"];

$form = "<form action ='analisis.php'>";
for($i=0; $i < count($wordsList); $i++){
    $form .= "La palabra ". ($i + 1) ." es: " . str_shuffle($wordsList[$i]) . "<br>" .
    "Tu respuesta: ". "<input type='text' name='palabra" .$i. "'><br>";
}

$button = "<button type='submit'>Enviar</button>";
$formCierre ="</form>";
echo $form.$button.$formCierre;