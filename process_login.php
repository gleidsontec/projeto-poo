<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
        include "conexao.php";

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "SELECT id FROM users WHERE username= ?";
        
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows == 1){
        
        session_start();
        $_SESSION['mensagem']= "E-mail já Cadastrado.";
        header("Location: process_cadastro.php");
        
        exit;
        }
    
        $stmt->close();

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        
        if($stmt->num_rows == 1){
            $stmt->bind_result( $username, $password);
            $stmt->fetch();
            
            if($password == $password){
                $_SESSION["userpassword"] = $userpassword;
                $_SESSION["username"] = $username;
                header("Location: pagina_inicial.php");
                }else{
                    $_SESSION["mensagem"] = "Senha Incorreta";
                    header("Location: login.php");
                }
            }else{
                $_SESSION["mensagem"] = "Usuário não Encontrado";
                header("Location: login.php");
            }
            $stmt->close();
            $conn->close();


   