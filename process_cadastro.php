<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: -o-linear-gradient(45deg);
            background-image: url(estudio\ de\ musica.png);
            background-color: wheat;

        }

        .container{
            background-color: rgba(0, 0 , 0 , 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
            
        }
           
    </style>
<body>
    <div class="container">
    <h1>Usuario já cadastrado</h1>
    <a href="cadastro.php">Voltar</
    </div>
    
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "conexao.php";

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sql = "SELECT id FROM users WHERE email = ?";
        
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows > 0){
        
        session_start();
        $_SESSION['mensagem']= "E-mail já Cadastrado.";
        header("Location: process_cadastro.php");
        
        exit;
        }
    
        $stmt->close();
    

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);
    if ($stmt->execute()){
        session_start();
        $_SESSION['mensagem']= "Usuário Cadastrado com Sucesso";
        header("Location: pagina_inicial.php");
    }else{
        session_start();
        $_SESSION['mensagem']= "Erro ao cadastrar o usuario". $conn->error; 
        
    }
    $stmt->close();
    $conn->close();
}
?>

