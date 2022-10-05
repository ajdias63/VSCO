<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faça um script que calcule a área de um quadrado, em seguida mostre o
    dobro desta área para o usuário-->

    <form action ="lista6.php" method="get" >
        Digite o lado do quadrado:
        <input type="number" name="lado"/>
        <br /> <br />
        <input type="submit" value="Calcular">
    </form>

    <?php

    //Entrada
    $n1 = $_GET["lado"];

    //Processamento
    $multiplicar = $n1*$n1*2;

    //Saída
    echo"<br/> O resultado é: ".$multiplicar;
    ?>
</body>
</html>