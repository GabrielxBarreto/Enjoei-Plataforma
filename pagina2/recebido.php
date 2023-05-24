<!--PARTE 2-->
<?php

require "../estoque/estoque_Acessorios.php";
require "../estoque/estoque_Blusas.php";
require "../estoque/estoque_Calcas.php";
require "../estoque/estoque_Sapatos.php";
require "../estoque/estoqueGeral.php";

if(!isset($_GET["key"])){
    header("location:../pagina1/index.php");
    die;
}

$indice = $_GET["key"];

if(isset($estoqueGeral[$indice])){
    $estoqueGeral = $estoqueGeral[$indice];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <nav>
        <a href="../pagina1/index.php"><img id="logo" src="../assets/breshoplogo.png" alt="Logo da empresa"></a>
            <form class="search-form">
                <input required id="searchbar" type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
                <a href="#"></a><img id="conta" src="../assets/usuarioicone.png" alt="userIcon" srcset=""></a>
                <a href="#"></a><img id="conta" src="../assets/roupaicon.png" alt="userIcon" srcset=""></a>
                <a href="#"></a><img id="conta" src="../assets/simbolocompras.png" alt="userIcon" srcset=""></a>
                    
            </form>
        </nav>
    </header>
    <div id="container_compressao">
    <?php
            if(isset($estoqueGeral)){
            ?>

        <div class="container">
            <img id="image" src=<?=$estoqueGeral["img"]?>>
            <div class="detalhes">
                <div id="texto">
                    <h1><?=$estoqueGeral["nome"]?></h1>
                </div>
                <p><?=$estoqueGeral["descricao"]?></p>
                <div id="botoesPrincipais">
                    <button type="submit">Comprar</button>
                    <button type="submit">Fazer Oferta</button>
                </div>
    
            </div>
    
        </div>
    
        <div id="aux">
            <div class="botao">
    
                <button type="submit"><?=$estoqueGeral["marca"]?></button>
                <button type="submit"><?=$estoqueGeral["pecasEmEstoque"]?></button>
            </div>
        </div>
    
    </div>
    <?php }else{
        echo "not found";
        }?>
    
<br>
    <h2 id="#h2inicial">Outros produtos</h2>
    <br>
    <!-- Adicionar as tags a e a tag de imagem -->
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
        <!-- <div class="grid-item"> </div> -->
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
