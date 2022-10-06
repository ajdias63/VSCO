<?php
$peixe = $_GET["peixe"];
if($peixe <= 50){
    echo"Sem Taxa...";
}else {
    $extra = ($peixe - 50)*4;
    echo"O valor da multa é: ".$extra;
}
?>