<?php
$nombre = "DON.JHONNY";
$false = false;

// ARREGLOS PHP 
$usuarios = array(
    array(
        "id" => 0,
        "username" => "Jhonny"
    ),
    array(
        "id" => 1,
        "username" => "Jhonny2"
    ),
    array(
        "id" => 2,
        "username" => "Jhonny3"
    ),

);

$tabla_9 = [];  //ejemplo como esta almacenando  
/*
[
    "9 x 1 = 9",
    "9 x 2 = 18"
]
*/
for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * 9;
    $texto= "9 x $i = $resultado";
    array_push($tabla_9, $texto); //ARRAY_PUSH  AYUDA INGRESAR VALORES A TU ARREGLO
}
// echo "<pre>";
// print_r($tabla_9);
// echo "</pre>";
// die(); //TERMINA EL PROGRAMA
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP COMO PREOPROCESADOR DE HTML</title>
</head>

<body>
    <h1>HOLA DESDE PHP USANDO HTML</h1>
    <?php
    echo "AHORA ESTO ESTOY EMPRIMIENDO DESDE PHP <br>";
    ?>
    <!-- ESTA ES OTRA FORMA DE EMPRIMIR DESDE PHP -->
    <?= "<i>ESTA ES OTRA FORMA DE IMPRIMIR ETIQUETAS CON PHP</i>" ?>
    <h1>HOLA <?= $nombre ?></h1>





    <!-- CONDICIONALES -->
    <!-- ESTO NO SE DEBE HACER  -->
    <?php
    if ($false) {
        echo "<b>SI ESTOY EN TRUE </b>";
    } else {
        echo "<b>SI ESTOY EN FALSE</b>";
    }

    ?>

    <!-- ESTO ES ACEPTABLE -->
    <?php if ($false) {  ?>
        <br> <b>SI ESTOY EN TRUE: ACEPTABLE</b> <br>

    <?php } else { ?>
        <br> <b>SI ESTOY EN FALSE: ACEPTABLE</b> <br>
    <?php } ?>


    <!-- ESTO SI DEBO DE HACER  -->
    <?php if ($false) : ?>
        <br> <b>SI ESTOY EN TRUE: SI DEBO HACER</b> <br>
    <?php else : ?>
        <br> <b>SI ESTOY EN FALSE: SI DEBO HACER</b> <br>
    <?php endif; ?>



    <!-- CICLOS PHP CON HTML -->
    <br>
    <h1>CICLOS PHP CON HTML</h1>
    <br>
    <ul>
        <?php for ($i = 0; $i < 10; $i++) : ?>

            <li><?= $i ?></li>

            <!-- WILE -->
            <?php while (false) : ?>
                <li>Cualquier Cosa</li>
            <?php endwhile; ?>
        <?php endfor; ?>

    </ul>


    <h1>LISTA DE USUARIOS</h1>
    <ul>
        <?php foreach ($usuarios as $usuarios) : ?>

            <li><?= $usuarios ?></li>

        <?php endforeach; ?>
    </ul>



    <!-- PASAR DATOS A JS -->

    <?php
    $edad_pepito = 20;
    ?>
    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>'); //RECIVO UN ARREGLO EN PHP Y CONVIERTO EN JSON
        console.log(users);
        let edad_pepito = <?= $edad_pepito ?>;
    </script>
    <script src="js/script.js"></script>

    <!-- JS A PHP -->

    <!-- REFACTORIZANDO CODIGO ESPAGUITE -->
    <ul>
        <?php foreach ($tabla_9 as $resultado) : ?>
            <li><?=$resultado?></li>
        <?php endforeach; ?>
    </ul>
    <?php


    ?>

    <!-- VARIABLES SUPER VARIABLES  -->
    <!-- GET -> ENVIO DE DATOS POR URL
    POST -> ENVIO DE DATOS POR DETRAS -->

</body>

</html>