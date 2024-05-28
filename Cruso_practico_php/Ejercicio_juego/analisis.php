<?php



$wordsList = ["sol", "luna", "cielo", "luz", "estrellas", "lluvia"];


for ($i=0; $i <count($wordsList) ; $i++) { 
    # code...
    if($_REQUEST["palabra".$i]== $wordsList[$i]){
        echo "La palabra es correcta "."<br>";
    }else{
        echo "La palabra es incorrecta ".$wordsList[$i] ."<br>";
    
    }
}
?>
