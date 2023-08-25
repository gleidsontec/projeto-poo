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
    .Container{
        width: 100%;
       
    }

    .Voltar{
        background-color: #069;
        position: absolute;
        top: 50%;
        left: 1%;
       
        padding: 10px;
        border-radius: 15px;
    }
    

    </style>
    </head>
<body>
    <h2 class="title">Carrinho com PHP</h2>
    <div class="carrinho-container">
   
    <div class="Container">
        <img src="imagem1.jpg" alt="imagem 1" width="217px"> 
        <img src="imagem2.jpg" alt="imagem 2"width="250px"/>
        <img src="imagem3.jpg" alt="imagem 3"width="250px" 


    </div> 
    <p><br></p>
    <div class="Voltar">
    <a href="pagina_inicial.php">Voltar</a>
    </div>
    

   
    <div class="produto">

    <img src="<?php echo $value['imagem'] ?>" />
    <a href="?adicionar=<?php echo $key ?>"Adicionar ao carrinho!
</a>
    
    </div><br>
    <h1>Estudio</h1>


</body>
</html>



  
    <?php 
    
    ?>
     </div>
     <?php 

     if(isset($_GET['adicionar']))
        //vamos adicionar ao carrinho
        $idProduto = (int) $_GET['adicionar'];
        if(isset($itens['$idProduto'])){
            if(isset($_SESSION['carinho'][$idProduto])){
                $_SESSION['carinho'][$idProduto]['quantidade']++;
            }else{
                $_SESSION['carinho'][$idProduto] = array('quantidade'=>1,'nome'=>$itens[$idProduto]['nome'],'preço'=>$itens[$idProduto]['preço']);
            }
            echo '<script>alert("O item foi adicionado ao carinho.");</sript>';
        }else{
            die('');
        }

      
     
     ?>
     <h2 class="title">Carinho:</h2>
     <?php include('carinho.php'); 
     
     ?>

     <?php 
     foreach($_SESSION['carinho'] as $key => $value) {
        //nome
        //quantidade 
        //preço
        echo '<div class="carrinho-item">';
        echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['Quantidade'].' | Preço: '.($value['Quantidade']*$value['Preço']).'</p';
        echo '<hr>';
        echo '</div>';
     }
     ?>




