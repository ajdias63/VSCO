<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--.Faça um script que pergunte quanto você ganha por hora e o número de
horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido
mês. -->

    <form action="lista7.php" method="get">
        Quanto você ganha por hora: <br />
        <input type="number" name="num1" placeholder="Digite o valor"/>
        <br /> <br />
        Quantas horas por mês você trabalha: <br />
        <input type="number" name="num2" placeholder="Digite as horas"/>
        <br /> <br/>
        <input type="submit" value="Calcular">
    </form>

    <?php
    //Entrada
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];

    //Processamento
    $multiplicar = $n1 * $n2;

    //Saída
    echo"O salário do mês é: ".$multiplicar;
?>

</body>
</html>