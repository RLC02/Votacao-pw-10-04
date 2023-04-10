<?php

    if(isset($_POST['nome'])){
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "Nome: " . $_POST['nome'] . "\n");
    fclose($arquivo);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body style="background-color: <?php  if(isset($_POST['nome'])){echo '#CCCCCC'; }else{echo '#f3f3f3' ;}   ?>">
    <form name="dados_pesssoas" method="POST" action="">
        Nome:<input type="text" name="nome" id="nome"><br>
        <input type="submit" name="acao" id="cadastrar" value="Cadastrar">  
    </form>
</body>
</html>