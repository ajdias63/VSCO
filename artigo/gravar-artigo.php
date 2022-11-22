<?php

// pegar os dados da tela

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$artigo = $_POST["artigo"];
$foto = $_FILES["foto"];

$ext = explode(".",$foto["name"]);
$ext = array_reverse($ext);
$ext = $ext[0];

if (($ext != "jpg") && ($ext != "png") ($ext != "gif")){
    echo "Arquivo Inválido!";
}elseif($foto["size"] > 1024 *8){
    echo"Tamanho excedido!";
}else{

}