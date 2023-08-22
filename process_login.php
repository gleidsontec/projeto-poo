<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "conexao.php";

        $usernameOrEmail = $_POST["username"];
        $password = $_POST["password"];
        
        
        $isEmail = filter_var($usernameOrEmail, FILTER_VALIDATE_EMAIL);
        
        if($isEmail){
            $sql = "SELECT id, username, password FROM users WHERE email = ?";
        }else{
            $sql = "SELECT id, username, password FROM users WHERE username = ?"; 
        }
        if($stmt->num_rows == 1){
        $stmt->bind_result($userId, $username, $hashedpassword);
        $stmt->fetch();

        if(password_verify($password, $hashedpassword)){
            $_SESSION["user_id"] = $userId;
            $_SESSION["username"] = $username;
            header("Location: pagina_inicial.php");
            }else{
                $_SESSION["mensagem"] = "Senha Incorreta";
                header("Location: pagina_inicial.php");
                echo "seja bem vindo";
            }
        }else{
            $_SESSION["mensagem"] = "Usuário não Encontrado";
            header("Location: process_login.php");
            echo "usuario não encontrado";
        }
        $stmt->close();
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAI FORA INTRUSO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <div>
            <h1>Voce e intruso!</h1> <br>
            <p>Faca login para continuar</p>
            <a href="login.php">
                <div class="botao">Login</div>
            </a>
        </div>

</body>

</html>
