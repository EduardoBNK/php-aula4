<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $hoje = date("d/m/Y");
    $agora = date("H:i");
    $hora = date("H");
    echo $hora .'<br>';
    if($hora > 6 && $hora < 13){
        echo "bom dia";
    
    }

    else if($hora > 13 && $hora < 18){
        echo "bom tarde";
    }

    
    else{
        echo "Boa noite";
    }
  
    ?>
</body>
</html>