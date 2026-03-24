<?php
    function mostrar_array($vetor){
        foreach ($vetor as $valor){
            echo $valor . "<br>";
        }
        echo "<hr>";
      
      
    }
       
    $numero = [1,2,3,4,5];
    $numeros2 = [10,20,30,40,50,60];
    $nomes = ['fulano','resenha','aaaa'];
    
    mostrar_array($numero);
    mostrar_array($numeros2);
    mostrar_array($nomes);

    


?>