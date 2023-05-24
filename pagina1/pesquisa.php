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
  
    .resultado-container {
  display: flex;
  flex-wrap: wrap;
  align-items:center;
  padding-left:45px;
}

.resultado-container .item001 {
  width: 170px;
  height: 170px;
  background: linear-gradient(#ffe4c4, #c6b792, #c6b792);
  margin: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
 border-radius:5px;
 box-sizing: border-box;
    box-shadow: 0 7px 10px rgba(1, 0, 2, 0.1);
    transition: box-shadow 0.3s ease;
}

.resultado-container .item00:hover {
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.2);
    
}
.resultado-container {
  display: flex;
  flex-wrap: wrap;
  align-items:center;
  padding-left:45px;
}



.recomendados02 {
margin-top:80px;
background: linear-gradient(#ffe4c4, #c6b792, #c6b792);
text-align: center;
padding-left: 190px;
padding-right:190px;

height: 100px; 
display: flex;
justify-content: center;
align-items: center;

box-shadow: 0 7px 6px rgba(0, 0, 0, 0.1);
box-sizing: border-box;
 transition: box-shadow 0.3s ease;
}
.recomendados02:hover {
    box-shadow: 4px 8px 12px rgba(0, 0, 0, 0.2);
}
.recomendados02  p {
    margin: 0;
    font-size: 24px;
    color: #333;
    text-align: center;
    font-size: 80px;
}
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
            <a href="index.php"><img id="logo" src="../assets/breshoplogo.png" alt="Logo da empresa"></a>
            </div>
            <form method="get" action="pesquisa.php" class="search-form">
                <input required name="item" type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
            </form>
            <a href="#"><img id="conta" src="../usuarioicone.png" alt="userIcon" srcset=""></a>
            <a href="#"><img id="conta" src="../roupaicon.png" alt="userIcon" srcset=""></a>
            <a href="#"><img id="conta" src="../simbolocompras.png" alt="userIcon" srcset=""></a>
        </nav>
    </header><br><br><br><br><br><br><br><br><br><br>
    
    
    <section>
        <br>
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
            if(true){
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
            }else{
                echo "<div class='item> Nada encontrado </div>";
            }
            }
        }
    
        
    ?>
    

            <h1> RESULTADOS PARA (variavel_php)</h1><br>
        <div class="resultado-container">
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>  
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
            <div class="item001"> item1</div>
    </div>
    <div class="recomendados02">
        <p>RECOMENDADOS</p>
        <div>

     
    </main>
</body>

</html>
