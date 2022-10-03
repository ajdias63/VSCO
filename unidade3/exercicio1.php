<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem Vindo ao Programador Web - Mulheres TECH!</h1>
    <?php
    echo"<h1>Bem Vindo ao Programador Web - Mulheres TECH!</h1>"; 
    // comentário de linha
    // onde a cada linha
    // tenho que colocar um barra barra

    /* comentário de bloco
    onde posso pular de linha
    sem ficar escrevendo barra barra */

    // declaração de variaveis
    $nome = "Anna Julia";
    $nome = strtoupper($nome);
    $idade = 22;
    $salario = 5600.;
    echo"Nome: ".$nome;
    echo"<br/>Idade: ".$idade;   
    echo"<br/>Sálario: ".$salario;
    ?>
</body>
</html>