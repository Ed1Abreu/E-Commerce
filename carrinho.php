<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="icon" href="assets/icone-pagina.png">
        <link rel="stylesheet" href="css/carrinho.css">
        <title>Store - Inicio</title>
    </head>
    <body>
    <header id="cabecalho">
        <a id="link-titulo"><h1 id="titulo_loja">Store </h1></a>
        <div id="div_links">
            <div id="sessao-usuario">
                <img src="assets/user-icon.png" id="iconeUsuario">
                <h5 id="links">Seja bem-vindo</a></h5>
            </div>
            
            <div id="sessao-frete">
                <h5><img id="imagem-ponto" src="assets/ponto.png"><b id="calcular">Calcular Frete </b></h5>
                <input type="text" id="cep-destino" placeholder="Digite seu CEP">
                <button id="botao_calcular" onclick= "calcular()">Calcular</button>
            </div>
        </div>
        <a href="carrinho.php"><img id="imagem_carrinho" src="assets/carrinho.png" alt="carrinho"></a>
        <div id="sessao-transportadoras">
            <div class="opcoes">
                <h5 class="transportadora" id="transp_correios"></h5>
                <p class="valor_frete" id="valor_correios"></p>
            </div>  
            <div class="opcoes">
                <h5 class="transportadora" id="transp_azul"></h5>
                <p class="valor_frete"id="valor_azul"></p>
            </div>
            <div class="opcoes">
                <h5 class="transportadora" id="transp_jadlog"></h5>
                <p class="valor_frete"id="valor_jadlog"></p>
            </div>
            <div class="opcoes">
                <h5 class="transportadora" id="transp_fedex"></h5>
                <p class="valor_frete"id="valor_fedex"></p>
            </div> 
        </div>
    </header>
    <section id="sessao-carrinho">
        <h3 id="titulo-carrinho">Seu carrinho</h3>




    </section>






    </body>
</html>