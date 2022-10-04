<!-- Faça um programa em que o usuário informe dois números e o programa faça a soma desses números.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="get">
        Primeiro Número:<br/>
        <input type="number" name="num1" placeholder="Digite o 1ª numero"/>
        <br /> <br />
        Segundo Número:<br/>
        <input type="number" name="num2" placeholder="Digite o 2ª numero"/>
        <br /> <br />

        <input type="submit" value="CALCULAR">
    </form>

<?php
// Entrada de dados
$n1 = $_GET["num1"];
$n2 = $_GET["num2"];

// Processamento
$somar = $n1 + $n2;
$subtrair = $n1 - $n2;
$multiplicar = $n1 * $n2;
$dividir = $n1 / $n2;

// Saída
echo"<br/>A soma é: ".$somar;
echo"<br/>A subtração é: ".$subtrair;
echo"<br/>A multiplicação é: ".$multiplicar;
echo"<br/>A divisão é: ".$dividir;





?>
</body>
</html>