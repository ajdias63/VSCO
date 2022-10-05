<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faça um script que peça a temperatura em graus Farenheit, transforme e
mostre a temperatura em graus Celsius. •C = (5 * (F-32) / 9) -->
     <form action ="lista8.php" method="get" >
        Digite a temperatura em Farenheit:
        <input type="number" name="temp"/>
        <br /> <br />
        <input type="submit" value="Converter">
     </form>

     <?php
     //Entrada
     $n1 = $_GET["temp"];

     //Processamento
     $temp =  ($n1 - 32 )* 5 / 9;

     //Saída
     echo"<br/> A temperatura em graus Celsius é: ".$temp;
     ?>

</body>
</html>