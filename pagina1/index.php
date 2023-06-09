<?php

require "../estoque/estoqueGeral.php";

$sorter =  rand(1, 5);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<link rel="icon" type="image/png" href="../assets/breshoplogo.png"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breshop - Venda de produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body onload="carrosel(), carroselDeDescontos()">

    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img id="logo" src="../assets/breshoplogo.png" alt="Logo da empresa"></a>
            </div>
            <form method="get" action="pesquisa.php" class="search-form">
                <input required name="item" type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
            </form>
            </form>
            <a href="../cadastro/cadastro.php"><img id="conta" src="../assets/usuarioicone.png" alt="userIcon" srcset=""></a>
            <a href="#"><img id="conta" src="../assets/roupaicon.png" alt="userIcon" srcset=""></a>
            <a href="#"><img id="conta" src="../assets/simbolocompras.png" alt="userIcon" srcset=""></a>
        </nav>
    </header>
    <br>
    <div class="banner-content">
    <div class="banner">
        <h3>PROMOÇÕES</h3>
        <br>
        <h2><p id="desconto">10%</p></h2>
        <h2>OFF</h2>
    </div>
    <div class="textopromocional">
        
    </div>
    </div>
    <br>

    <section>
        <div class="product">
            <h3>Blusas</h3>
        </div>
        <div class="product">
            <h3>Calças</h3>
        </div>
        <div class="product">
            <h3>Sapatos</h3>
        </div>
        <div class="product">
            <h3>Acessórios</h3>
        </div>
    </section>

    <main>

        <br> <br>
        <div class="desconto">
            <p>DESCONTOS</p>
        </div>


        <div class="grid-container">
            <?php
            $i = 0;


            foreach ($estoqueGeral as $key => $auxiliar_acessorios) {
                if ($auxiliar_acessorios["desconto"] != false) {
                    $precoFormat = number_format($auxiliar_acessorios["preco"],2);
                    if ($i <= 9) {
                        if ($i == 3 || $i == 6) {
                            echo "
                                    <div class='grid-item grid-item{$i}'>
                                    <a href='../pagina2/recebido.php?key={$key}'> 
                                        <img width='490' height='490' src={$auxiliar_acessorios["img"]}>
                                            <div class='grid-item-preco'>
                                               R$ {$precoFormat}
                                            </div>
                                    </div>
                                </a>";
                        } else if ($i == 8) {
                            echo "<div class='grid-item{$i}'><a href='../pagina2/recebido.php?key={$key}'><img width='360' height='500' src={$auxiliar_acessorios["img"]}></img></a></div>";
                        } elseif ($i == 0) {
                        } else if ($i != 3 && $i != 6 && $i != 8) {
                            echo "<div class='grid-item{$i}'><a href='../pagina2/recebido.php?key={$key}'><img width='230' height='230' src={$auxiliar_acessorios["img"]}></img></a></div>";
                        }
                        $i++;
                    } else {
                        break;
                    }
                }
            }
            ?>
        </div>

        <div class="marca">
            <div class="marca-elementos">
                <h3 id="marca-id">NIKE</h3>
            </div>
        </div>


        <div class="maisvendidos">
            <p>MAIS VENDIDOS</p>
        </div>
        <div class="container-vendidos">
            <?php
            $j = 0;
            foreach ($estoqueGeral as $key => $maisVendidos) {
                if ($maisVendidos["categoria"] == "mais vendido") {
                    if ($j <= 6) {
                        $j++;
                        if ($j == 3) {
                            
                            echo "<div class='item{$j}'><a href='../pagina2/recebido.php?key={$key}'><img width='330' height='500' src='{$maisVendidos['img']}'></a></div>";
                            
                        } else {
                            echo "<div class='item{$j}'><a href='../pagina2/recebido.php?key={$key}'><img width='235' height='235' src='{$maisVendidos['img']}'></a></div>";
                        }
                    } else {
                        break;
                    }
                }
            }

            ?>


        </div>
        <div class="recomendados">
            <p>RECOMENDADOS </p>
        </div>

        <div class="recomendados-container">
            <div class="item-1"> item 1 </div>
            <?php
            $k = 0;

            foreach ($estoqueGeral as $key => $aux_blusas) {
                if ($aux_blusas["categoria"] == "recomendados") {
                    if ($k <= 14) {

                        $k++;
                        if ($k == 4) {
                            echo "<div class='item-{$k}'><a href='../pagina2/recebido.php?key={$key}'><img width ='430' height ='420' src='{$aux_blusas['img']}'> </a></div>";
                        }elseif($k == 5){
                            echo "<div class='item-{$k}'><a href='../pagina2/recebido.php?key={$key}'><img width ='430' height ='680' src='{$aux_blusas['img']}'> </a></div>";
                        }elseif($k == 7){
                            echo "<div class='item-{$k}'><a href='../pagina2/recebido.php?key={$key}'><img width ='430' height ='450' src='{$aux_blusas['img']}'> </a></div>";
                        }elseif($k == 8){
                            echo "<div class='item-{$k}'><a href='../pagina2/recebido.php?key={$key}'><img width ='200' height ='380' src='{$aux_blusas['img']}'> </a></div>";
                        }elseif($k == 9){
                            echo "<div class='item-{$k}'><a href='../pagina2/recebido.php?key={$key}'><img width ='430' height ='430' src='{$aux_blusas['img']}'> </a></div>";
                        }else {
                            echo "<div class='item-{$k}'><a href='../pagina2/recebido.php?key={$key}'><img width = '200' height = '195' src='{$aux_blusas['img']}'></a></div>";
                        }
                    } else {
                        break;
                    }
                }
            }

            ?>
        </div>
         </div>
            <div class="infantil"> 
                <p> INFANTIL</p>
        </div>
        <div class="infantil-container"> 
        <?php
            $w = 0;

            foreach ($estoqueGeral as $key => $aux_blusas) {
                if ($aux_blusas["categoria"] == "infantil") {
                    if ($w < 7) {

                        $w++;
                        if ($w == 3) {
                            echo "<div class='item{$w}'><a href='../pagina2/recebido.php?key={$key}'><img width ='330' height ='490' src='{$aux_blusas['img']}'> </a></div>";
                        }else{
                            echo "<div class='item{$w}'><a href='../pagina2/recebido.php?key={$key}'><img width ='230' height ='230' src='{$aux_blusas['img']}'> </a></div>";
                        }
                }
            }
        }

            ?>
    </div>
    </main>

    <footer>
        <p>© 2023 Venda de produtos. Todos os direitos reservados.</p>
    </footer>
    <script src="../script.js"></script>
    <script src="../script2.js"></script>
</body>

</html>
