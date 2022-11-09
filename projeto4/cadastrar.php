<?php include_once'cabecalho.php';?>
    <h1>Cadastro de Clientes<h1>
    <hr>
    <form action="gravar.php" method="post">
        Nome: <br/>
        <input type="text" name="nome" placeholder="Digite o Nome" required/>
        <br/><br/>
        E-mail: <br/>
        <input type="text" name="email" placeholder="Digite o E-mail" required/>
        <br/><br/>
        Telefone: <br/>
        <input type="text" name="telefone" placeholder="Digite o Telefone" required/>
        <br/><br/>
        <input type="submit" value="Cadastrar"/>
<?php include_once'rodape.php';?>
    