<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="lista1.php" method="get" >
        Digite o Valor do Raio:
        <input type="number" name="raio"/>
        <br /> <br />
        <input type="submit" value="Calcular Raio">
    </form>

<?php
 //Entrada
 $raio = $_GET["raio"];

 //Processamento
 //area = pi * r ao quadrado 
 $m_pi = 3.1415;
 //area = $m_pi * $raio * $raio;
 $area = $m_pi * $raio**2;
 $perimetro = 2* $m_pi * $raio;

 //Saída
 echo "<br/> O valor da área é: ".$area;
 echo "<br/> O valor do Perímetro do raio é: ".$perimetro;


?>
</body>
</html>