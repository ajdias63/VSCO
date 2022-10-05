<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faça um script que converta metros para centímetros-->
    <form action ="lista5.php" method="get" >
        Digite o valor do comprimento em metro:
        <br/>  
        <input type="number" name="metro"/>
        <br /> <br/>
        <input type="submit" value="Converter">
    </form>


    <?php
    //Entrada
    $metro = $_GET["metro"];

    //Processamento
    $centimetro = $metro * 100;

    //Saída
    echo "A quantidade de metros em cm é:".$centimetro;
    ?>
</body>
</html>