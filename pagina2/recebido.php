<!--PARTE 2-->
<?php
require "../estoque/estoqueGeral.php";
if(!isset($_GET["key"])){
    header("location:../pagina1/index.php");
    die;
}

$indice = $_GET["key"];

if(isset($estoqueGeral[$indice])){
    $itemSelect = $estoqueGeral[$indice];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$itemSelect["nome"]?></title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" type="image/png" href="../assets/breshoplogo.png"/>
</head>
<body>
    <header>
        <nav>
        <a href="../pagina1/index.php"><img id="logo" src="../assets/breshoplogo.png" alt="Logo da empresa"></a>
            <form class="search-form" method ="get" action="../pagina1/pesquisa.php">
                <input name="item"required id="searchbar" type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
                <a href="#"></a><img id="conta" src="../assets/usuarioicone.png" alt="userIcon" srcset=""></a>
                <a href="#"></a><img id="conta" src="../assets/roupaicon.png" alt="userIcon" srcset=""></a>
                <a href="#"></a><img id="conta" src="../assets/simbolocompras.png" alt="userIcon" srcset=""></a>
                    
            </form>
        </nav>
    </header>
    <div id="container_compressao">
    <?php
            if(isset($itemSelect)){
            ?>

        <div class="container">
            <img id="image" src=<?=$itemSelect["img"]?>>
            <div class="detalhes">
                <div id="texto">
                    <h1><?=$itemSelect["nome"]?></h1>
                </div>
                <h3><?=$itemSelect["marca"]?></h3>
                <br>
                <?php
                if($itemSelect["desconto"] != false){                
                ?>
                <h3 >R$ <del><?=number_format($itemSelect["preco"],2)?></del></h3>
                <h2 id="preco">R$<?=number_format($itemSelect["desconto"],2)?></h2>
''                <?php
                }else{
                ?>
                <h2 id="preco">R$<?=number_format($itemSelect["preco"],2)?></h2>
                <?php }?>

                <p><?=$itemSelect["descricao"]?></p>
                <div id="botoesPrincipais">
                    <button type="submit">Comprar</button>
                    <button type="submit">Fazer Oferta</button>
                </div>
    
            </div>
    
        </div>
    
        <div id="aux">
            <div class="botao">
    
                <button type="submit">Marca<br><?=$itemSelect["marca"]?></button>
                <button type="submit">Unidades<br><?=$itemSelect["pecasEmEstoque"]?></button>
            </div>
        </div>
    
    </div>
    <?php }else{
        echo "not found";
        }?>
    
<br>
    <h2 id="#h2inicial"> Produtos Relacionados</h2>
    <br>
    <div class="flex-container">
    <?php
    $i = 0;
        foreach($estoqueGeral as $key => $estoqueGeral){
         $i++;   
         if($i % 2 == 0 ){
    ?>
    
        <div class="grid-item"> 
            <a href="recebido.php?key=<?=$key?>"><img width="180" height="180"src="<?=$estoqueGeral["img"]?>" alt="venda de produtos" srcset=""></a>
        </div>
        
    
    <?php
    }
        }
    ?>
    </div>
    <br>
    <h2>Outros produtos</h2>
    <div class="flex-container">
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <!--<div class="grid-item"> </div>-->
    </div>
    <br>
    <h2>Outros produtos</h2>
    <div class="flex-container">
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <div class="grid-item"> </div>
        <!--   <div class="grid-item"> </div>-->
    </div>
    <footer>
        © 2023 Venda de produtos. Todos os direitos reservados.
    </footer>
</body>
</html>
