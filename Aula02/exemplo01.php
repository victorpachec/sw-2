<?php
$a = 10;
$b = 5;

$soma = $a + $b;

echo "A soma e: " . $soma;
echo "<br>";
echo "a variavel e:";
var_dump($a);

if($a>$b) {
    echo "a variavel e maior que a b";

}else{
    echo "a variavel a nao e maior que  B";
}

echo "<br>";

$n1 =  4; 
$n2 = 5;
$n3 = 6;

$media =($n1 + $n2 + $n3) / 3;

if ($media>5){
    echo "aprovado com media $media";
}else{
    if($media<4){
        echo"reprovado com media $media";
    }else{
        echo "recuperçao com media $media";
    }
}

echo "<br>";

$dia = 1; 

switch ($dia) {
    case 1:
        echo "domingo";
        break;
    case 2:     
        echo "segunda";
        break; 
    case 3:
         echo "terça";
        break;  
    case 4:
        echo "quarta";
        break;    
    
    default:
        # code...
        break;
}

echo "<br>";

for ($i=0; $i < ; $i++) { 
    # code...
}

while ($a <= 10) {
    # code...
}

do {
    # code...
} while ($a <= 10);

$nomes = ['fulana'];

?>