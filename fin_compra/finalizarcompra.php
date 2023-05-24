<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Formulário de checkout</title>
  <link rel="stylesheet" type="text/css" href="finalizarcompra.css" />
</head>
<body>
    <h1>Finalizar compra</h1>
    <form action="url_para_enviar_dados_do_formulario" method="post">
        <fieldset>
            <h2>Endereço para entrega</h2>
            <div class="input-duplo">
                <div>
                    <label for="nome">Nome: <span>*</span></label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="sobrenome">Sobrenome: <span>*</span></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
            </div>
            <div class="input-simples">
                <div>
                    <label for="endereco">Endereço: <span>*</span></label>
                    <input type="text" name="endereco" id="endereco" required>
                </div>
            </div>
            <div class="input-duplo">
                <div>
                    <label for="cep">CEP: <span>*</span></label>
                    <input type="text" name="cep" id="cep" required>
                </div>
                <div>
                    <label for="pais">País</label>
                    <div class="select-wrapper">
                        <select name="pais" id="pais">
                            <option value="angola">Angola</option>
                            <option value="brasil">Brasil</option>
                            <option value="portugal">Portugal</option>
                            <option value="timor-leste">Timor-Leste</option>
                        </select>
                    </div>
                </div>
            </div>
            <h2>Opção de envio</h2>
            <div class="radio">
                <input type="radio" name="opcao-envio" id="normal" value="normal">
                <label for="normal">Normal</label>
            </div>
            <div class="radio">
                <input type="radio" name="opcao-envio" id="expresso" value="expresso">
                <label for="expresso">Expresso</label>
            </div>
            <button type="submit">Enviar</button>
        </fieldset>
		
		  <footer>
        © 2023 Venda de produtos. Todos os direitos reservados.
    </footer>
    </form>
</body>
</html>
