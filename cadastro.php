<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA DE CADASTRO</title>
</head>
<body>
    <style>
        body{
            background-color: wheat;
            background-image: url(estudio\ de\ musica.png);
            justify-items: center;
            align-items: center;
            width: 400px;
            margin: 5%;
            padding-left: 5%;
            margin: auto;
            margin-top: 10%;
            padding-left: 10px;
          
            
        }

        .inicial{
            background-color: white;
          
        }
    

    </style>

    <div class="inicial">
    <h1>CADASTRE-SE</h1>
    <form action="pagina_inicial.php">
            
        <div class="conteudo">
    <form 
            
            <label for="iusername">Nome de usuário:</label><br>
            <input type="text" name="username" id="iusername"><br>
            <br>

            <label for="iemail">E-mail: </label><br>
            <input type="email" name="email"><br>
            <br>

            <label for="ipassword">Senha: </label><br>
            <input type="password" name="password" id="ipassword"><br>
            <br>
     
            <input type="submit" value="Cadastrar">
            <br>
            <br>

            <a href="index.php">Voltar</
           
        </form>
        </div>
        </div>
</body>
</html>