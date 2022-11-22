<?php include_once 'cabecalho.php'; ?>
<script>
    function excluir(id) {
        if(confirm('Deseja realmente excluir?')){
            location.href='excluir.php?id='+id;
        }
    }
    </script>
    <h1> Consultar Cliente</h1>
    <hr>
    <h4> Consulta por nome:</h4>
    
    <?php

        //pegar o campo nome da tela
        $nome =$_GET["nome"];
        //abrir a conexão com o banco
        include_once './conexao.php';
        //montar a instrução sql para buscar a informação
       // $sql = "select * from cliente where nome like '".$nome."%'";
        //mysqli_query() -> executa a instrução no banco
        $sql = "select * from cliente";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            ?>

 

 
 <table class=" table"> 
    <tr>
        <td> Nome</td>
        <td> Email</td>
        <td> Telefone</td>
        <td> Data de Cadastro</td>
        <td> Editar </td>
        <td> Excluir </td>
    </tr>

   
    
<?php 
while ($row = mysqli_fetch_array($result)){

    ?>

    <tr>
        <td> <?php echo $row ["nome"]; ?></td>
        <td> <?php echo $row ["email"]; ?></td>
        <td> <?php echo $row ["telefone"]; ?></td>
        <td> <?php echo $row ["dtcadastro"]; ?></td>
        <td><a href ="editar.php?id=<?php echo $row ["idcliente"] ?>"> <img src="./img/editar.png"></a></td>
        <td><a href="#" onclick="excluir(<?php echo $row ['idcliente']; ?>)"><img src="./img/excluir.png"></a></td>
    </tr>

    <?php
}


}

include_once 'rodape.php'; ?>