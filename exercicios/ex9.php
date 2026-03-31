<?php
function Fatorial($n){
    $fat = 1;

    for($i = $n; $i >= 1; $i--){
        $fat = $fat * $i;
    }

    return $fat;
}

echo Fatorial(4);
?>