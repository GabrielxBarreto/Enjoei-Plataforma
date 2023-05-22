<?php
require "../estoque/estoque_Acessorios.php";
require "../estoque/estoque_Blusas.php";
require "../estoque/estoque_Calcas.php";
require "../estoque/estoque_Sapatos.php";
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

<body>
    
    <header>
        <nav>
            <div class="logo">
                <img id="logo" src="../breshoplogo.png" alt="Logo da empresa">
            </div>
            <form  method = "get" action ="pesquisa.php" class="search-form">
                <input required name="item" type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
            </form>
            </form>
            <img id="conta" src="../usuarioicone.png" alt="userIcon" srcset="">
            <img id="conta" src="../roupaicon.png" alt="userIcon" srcset="">
            <img id="conta" src="../simbolocompras.png" alt="userIcon" srcset="">
        </nav>
    </header>
    <br>
    <div class="banner">
        <img id="banner_img" src="https://imagensemoldes.com.br/wp-content/uploads/2020/04/Ilustra%C3%A7%C3%A3o-50-de-Desconto-PNG.png" alt="banner">
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
            foreach ($acessorios as $key => $auxiliar_acessorios) {
                if ($i <= 8) {
                    if ($i == 3) {
                        echo "<div class='grid-item{$i}'><img width='450' height='450' src={$auxiliar_acessorios["img"]}></img></div>";
                    } else if ($i == 6) {
                        echo "<div class='grid-item{$i}'><img width='450' height='450' src={$auxiliar_acessorios["img"]}></img></div>";
                    } else if ($i == 8) {
                        echo "<div class='grid-item{$i}'><img width='300' height='470' src={$auxiliar_acessorios["img"]}></img></div>";
                    }
                    $i++;
                    echo "<div class='grid-item{$i}'><img width='200' height='200' src={$auxiliar_acessorios["img"]}></img></div>";
                } else {
                    break;
                }
            }
            ?>
        </div>

        <div class="marca">
            <div class="marca-elementos">
                <h3>NIKE</h3>
            </div>
        </div>


        <div class="maisvendidos">
            <p>MAIS VENDIDOS</p>
        </div>
        <div class="container-vendidos">
            <?php
            $j = 0;
            foreach ($blusas as $key => $aux_blusas) {
                if ($j <= 6) {

                    $j++;
                    if ($j == 3) {
                        echo "<div class='item{$j}'><img width ='330' height='450'src='{$aux_blusas['img']}'></div>";
                    
                    }else{
                        echo "<div class='item{$j}'><img width='200' height='200' src='{$aux_blusas['img']}'></div>";
                    }
                    
                } else {
                    break;
                }
            }


            ?>


        </div>
        <div class="recomendados">
            <p>RECOMENDADOS </p>
        </div>




    </main>

    <footer>
        <a href="../1.html">ok</a>
        <p>© 2023 Venda de produtos. Todos os direitos reservados.</p>
    </footer>
</body>

</html>