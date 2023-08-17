<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $hostname = "localhost";    
    $username = "gleidsonbr"; 
    $password = "gleidsonamaral2005"; 
    $dbname = "estudio"; 

    if (mysqli_connect_errno()){
        die("banco não conectado " . mysqli_connect_error());

    }else{
        echo"conexão realizada ";
    }
?>

</body>
</html>