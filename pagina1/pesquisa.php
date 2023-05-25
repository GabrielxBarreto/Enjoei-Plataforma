<?php
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
    <title> resultados para: <?=$itemPesquisado?></title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #a-pesquisados{
            margin: 0;
            padding: 0;  
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
  width: 300px;
  height: 300px;
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

.resultado-container .item001:hover {
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
#otherProducts{
    margin-top: 20px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;

}
#otherProducts img{
    margin: 26px;
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
            <a href="#"><img id="conta" src="../assets/usuarioicone.png" alt="userIcon" srcset=""></a>
            <a href="#"><img id="conta" src="../assets/roupaicon.png" alt="userIcon" srcset=""></a>
            <a href="#"><img id="conta" src="../assets/simbolocompras.png" alt="userIcon" srcset=""></a>
        </nav>
    </header><br><br><br><br><br><br><br><br><br><br>
    
    
    <section>
        <br>
        <h1 id="pesquisaTitle">Você Pesquisou por:<?=$itemPesquisado?> </h1>
    </section>
    <div class="resultado-container">
        <?php

        if($itemPesquisado == "Sapato"||$itemPesquisado == "sapato"||$itemPesquisado == "Sapatos"||$itemPesquisado == "sapatos"|| $itemPesquisado == "calçados" || $itemPesquisado == "calcados" || $itemPesquisado =="Calcados" || $itemPesquisado == "Sandalhas"){
            foreach($estoqueGeral as $key => $value){
                if($value["categoria"]== "sapato"){
                    echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'> <img width ='300' height='300'  src='{$value["img"]}'></div></a>";
                }
                
            }
        }elseif($itemPesquisado == "Acessórios"||$itemPesquisado == "acc" ||$itemPesquisado == "acessorios"|| $itemPesquisado == "Acessorios" || $itemPesquisado == "Acessorio"){
            foreach($estoqueGeral as $key => $value){
                if($value["categoria"]== "acessorios"){
                echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300' src='{$value["img"]}'></div></a>";
                }
            }
        }elseif($itemPesquisado == "Calcas"||$itemPesquisado == "Calças"||$itemPesquisado == "calcas"||$itemPesquisado == "calças"){
            foreach($estoqueGeral as $key => $value){
                if($value["categoria"]== "calcas"){
                echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300' src='{$value["img"]}'></div></a>";
                }
            }
        }elseif($itemPesquisado == "Blusas" || $itemPesquisado == "blusas" || $itemPesquisado == "Blusa"|| $itemPesquisado == "Blusa"||$itemPesquisado == "Camisa" || $itemPesquisado == "Camisas" || $itemPesquisado == "camisa" || $itemPesquisado == "camisas"){
            foreach($estoqueGeral as $key => $value){
                if($value["categoria"]== "blusa"){
                echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300'  src='{$value["img"]}'></div></a>";
                }
            }
        }else{
            //itens gerais:
        foreach($estoqueGeral as $key => $value){
            $details_Nome = explode(" ", $value["nome"]);
            $details_Descricao = explode(" ", $value["descricao"]);
            if(true){
                for($i=0; $i<count($details_Nome); $i++){
                    if($itemPesquisado == $details_Nome[$i]){
                        echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300'   src='{$value["img"]}'></div></a>";
                    }
                }
                for($j=0; $j<count($details_Descricao); $j++){
                    if($itemPesquisado == $details_Descricao[$j]){
                        echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300'  src='{$value["img"]}'></div></a>";
                        //echo $value["descricao"];
    
                    }
                }
           
                if($itemPesquisado == $value["nome"]){  
                    echo "<a href='../pagina2/recebido.php?key={$key}'<div class='item001'>><img width ='300' height='300'  src='{$value["img"]}'></div></a>";
                }elseif($itemPesquisado == $value["preco"]){
                    echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300'  src='{$value["img"]}'></div></a>";
                }elseif($itemPesquisado == $value["pecasEmEstoque"]){
                    echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300'  src='{$value["img"]}'></div></a>";
                }
            }else{
                echo "<div class='item> Nada encontrado </div>";
            }
            }
        }
    
        
    ?>
    

            
    
            
            
    </div>
    <div class="recomendados02">
        <p>RECOMENDADOS</p>
    </div>
        <div id="otherProducts">   
        <?php
        foreach($estoqueGeral as $key => $viewGeral){
            echo "<a href='../pagina2/recebido.php?key={$key}'><div class='item001'><img width ='300' height='300'class='item01'  src='{$viewGeral["img"]}'></div></a>";
        }
        ?>
         </div> 
</body>

</html>
