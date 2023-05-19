<?php
    require "/estoque/estoque_Acessorios.php";
    require "/estoque/estoque_Blusas.php";
    require "/estoque/estoque_Calcas.php";
    require "/estoque/estoque_Sapatos.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Venda de produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <a href="/estoque/estoque_Acessorios.php"></a>
    <header>
        <nav>
            <div class="logo">
                <img src="logo/aqui/imagem.jpg" alt="Logo da empresa">
            </div>
            <form class="search-form">
                <input type="text" placeholder="Pesquisar">
                <button type="submit">Buscar</button>
                <span>BRESHOP</span>
            </form>
        </nav>
    </header>
	
	<h1> BANNER AQUI[]</h1><br>
    
	<section> <div class="product">
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
    </div></section>
            
    <main>
    
<br> <br>
    <div class="desconto">
        <p>DESCONTOS</p>
    </div>
   
    
    <div class="grid-container">
    <?php
            $i = 0;
            foreach($acessorios as $key => $auxiliar_acessorios){
                if($i <= 8){
                    $i++;
                echo "<div class='grid-item{$i}'><img src={$auxiliar_acessorios["img"]}'></img></div>";
                }else{
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
        <div class="item1">quadro 1 </div>
        <div class="item2">quadro 2 </div>
        <div class="item3">quadro 3 </div>
        <div class="item4">quadro 4 </div>
        <div class="item5">quadro 5 </div>
        <div class="item6">quadro 6 </div>
        <div class="item7">quadro 7 </div>
    </div> 
    <div class="recomendados"><p>RECOMENDADOS </p> </div>




</main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <p>© 2023 Venda de produtos. Todos os direitos reservados.</p>
</footer>
</body>
</html>
