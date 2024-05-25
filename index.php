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
$edad_jhonyy = ($edad_xd = 5) + 18;
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
$Atajaos = "xd ";
$Atajaos .= "xd";
echo $Atajaos;
echo "<br>" . "------------------------------------------" . "<br>";
echo "<br>" . "COMIENZO CURSO DE ARRELGOS " . "<br>";

// ARREGLOS PHP
$edades_arreglos = [
    20, 18, 40
];
echo "Una de las edades que estan adentro es:" . $edades_arreglos[2];
echo "<br>";
// otras formas de declarar arreglos
$edades_arreglos2 = array(20, 18, 40);
echo "Una de las edades que estan adentro es:" . $edades_arreglos[1];
echo "<br>";
// arreglos asociativos
$edades_arreglos3 = array(
    "Juan" => 20,
    "Maria" => 18,
    "Pedro" => 40
);
echo "Una de las edades de Juan: " . $edades_arreglos3["Juan"];
echo "<br>";

$cafes = array(
    "Capuchino" => 50,
    "Negro" => 40,
);
echo "El precio de capuchino es:  {$cafes['Capuchino']}"; // otra forma de concadernas array
echo "<br>";
$personas = array(
    "Juan" => array(
        "edad" => 20,
        "peso" => 70
    ),
    "Maria" => array(
        "edad" => 22,
        "peso" => 64
    )
);
echo "La edad de juan es: " . $personas["Juan"]["edad"] . " Peso:" . $personas["Juan"]["peso"];

echo "<br>";
echo "<br>" . "MANIPULACION DE ARREGLOS" . "<br>";
// funcion count saber cual es el tamaño de mi arreglo
$arreglo_manipulacion = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "El arreglo tiene " . count($arreglo_manipulacion) . " elementos";

//funcion push agregar elementos al arreglo
array_push($arreglo_manipulacion, 11, 12, 13, 14, 15);

// funcion is_array para saber si es un arreglo
$esto_no_es_un_arreglo = "xd";
echo "<br>";
var_dump(is_array($esto_no_es_un_arreglo));
echo "<br>";
// Funcion explode para separar un string
$frase = "Manzana, Pera, Guineo";
$frase_separada = explode(",", $frase);
var_dump($frase_separada);
echo "<br>";
// funcion implode para unir un string
$lista__de_frutas = ["Fresa", "Uva", "Manzana"];
$frase1 = implode(",", $lista__de_frutas);
var_dump($frase1);



// EJERCICIOS DE ARREGLOS

$gatos = array(
    "Gato1" => array(
        "name" => "Gato1",
        "Ocupation" => "Dormir1",
        "Colors" => "Black1",
        "food" => array(
            "food_favorite" => "Procna",
            "food_not_favorite" => "Pasta"
        )

    ),
    "Gato2" => array(
        "name" => "Gato2",
        "Ocupation" => "Dormir2",
        "Colors" => "Black2",
        "food" => array(
            "food_favorite" => "Procna",
            "food_not_favorite" => "Pasta"
        )
    ),
    "Gato3" => array(
        "name" => "Gato3",
        "Ocupation" => "Dormir3",
        "Colors" => "Black3",
        "food" => array(
            "food_favorite" => "Procna",
            "food_not_favorite" => "Pasta"
        )
    )
);
echo "<br>";
// echo "EJERCICIO 1 gato1:"."Name:".$gatos["Gato1"]["name"]."Food:". $gatos["Gatos1"]["name"]["food"]["food_favortie"];
echo "EJERCICIO 1 gato1: Name: " . $gatos["Gato1"]["name"] . " Food: " . $gatos["Gato1"]["food"]["food_favorite"];


//CONDICIONALES 
// if else
$numero = 5;
if ($numero == 5) {
    echo "El numero es 5";
} else {
    echo "El numero no es 5";
}
if ($numero == 5) {
    echo "El numero es 5";
} else if ($numero == 6) {
    echo "El numero es 6";
} else {
    echo "El numero no es 5 ni 6";
}

//CREANDO UN SWITCH
$michis = 3;
switch ($michis) {
    case 1:
        echo "Su numero favorito es el 9:";
        break;
    case 2:
        echo "Su numero favorito es el 4:";
        break;
    case 3:
        echo "Su numero favorito es el 9:";
        break;
    case 4:
        echo "Su numero favorito es el 1:";
        break;
    default:
        echo "Su michi no existe:";
};
echo "<br>";

//EJERCICIO 2



//CICLO WHILE
$contador = 0;
while ($contador < 10) {
    echo "<br>hola" . "" . $contador;
    $contador++;
}


// DO WHILE
$usernames = [
    "Juan",
    "Maria",
    "Pedro"
];
do {
    // $usernames =readline("ingrese  un nombre de ususaurio;");
    echo "<br>hola una vez";
} while (false);

// ciclo for
for ($i = 0; $i < 10; $i++) {
    echo "<br>hola" . "" . $i;
};


// ciclo for each nos ayuda a recorrer  array
$tienda_cafes = array(
    "Americano" => 20,
    "Capuchino" => 30,
    "Negro" => 40
);
foreach ($tienda_cafes as $cafes =>  $precios) {
    // echo "<br> El costo del $cafes es : $$precios";
    if ($cafes == "Americano") {
        echo "<br>En cotre al cafe: " . $cafes;
        break; //rompe el ciclo
    };
};
foreach ($tienda_cafes as $cafes =>  $precios) {
    if ($cafes == "Americano") {
        continue; //salta la iteracion
    }
    echo "<br>El cafe es muy rico: ".$cafes;
};
