<?php
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="icon" href="assets/icone-pagina.png">
        <link rel="stylesheet" href="css/style.css">
        <title>Store - Inicio</title>
    </head>
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
    <body>    
        <table class="tabela">
            <tr>
                <h3 class="sessao_produtos">Processador</h3>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Processador AMD Ryzen 7 3800X.jpg" alt="Imagem placa de video 3060">
                    <h3 class="titulo_produto">Processador AMD Ryzen 7 3800X 3.9GHz 4.5GHz Max Turbo</h3>
                    <p class="preco">R$ 2.173,19 à vista</p>
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Processador ryzen 5 5600X.jpg" alt="Imagem processador ryzen 5 5600x">
                    <h3 class="titulo_produto">Processador AMD Ryzen 5 5600X, (4.6GHz Max Turbo)</h3>
                    <p class="preco">R$ 1.119,99 à vista</p>
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Processador intel I9 13900KF.jpg" alt="Imagem de um notebook da marca Asus">
                    <h3 class="titulo_produto">Processador Intel Core i9-13900KF, 13ª Geração, 5.8GHz</h3>
                    <p class="preco">R$ 3.999,00 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Processador Intel Core i5 12400.jpg" alt="" >
                    <h3 class="titulo_produto">Processador Intel i5-12400, 2.5GHz (4.4GHz Max Turbo)</h3>
                    <p class="preco">R$ 1.319,99 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Processador AMD Ryzen 3 3200G.jpg" alt="" >
                    <h3 class="titulo_produto">Processador AMD Ryzen 3 3200G, 3.6GHz 4GHz Turbo</h3>
                    <p class="preco">R$ 599,99 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
            </tr>
        </table>    
        <table class="tabela">
            <tr>
                <h3 class="sessao_produtos">Placa de vídeo</h3>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Placa de Vídeo RTX 3060 Gaming X MSI NVIDIA GeForce.jpg" alt="Imagem placa de video 3060">
                    <h3 class="titulo_produto">Placa de Vídeo RTX 3060 Gaming X MSI NVIDIA GeForce</h3>
                    <p class="preco">R$ 2.459,99 à vista</p>
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Placa de Vídeo RTX 3090 Trinity Zotac.jpg" alt="Imagem processador ryzen 5 5600x">
                    <h3 class="titulo_produto">Placa de Vídeo RTX 3090 Trinity  <br>NVIDIA GeForce, 24GB,</h3>
                    <p class="preco">R$ 7.999,99 à vista</p>
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/RX 6700 XT Speedster QICK.jpg" alt="Imagem de um notebook da marca Asus">
                    <h3 class="titulo_produto">RX 6700 XT Speedster QICK <br>AORUS Radeon, 12GB</h3>
                    <p class="preco">R$ 3.769,10 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Placa de Vídeo RTX 3080 Trinity Zotac NVIDIA.jpg" alt="" >
                    <h3 class="titulo_produto">Placa de Vídeo Asus Rog Strix GeForce RTX 3080 10GB</h3>
                    <p class="preco">R$ 6.599,00 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Placa de Vídeo GTX 1660 Super Gaming.jpg" alt="" >
                    <h3 class="titulo_produto">Placa de Vídeo NVIDIA GeForce GTX 1660 Super Gaming</h3>
                    <p class="preco">R$ 1.399,99 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
            </tr>
        </table>
        <table class="tabela">
            <tr>
                <h3 class="sessao_produtos">Console</h3>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Console Xbox Series S.jpg" alt="Imagem placa de video 3060">
                    <h3 class="titulo_produto">Xbox series S <br>512GB de armazenamento</h3>
                    <p class="preco">R$ 2.049,99 à vista</p>
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Console Xbox Series X.jpg" alt="Imagem processador ryzen 5 5600x">
                    <h3 class="titulo_produto">Xbox series X,<br> 1TB de armazenamento</h3>
                    <p class="preco">R$ 4.084,99 à vista</p>
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Nintendo Switch 32GB.jpg" alt="Imagem de um notebook da marca Asus">
                    <h3 class="titulo_produto">Nintendo Switch,<br> 32GB de armazenamento</h3>
                    <p class="preco">R$ 1.989,99 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Console Ps4 Slim.jpg" alt="" >
                    <h3 class="titulo_produto">Console Sony Playstation 4, 1TB de armazenamento</h3>
                    <p class="preco">R$ 1.934,90 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
                <td class="celulas">
                    <img class="imagem_card" src="assets/Console Playstation 5 Standard Edition.jpg" alt="" >
                    <h3 class="titulo_produto">Console Playstation 5 Standard Edition, 825GB, Branco</h3>
                    <p class="preco">R$ 4.749,90 à vista</p> 
                    <button class="botao_comprar">Comprar</button>
                </td>
            </tr>
        </table>
        <script src="js/index.js"></script>
    </body>
    <footer id="rodape">
        <h6 id="texto_rodape">© Copyright Edvanderson Abreu, Gabriel Pontes & Ricardo Alves</h6>
        
        <div id="adicionar_produto">    
            <h4>Cadastrar produtos</h4>
            <form id="cadastro_produtos" method="POST">
                <label for="nome_produto">Digite o nome do produto</label><br>
                <input type="text" name="nome_produto" id="nome_produto" required><br>
                <label for="preco">Digite o preço do produto</label><br>
                <input type="text" name="preco" id="preco" required><br>
                <input type="submit" value="Cadastrar" id="btn_cadastrar">
            </form>
        </div>
    </footer>
    
    <!-- Realizar os condicionais aqui na sessao do PHP -->
    
    
    <?php
        
        if(isset($_POST['nome_produto']) || isset($_POST['preco'])){

            if(strlen($_POST['nome_produto']) == 0){
                echo "Preencha o campo do nome do produto";
            }else if(strlen($_POST['preco']) == 0){
                echo "Preencha o campo do preco do produto";
            }else{

                $nome_produto = $conexao -> real_escape_string ($_POST['nome_produto']);
                $preco = $conexao -> real_escape_string ($_POST['preco']);


                $sql = "insert into produtos(id_produto,nome_produto,preco) values ('','$nome_produto','$preco')";
            
                $Cadastrar = mysqli_query($conexao, $sql);
                $linhas = mysqli_affected_rows($conexao);



            }
        }
        
        
        
        
        
        
        
        
    ?>
</html>