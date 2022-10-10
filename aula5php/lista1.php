<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Faça um Programa que pergunte em que turno você estuda. Peça para digitar M-matutino ou V-Vespertino ou N-Noturno. Imprima a mensagem "Bom Dia!",
     "Boa Tarde!" ou "Boa Noite!" ou "Valor Inválido!", conforme o caso.-->

     <form action="lista1.php" method="get">
        Selecione o turno que você estuda: <br />
        <select name="turno">
            <option value="M">Matutino</option>
            <option value="V">Vespertino</option>
            <option value="N">Noturno</option>
        <br /> <br />
        <input type="submit" value="Enviar">
     </form>

     <?php

     $turno = $_GET["turno"];

     if ($turno == "M") {
        echo"Bom Dia!";
     } else if ($turno == "V") {
        echo"Boa Tarde!";
     } else if ($turno == "N") {
        echo"Boa Noite!";
     } else {
        echo"Operação Inválida!";
     }
    
     

     
    ?>
</body>
</html>