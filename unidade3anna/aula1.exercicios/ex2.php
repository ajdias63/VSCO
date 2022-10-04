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
    Número:<br/>
        <input type="number" name="num" placeholder="Digite o número"/>
        <br /> <br />

        <input type="submit" value="Enviar">
    </form>

    <?php
    // Entrada de dados
    $n1 = $_GET["num1"];

    // Processamento
    $enviar = $n1;

    // Saída
 echo"<br/>O número informado foi: ".$enviar;
    ?>
</body>
</html>