<?php 
    //Mysqli mysql improved
    //definir as informações de acesso ao database (banco de dados)

    $hostname = "localhost"; //endereço do servidor     
    $username = "gleidsonbr"; //nome de usúario 
    $password = "gleidsonamaral2005"; //senha do usuario
    $dbname = "lojinha"; //name do banco de dados

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if (mysqli_connect_errno()){
        die("erro ao conectar ao banco de dados: " . mysqli_connect_error());

    }else{
        echo"conexão realizada com sucesso";
    }

?>