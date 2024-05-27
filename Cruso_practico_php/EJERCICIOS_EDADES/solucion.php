<?php
    if ($_SERVER["REQUEST_METHOD"]  == "POST"){

        echo "DATOS: ENVIADOS CORRECTAMENTE";
        $edad=$_POST["edad"];
        

    } else {
        echo "DATOS: ERROR";
    
    }

?>