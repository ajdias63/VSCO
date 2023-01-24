<?php
$titulo = $_POST["titulo"];
$autor =$_POST["autor"];
$artigo =$_POST["artigo"];
$foto =$_FILES["foto"];

//IMPRESSÃO dos dados do arquivo de foto
//echo var_dump($foto);
/*array(6) {
     ["name"]=> string(39) "banner alongamento-unhas-durar-mais.jpg"
     ["full_path"]=> string(39) "banner alongamento-unhas-durar-mais.jpg" 
     ["type"]=> string(10) "image/jpeg"
     ["tmp_name"]=> string(24) "C:\xampp\tmp\php48B7.tmp"
     ["error"]=> int(0) 
     ["size"]=> int(184289) }*/
                                            //texto.doc  
     $ext = explode(".",$foto["name"]);//[nome][extensão]

                                      //doc. texto
     $ext = array_reverse($ext); //[extensão][nome]
     $ext = $ext[0];
     

     if ($ext != 'gif'&& $ext !='png' && $ext !='jpg' && $ext != 'jpeg') {
        echo"tipo de arquivo inválido"; // ||diferente
    }


?>