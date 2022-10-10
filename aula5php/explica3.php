<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="explica3.php" method="get">
        Digite o 1ª Número: <br />
        <input type="number" name="n1">
        <br /> <br />
        Digite o 2ª Número: <br />
        <input type="number" name="n2">
        <br /> <br />
        Escolha: <br />
        <select name="operacao">
            <option value="+">Somar</option>
            <option value="-">Subtrair</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        <br /> <br />
        <input type="submit" value="Verificar"> 
    </form>

    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $operacao = $_GET["operacao"];

    if ($operacao == "+") {
      $aux = $n1 + $n2;
      echo"O resultado da soma é: ".$aux;
    } else if ($operacao == "-") {
        $aux = $n1 - $n2;
        echo"O resultado da subtração é: ".$aux;
    } else if ($operacao == "*") {
        $aux = $n1 * $n2;
        echo"O resultado da multiplicação é: ".$aux;
    } else if ($operacao == "/") {
        $aux = $n1 / $n2;
        echo"O resultado da divisão é: ".$aux;
    } else{
        echo"Operação Inválida!";
    }
    
    ?>



</body>
</html>