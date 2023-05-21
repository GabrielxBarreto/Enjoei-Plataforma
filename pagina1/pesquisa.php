<?php
require "../estoque/estoque_Acessorios.php";
require "../estoque/estoque_Calcas.php";
require "../estoque/estoque_Blusas.php";
require "../estoque/estoque_Sapatos.php";
require "../estoque/estoqueGeral.php";
if(!isset($_GET["item"])){
    header("location:index.php");
}else{
    $itemPesquisado = $_GET["item"];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Você pesquisou por: <?=$itemPesquisado?></title>
    <link rel="stylesheet" href="estilo.css">
    <style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    section {
        display: flex;

    }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img id="logo" src="../breshoplogo.png" alt="Logo da empresa">
            </div>
            <form method="get" action="pesquisa.php" class="search-form">
                <input name="item" type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
            </form>
            <img id="conta" src="../usuarioicone.png" alt="userIcon" srcset="">
            <img id="conta" src="../roupaicon.png" alt="userIcon" srcset="">
            <img id="conta" src="../simbolocompras.png" alt="userIcon" srcset="">
        </nav>
    </header>
    <section>
        <h1 id="pesquisaTitle">Você Pesquisou por:<?=$itemPesquisado?> </h1>
    </section>
    <main>

        <?php
        if($itemPesquisado == "Sapato"||$itemPesquisado == "sapato"||$itemPesquisado == "Sapatos"||$itemPesquisado == "sapatos"|| $itemPesquisado == "calçados" || $itemPesquisado == "calcados" || $itemPesquisado =="Calcados" || $itemPesquisado == "Sandalhas"){
            foreach($sapatos as $key => $value){
                echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
            }
        }elseif($itemPesquisado == "Acessórios"||$itemPesquisado == "acc" ||$itemPesquisado == "acessorios"|| $itemPesquisado == "Acessorios" || $itemPesquisado == "Acessorio"){
            foreach($acessorios as $key => $value){
                echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
            }
        }elseif($itemPesquisado == "Calcas"||$itemPesquisado == "Calças"||$itemPesquisado == "calcas"||$itemPesquisado == "calças"){
            foreach($calcas as $key => $value){
                echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
            }
        }elseif($itemPesquisado == "Blusas" || $itemPesquisado == "blusas" || $itemPesquisado == "Blusa"|| $itemPesquisado == "Blusa"||$itemPesquisado == "Camisa" || $itemPesquisado == "Camisas" || $itemPesquisado == "camisa" || $itemPesquisado == "camisas"){
            foreach($blusas as $key => $value){
                echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
            }
        }else{
            //itens gerais:
        foreach($estoqueGeral as $key => $value){
            $details_Nome = explode(" ", $value["nome"]);
            $details_Descricao = explode(" ", $value["descricao"]);
            
                for($i=0; $i<count($details_Nome); $i++){
                    if($itemPesquisado == $details_Nome[$i]){
                        echo "<img width ='200' height='200' class='item'  src='{$value["img"]}'>";
                    }
                }
                for($j=0; $j<count($details_Descricao); $j++){
                    if($itemPesquisado == $details_Descricao[$j]){
                        echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
                        echo $value["descricao"];
    
                    }
                }
           
                if($itemPesquisado == $value["nome"]){  
                    echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
                }elseif($itemPesquisado == $value["preco"]){
                    echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
                }elseif($itemPesquisado == $value["pecasEmEstoque"]){
                    echo "<img width ='200' height='200' class='item' src='{$value["img"]}'>";
                }
            }
            
            
                
            
        }
        
    ?>
    </main>
</body>

</html>