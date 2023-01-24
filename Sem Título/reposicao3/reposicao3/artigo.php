<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="total">
        <div id="topo">
            <div id="logo">
                <img src="img/logo4.png" alt="logotipo do site">
            </div> <!-- fecha a divisão logotipo-->
                <div id="menu">
                    <a href="index.html">Home</a>
                    <a href="#">Quem Somos</a>
                    <a href="#">Serviços</a>
                    <a href="artigos.php">Artigos</a>
                    <a href="#">Contato</a>
                </div> <!-- fecha menu-->
        </div> <!-- fecha a divisão topo-->
        <div id="banner">
            <img src="img/banner1.png" alt="banner do site">
        </div>
    

        <div id="conteudoartigo">
            <h1>Cadastro de Artigo</h1>
            <form action="gravarartigo.php" method="post" enctype="multipart/form-data">
                Título: <br>
                <input type="text" name="titulo" required="required" id="">
                <br><br>
                Autor: <br>
                <input type="text" name="autor" required="required" id="">
                <br><br>
                Artigo: <br>
                <input type="text" name="artigo" required="required" id="">
                <br><br>
                Foto: <br>
                <input type="file" name="foto" id="">
                <br><br>
                <input type="submit" value="Cadastrar Artigo">
            </form>
        </div>
        <div id="conteudoartigo2">
            <h2>Artigos</h2>
            <?php
            include_once'conexao.php';
            $sql = "select * from artigo";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($result)){
                ?>
                <h4>Autor: <?php echo $row["autor"];?></h4>
                <h4>Título: <?php echo $row["titulo"];?></h4>
                <h4>Artigo: <?php echo $row["artigo"];?></h4>
                <img src="upload/<?php echo $row["foto"]; ?>" alt="">
                <?php
            }
            ?>
        </div>
        
        <div id="rodape">
            Chalés Alto da Serra - Todos os direitos reservados
        </div>
    </div> <!-- fecha a divisão total-->
    
</body>
</html>