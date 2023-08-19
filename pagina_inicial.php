<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>

      
       body{
        background-color: wheat;
        background-image: url(estudio\ de\ musica.png);
        margin-right: 20%;
        padding: 10px;
        padding-right: 10%;
        padding-left: 50px;
        width: 400px;
        margin-top: 5%;
        margin-left: 30%;
        margin: auto;
       }
       
       .conteudo{
            background-color: white;
            padding: 10px;
            margin: 5%;
            padding-left: 5%;
       }
           
        

    </style>
         <div class="conteudo">
        <div class="container">
        <h1>Seja bem vindo <?php if (isset($_COOKIE['nome'])) { echo $_COOKIE['nome']; }?>!</h1>
        <h3>Obrigado por nos escolher 
          </h3> 

    

       
        <p>O que Deseja fazer?</p>

        <li><a href="alugar_estudio.php">alugar estudio</a></li>
        <br>
        <li><a href="atualizar.php">atualizar cadastro</a></li>
               
       
    <br>
    <a href="index.php">Voltar</

    </div>
    </div>

</body>

</html>