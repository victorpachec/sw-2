<?php

function gerarTabuada($numero){
    for($i = 1; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>";
    }
}

gerarTabuada(4);

?>