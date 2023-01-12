<?php include_once 'topo.php'; ?>
    <div id= "tela"> 
    <form action="recebe2.php" method="post">
        Nome: <br>
        <input type="text" name="nome"/>
        <br/><br/>
        E-mail:<br>
        <input type="text" name="email"/>
        <br/><br/>
        Telefone:<br>
        <input type="text" name="telefone"/>
        <br/><br/>
        <input type="submit" value="Enviar"/>
    </form>
    <?php 
        if(isset($_GET["msg"])){
            echo $_GET["msg"];
        }
    ?>
    
</body>
</html>