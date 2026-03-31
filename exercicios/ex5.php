<?php

function totalizarValores($array){
    $soma = 0;

    foreach($array as $item){
        $soma += $item;
    }

    return $soma;
}

$valores = [2, 4, 6, 8];

echo totalizarValores($valores);

?>