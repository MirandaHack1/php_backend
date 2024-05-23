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
$numerouno = 5;
$numerodos = 2;
var_dump($numerouno + $numerodos); //suma
var_dump($numerouno - $numerodos); //resta
var_dump($numerouno * $numerodos); //multiplicacion
var_dump($numerouno / $numerodos); //Division
var_dump($numerouno % $numerodos); //modulo
var_dump($numerouno ** $numerodos); //potencia
//Identidad	Convierte un string a int o float, según sea el caso.	+	+$a
// Negación	Convierte un número a positivo o negativo.	-	-$a

//OPERADORES RELACIONALES
// == igual a
// === igual y de tipo
//  != diferente a
// !== diferente y de tipo
// > mayor que
// < menor que
// >= mayor o igual que
// <= menor o igual que
// <=> orden natural
echo 2 <=> 1; // 1
echo 1 <=> 2; //-1
echo 1 <=> 1; // 0
// ?? fusion de null
$edad = 15;
echo $edad ?? $edad_pepito; //si la edad no esta definida utiliza la edad de pepito

//otros operadores
//operadores de asignacion
$edad_jhonyy = ($edad_xd=5)+18; 
echo "la edad de xd $edad_xd";
echo "la edad de jhonyy $edad_jhonyy";
//operadores de incremento
// ++$a 
// --$a 
// $a++ aumenta mas 1
// $a-- resta menos 1
// +=   $a += 5  == $a = $a + 5
// -=   $a -= 5  == $a = $a - 5
// +=   $a *= 5  == $a = $a * 5
// /=   $a /= 5  == $a = $a / 5
// .=   
//Ejemplo
$Atajaos= "xd ";
$Atajaos .= "xd";
echo $Atajaos;

