<?php
// PASSO - 1 Pegar os dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date["Y-m-d"]; // padraão do banco

// PASSO - 2 Montar a conexão com o banco de dados
include_once'./conexao.php';

//PASSO - 3 Montar o sql de gravar no banco


?>