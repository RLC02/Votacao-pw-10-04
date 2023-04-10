<?php

    if(isset($_POST['escolha1'])){
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "Voto: " . $_POST['escolha1'] . "\n");
    fclose($arquivo);
    }else{
        if(isset($_POST['escolha2'])){
            $arquivo = fopen("dados.txt", "a");
            fwrite($arquivo, "Voto: " . $_POST['escolha2'] . "\n");
            fclose($arquivo);
        }

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
<body>
    <form name="Votação" method="POST" action="">
    <div>
      <input type="radio" id="Escolha1" name="escolha1" value="verde" />
      <label for="Escolha1">Azul</label>

      <input type="radio" id="Escolha2" name="escolha2" value="azul" />
      <label for="Escolha2">Verde</label>
    </div>
      <button type="submit" >Submit</button>
    </form>
</body>
</html>