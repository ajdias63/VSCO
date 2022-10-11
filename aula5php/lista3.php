<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form action="lista3.php" method="get">
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
     if ($n1 * $n2 <= "900") {
        $bruto = $n1 * $n2;
        $liquidoa = $bruto - 1.10;
        $liquidob = $bruto - 1.11;
        $inss = $bruto - $liquidoa;
        $fgts = $bruto - $liquidob;
        $liquido = $bruto - $inss;
        echo"<br /> Salário Bruto: ".$bruto;  
        echo"<br /> Imposto de Renda: Isento";
        echo"<br /> INSS: ".$inss;
        echo"<br /> FGTS: ".$fgts;
        echo"<br /> Salário Líquido: ".$liquido;
   
    }else if ($n1 * $n2 > "900" && $bruto <="1500") {
        $bruto = $n1 * $n2;
        $liquidoa = $bruto * 1.10;
        $liquidob = $bruto * 1.11;
        $liquidoc = $bruto * 1.05;
        $fgts = $liquidob - $bruto;
        $inss = $liquidoa - $bruto;
        $ir = $liquidoc - $bruto;
        $total = $inss + $ir;
        $liquido = $bruto - $total;
        echo"<br /> Salário Bruto: ".$bruto;  
        echo"<br /> Imposto de Renda: ".$ir;
        echo"<br /> INSS: ".$inss;
        echo"<br /> FGTS: ".$fgts;
        echo"<br /> Total de Descontos: ".$total;
        echo"<br /> Salário Líquido: ".$liquido;
    }
     ?>
</body>
</html>