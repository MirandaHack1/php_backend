<?php
function summation($n)
{
    // Your code here
    if (is_null($n)) {
        $nint = intval($n);
        $contador = 0;
        $suma_texto = "";
        if ($nint > 0) {
            for ($i = 1; $i <= $nint; $i++) {
                $contador = ($contador +  $i);
                if ($i > 1) {
                    $suma_texto .= " + ";
                }
                $suma_texto .= $i;
            }
            echo "$nint -> $contador ($suma_texto)";
        } else {
            echo "DATO: ERROR!";
        }
    }
}
summation("");
