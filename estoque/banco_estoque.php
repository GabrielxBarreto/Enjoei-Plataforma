<?php
    require "/estoque/estoque_Acessorios.php";
    require "/estoque/estoque_Blusas.php";
    require "/estoque/estoque_Calcas.php";
    require "/estoque/estoque_Sapatos.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bloco_1{
            background-color: purple;
        }
        img{
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>
    <?php echo "<pre>";
    echo "<h1>Lista de estoque</h1>";
    echo"<h2>Blusas</h2>";
    foreach($blusas as $key => $product){
        echo "<h3> id:#00{$key} </h3>";
        echo "<li>Nome :{$product['nome']}</li>";
        echo "<li>Preço :{$product['preco']}</li>";
        echo "<li>Desconto :{$product['desconto']}</li>";
        echo "<li>Descrição :{$product['descricao']}</li>";
        echo "<li>Quantidade de Estoque :{$product['pecasEmEstoque']}</li>";
        echo "<img src={$product['img']}>";
        echo"<hr>";
    }
    $i = 0;// indicie que vai ajudar na hora de por o display grid pra funcionar
    echo"<h2>Calças</h2>";
    foreach($calcas as $key => $product){
        $i++;
        echo "<p class = bloco_{$i}>$i</p>";// aplicação da classe que (display grid por exemplo)
        echo "<h3> id:#00{$key} </h3>";
        echo "<li>Nome :{$product['nome']}</li>";
        echo "<li>Preço :{$product['preco']}</li>";
        echo "<li>Desconto :{$product['desconto']}</li>";
        echo "<li>Descrição :{$product['descricao']}</li>";
        echo "<li>Quantidade de Estoque :{$product['pecasEmEstoque']}</li>";
        echo"<hr>"; 
    }
    echo"<h2>Acessórios</h2>";
    foreach($acessorios as $key => $product){
        echo "<h3> id:#00{$key} </h3>";
        echo "<li>Nome :{$product['nome']}</li>";
        if($product['desconto'] == false){
            echo "<li>Preço :R$ {$product['preco']}</li>";
        }else{
            echo "<li>Preço :R$ <del>{$product['preco']}</del></li>";
            echo "<li>Desconto :R$ {$product['desconto']}</li>";
        }
        
        
        echo "<li>Descrição :{$product['descricao']}</li>";
        echo "<li>Quantidade de Estoque :{$product['pecasEmEstoque']}</li>";
        echo "<img src={$product['img']}>";
        echo"<hr>";
    }
    echo"<h2>Calçados</h2>";
    foreach($sapatos as $key => $product){
        echo "<h3> id:#00{$key} </h3>";
        echo "<li>Nome :{$product['nome']}</li>";
        echo "<li>Preço :{$product['preco']}</li>";
        echo "<li>Desconto :{$product['desconto']}</li>";
        echo "<li>Descrição :{$product['descricao']}</li>";
        echo "<li>Quantidade de Estoque :{$product['pecasEmEstoque']}</li>";
        echo"<hr>";
    }
    
    echo"</pre>";
    ?>
</body>
</html>