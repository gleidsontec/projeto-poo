<?php 
    $hostname = "localhost";    
    $username = "root"; 
    $password = ""; 
    $dbname = "estudio"; 

    
    $conexao = mysqli_connect($hostname, $username, $password, $dbname);

    
    if (mysqli_connect_errno()){
        die("banco não conectado " . mysqli_connect_error());
    }else{
        echo"conexão realizada ";
    }
?>