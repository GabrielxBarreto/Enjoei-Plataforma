<?php

require "../estoque/estoqueGeral.php";

$sorter =  rand(1, 5);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body onload="carrosel()">

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
    <div class="banner">
        <img id="banner_img" src="../assets/banner<?= $sorter ?>.png" alt="banner">
    </div><br>

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
                                        <img width='450' height='450' src={$auxiliar_acessorios["img"]}>
                                            <div class='grid-item-preco'>
                                               R$ {$precoFormat}
                                            </div>
                                    </div>
                                </a>";
                        } else if ($i == 8) {
                            echo "<div class='grid-item{$i}'><a href='../pagina2/recebido.php?key={$key}'><img width='350' height='470' src={$auxiliar_acessorios["img"]}></img></a></div>";
                        } elseif ($i == 0) {
                        } else if ($i != 3 && $i != 6 && $i != 8) {
                            echo "<div class='grid-item{$i}'><a href='../pagina2/recebido.php?key={$key}'><img width='200' height='200' src={$auxiliar_acessorios["img"]}></img></a></div>";
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
                            
                            echo "<div class='item{$j}'><a href='../pagina2/recebido.php?key={$key}'><img width='330' height='450' src='{$maisVendidos['img']}'></a></div>";
                            
                        } else {
                            echo "<div class='item{$j}'><a href='../pagina2/recebido.php?key={$key}'><img width='200' height='200' src='{$maisVendidos['img']}'></a></div>";
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
    </main>

    <footer>
        <p>© 2023 Venda de produtos. Todos os direitos reservados.</p>
    </footer>
    <script src="../script.js"></script>
</body>

</html>