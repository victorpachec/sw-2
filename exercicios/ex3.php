<?php

function checarNumero($num = 67){
    if ($num % 2 === 0) {
        return $num . " é par";
    } else {
        return $num . " é ímpar";
    }
}

echo checarNumero();

?>