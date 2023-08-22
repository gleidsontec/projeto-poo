<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

    
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: -o-linear-gradient(45deg);
            background-image: url(estudio\ de\ musica.png);
            background-color: wheat;


        }

        div{
            background-color: rgba(0, 0 , 0 , 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 100px;
            border-radius: 15px;
            color: white;
           
            
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 100%;
            top: 50%;
            left: 50%;
            


        }

        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 20px;
            color: white;
            font-size: 15px;


        }

        button:hover{
            background-color: deepskyblue;
            cursor: pointer;

        }

    </style>
    <body>
    <div class="container">
        <h1>Cadastre-se</h1>
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
     
           <a href="pagina_inicial.php">cadastrar</a>
            <br>
            <br>

            <a href="login.php">Voltar</
            echo "usuario cadastrado com sucesso" 
        </form>
        
        </form>
        </div> 
    </body>
</html>
