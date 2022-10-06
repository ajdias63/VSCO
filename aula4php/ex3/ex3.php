<?php
$idade = $_GET["idade"];
if($idade < 16){
    echo"Não Pode Votar...";
}else if($idade <18){
    echo"Voto Facultativo...";
}else if($idade <=70){
    echo"Voto Obrigatório...";
}else{
    echo"Voto Facultativo...";
}

?>