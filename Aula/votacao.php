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
  
        function Result(){
        
          $arquivo = "dados.txt"; 
          $contAz = fopen($arquivo , 'r');
          $textoAz = fread($contAz, filesize($arquivo));
          $azul = substr_count( ' '.$textoAz.' ', 'Voto: azul' );
          
          $arquivo = "dados.txt"; 
          $contVer = fopen($arquivo , 'r');
          $textoVd = fread($contVer, filesize($arquivo));
          $verde = substr_count( ' '.$textoVd.' ', 'Voto: verde' );
         

         if($azul > $verde){
          $arquivo = fopen("dados.txt", "a");
          fwrite($arquivo, "O ganhador da votação é: Azul". "\n");
          fclose($arquivo);
          $azul++;

        }else{
          if($verde > $azul){
            $arquivo = fopen("dados.txt", "a");
            fwrite($arquivo, "O ganhador da votação é: Verde". "\n");
            fclose($arquivo);
            $verde++;
        }
      }
    }
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['Resultado']))
    {
    Result();
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
      <input type="radio" id="Escolha1" name="escolha1" value="azul" />
      <label for="Escolha1">Azul</label>
      </div>
      <div> 
      <input type="radio" id="Escolha2" name="escolha2" value="verde" />
      <label for="Escolha2">Verde</label>
    </div>
      <button type="submit">Votar</button>
    </form>
    <form action="" method="post">
    <input type="submit" name="Resultado" value="Resultado" />
    </form>
   
</body>
</html>