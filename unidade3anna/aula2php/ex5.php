<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Digite a sua data de Nascimento: <br/>
        <input type="text" name="nascimento" />
        <br/>
        <input type="submit" value="Calcular Idade"/>
</body>

<?php
    $data = $_GET["nascimento"];
    $calculo = 2022 - $data;

    echo"<br />Sua Idade é: ".$calculo. "<br /> Você nasceu em: " .$data;
?>
</html>