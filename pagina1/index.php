<?php
    require "./estoque/estoque_Acessorios.php";
    require "./estoque/estoque_Blusas.php";
    require "./estoque/estoque_Sapatos.php";
    require "./estoque/estoque_Calcas.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Venda de produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
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
   




</main>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <p>© 2023 Venda de produtos. Todos os direitos reservados.</p>
</footer>
</body>
</html>