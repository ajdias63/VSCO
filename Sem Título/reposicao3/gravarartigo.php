<?php
    $titulo = $_POST["titulo"]; 
    $autor = $_POST["autor"];
    $artigo = $_POST["artigo"];
    $foto = $_FILES["foto"];

    // IMPRESSÃO dos dados do arquivo de foto
    echo var_dump($foto);
?>