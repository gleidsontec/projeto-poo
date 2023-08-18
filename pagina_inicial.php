<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

     <div class="container">

        <h1>Seja bem vindo <?php if (isset($_COOKIE['nome'])) { echo $_COOKIE['nome']; }?>!</h1>
        <h3>Obrigado por nos escolher 
          </h3> 

    </div>

    <div class="container.2">
        <p>O que Deseja fazer?</p>

        <li><a href="alugar_estudio.php">alugar estudio</a></li>
        <br>
        <li><a href="atualizar.php">atualizar cadastro</a></li>
               
    </div>
    <br>
    <a href="index.php">Voltar</

</body>

</html>