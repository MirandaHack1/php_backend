<?php
echo "PRIMERA CLASE CONCADENAR ";

// DECLARACION DE VARIABLES
$nombre = "Juan";
$apellido = "Perez";
// CONCADENAR
echo "Hola " . $nombre . " " . $apellido . "<br>";
//
echo "Hola $nombre $apellido<br>";



//debug codigo
$personas = [
    "Juan" => 22,
    "Maria" => 20,
    "Pedro" => 25
];
// funcion de bug
var_dump($personas); //me da mas informacion
echo "<br>";

print_r($personas); // me da meno informacion

//TIPOS DE DATOS
$n = 0;
$float = 0.5; //int
$hola = "Hola"; //string   
$true = true; //boolean

// CASTNG FORZAR TIPOS DE DATOS
$numero2 = "5";
$numero2 = (int)$numero2; //forzamos que sea un int
var_dump($numero2);

//STRING
$meses = 5.69;
$meses = (string)$meses;
var_dump($meses);

// BOOLEAN
$boleao = 0;
$boleao = (bool)$boleao;
var_dump($boleao);


//operadores logicos
// and , or, not
$michis_felinos = true;
$michis_4_patas = true; 
$michis_vuelan = false;
$michis_son_programadors = false;

// operaciones con and
var_dump($michis_felinos && $michis_4_patas);
// operaciones con or
var_dump($michis_felinos || $michis_vuelan);
// operaciones con not
var_dump(!$michis_son_programadors);

//operadores arimetricos
// + - * / %  **

