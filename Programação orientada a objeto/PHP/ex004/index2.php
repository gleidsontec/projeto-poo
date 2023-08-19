<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores lógicos</title>
</head>
<body>
    <p> 
        and (e): o resultado verdadeiro só será obtido se ambos os dados forem verdadeiros.
        or(ou): O resultado verdadeiro só será obtido quando pelo menos um dos dados for verdadeiro.
        !(não): o resultado verdadeiro só será obtido se o valor do dado for falso
    </p>
    <?php
    $bool1 = true;
    $bool2 = false;
    $bool3 = true;

    if($bool1 and $bool2){
        echo "verdadeiro"; 
    } else {
        echo "falso";


    }


    

    ?>
</body>
</html>