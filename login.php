<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
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
            padding: 80px;
            border-radius: 15px;
            color: white;
            
            
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;


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
            <h1>login</h1>
        <form action="pagina_inicial.php" method="POST">
            <input type="text" placeholder="nome">
            <br><br>
            <input type="password" placeholder="Senha">
            <br><br>
           <button>Enviar</button>
           
           
            
            <Br></Br>

            Não tem uma conta? <a href="cadastro.php">cadastre-se aqui</a>

           
            
           
            </form>
        </div>
    </body>


</html>
