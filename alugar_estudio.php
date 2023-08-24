<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinhos de Compras</title>

<title>Carrinho de compras PHP</title>
<style type="text/css">

    h2.title{
        background-color:#069;
        width:100%;
        padding:20px;
        text-align: center;
        color:white;
    }

    .carrinho-container{
        display:flex;
        margin-top:10px;

    }
    .produto{
        width:33.3%;
        padding: 0 30px;
    }
    .produto img{
        max-width: 100%;

    }
    .produto a{
        display: block;
        width:100%;
        padding:10px;
        color:white;
        background-color:#5fb382;
        text-align: center;
        text-decoration: none;
    }
    .carrinho-item{
        max-width: 1200px;
        margin:10px auto;
        padding-bottom: 10px

      
    }
    .carrinho-item p{
        font-size:16px;
        color:black;
    }

    </style>
    </head>
<body>
    <h2 class="title">Carrinho com PHP</h2>
    <div class="carrinho-container">

    <?php 
    $itens = array(['nome' =>'curso 1','imagem' =>'imagem1.jpg','preço'=>'200'], ['nome' =>'curso 2','imagem' =>'imagem2.jpg','preço'=>'400']);
    
    foreach ($itens as $key => $value) {
       
    }
    ?>
    <div class="produto">

    <img src="<?php echo $value['imagem'] ?>" />
    <a href="?adicionar=<?php echo $key ?>"Adicionar ao carrinho!</a>
    </div>
  
    <?php 
    
    ?>
     </div>
     <?php 

     if(isset($_GET['adicionar'])){
        $idProduto = (int) $_GET['adicionar'];
        if(isset($itens[$idProduto]))

      
     
     ?>


 
    
</body>
</html>
