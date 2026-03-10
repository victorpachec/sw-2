<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>

<body>
    <?php
    $nome = htmlspecialchars($_POST['nome']); 
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $ano_atual = date('Y');
    $ano = $ano_atual - $idade;
    echo $ano_atual;

    ?>
    <p>O nome é: <?php echo $nome; ?> </p>
    <p>O email é: <?php echo $email; ?> </p>
    <p>A idade é: <?php echo $idade; ?> </p>


    <p>Ah então você nasceu no ano <?php echo $ano; ?></p>

    <?php
    if ($idade <18) {
        echo "Você é menor de idade: $idade" ; 
    } else {    
        echo "Você é maior de idade: $idade";
    }
    ?>

   

</body>

</html>