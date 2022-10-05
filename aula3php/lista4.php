<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Faça um script que peça as 3 notas de um aluno e mostre a média -->

    <form action="lista4.php" method="get">

        Primeira Nota: <br />
        <input type="number" name="num1" placeholder="Digite a 1ª Nota"/>
        <br /> <br />
        Segunda Nota: <br />
        <input type="number" name="num2" placeholder="Digite a 2ª Nota"/>
        <br /> <br/>
        Terceira Nota: <br />
        <input type="number" name="num3" placeholder="Digite a 3ª Nota"/>
        <br /> <br/>

        <input type="submit" value="Calcular"/>
        
    </form>

    <?php

    //Entrada
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    $n3 = $_GET["num3"];

    //Processamento
    $soma = $n1 + $n2 + $n3;
    $media = $soma / 3;


    //Saída
    echo"A média é: ".$media;

    ?>
    
</body>
</html>