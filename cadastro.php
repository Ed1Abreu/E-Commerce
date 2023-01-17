<?php
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/cadastro.css">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="icon" href="assets/icone-pagina.png">
        <title>Store - Cadastro</title>
    </head>
    <body>
        <header id="cabecalho">
            <a id="link-titulo" href="index.php"><h1 id="titulo_loja">Store </h1></a>
            <div id="div_links">
                <div id="sessao-usuario">
                    <img src="assets/user-icon.png" id="iconeUsuario">
                    <h5 id="links">Faça <a href="login.php">Login</a> ou <br> crie seu <a href="cadastro.php">Cadastro</a></h5>
                </div>
                <div id="sessao-frete">
                    <h5><img id="imagem-ponto" src="assets/ponto.png"><b id="calcular">Calcular Frete </b></h5>   
                    <input type="text" id="cep-destino">
                    <button id="botao_calcular" onclick= "calcular()">Calcular</button>
                </div>
            </div>
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
        <h2 id="titulo">Criar conta</h2>
        <section>
            <div id="container">
                <form method="POST" action="processa.php">
                    <div class="paralelo">
                        <div class="sessoes">
                            <label class="label" for="nome">Nome completo</label>
                            <input class="campo" name="nome" id="nome" maxlength="50" type="text" required>
                        </div> 
                        <div class="sessoes">                        
                            <label class="label" for="CPF">CPF</label>
                            <input class="campo" name="cpf" id="CPF" maxlength="11" type="text" required>
                        </div>
                    </div>                   
                    <div class="paralelo">
                        <div class="sessoes">
                            <label class="label" for="nascimento">Data de nascimento</label>
                            <input class="campo" id="nascimento" type="text" placeholder="dd/mm/aa" required >
                        </div>                        
                        <div class="sessoes">    
                            <label class="label" for="telefone">Telefone celular</label>
                            <input class="campo" id="telefone" type="text" placeholder="(XX) XXXXX-XXXX" required>
                        </div>
                    </div>
                    <div class="sessoes">
                        <label class="label" for="email">E-mail</label>
                        <input class="campo" id="email" type="email" required>
                    </div>
                    <div class="paralelo">
                        <div class="sessoes">
                            <label class="label" for="senha">Crie sua senha</label>
                            <input class="campo" name="senha" id="senha" maxlength="60" type="password" required>
                        </div>
                        <div class="sessoes">
                            <label class="label">Confirme sua senha</label>
                            <input class="campo" type="password" required>
                        </div>
                    </div>
                    <div class="sessoes">
                        <label class="label" for="pesquisa">Onde conheceu nossa loja?</label>
                        <select name="pesquisa" id="pesquisa">
                            <option value="" disabled selected>Selecione:</option>
                            <option value="google">Google</option>
                            <option value="amigo">Indicação de amigo</option>
                            <option value="facebook">Facebook</option>
                            <option value="instagram">Instagram</option>
                            <option value="twitter">Twitter</option>
                            <option value="youtube">Youtube</option>
                        </select>
                    </div>
                    <div>
                        <div class="paralelo">
                            <div class="sessoes">
                                <label class="label" for="cep">CEP</label>
                                <input class="campo" id="cep" type="text" required>
                            </div>
                            <div class="sessoes">
                                <label class="label" for="numero">Número</label>
                                <input class="campo" id="numero" type="text" required>
                            </div>
                        </div>
                        
                        <div class="sessoes">
                            <label class="label" for="endereco">Endereço</label>
                            <input class="campo" id="endereco" type="text" required>
                        </div>
                        
                        <div class="paralelo">
                            <div class="sessoes">
                                <label class="label" for="cidade">Cidade</label>
                                <input class="campo" id="cidade" type="text" required>
                            </div>
                            
                            <div class="sessoes">
                                <label class="label" for="bairro">Bairro</label>
                                <input class="campo" id="bairro" type="text" required>
                            </div>
                        </div>
                        
                        <div class="sessoes">
                            <label class="label" for="estado">Estado</label>
                            <input class="campo" id="estado" type="text" required>
                        </div>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label>Quero receber ofertas e novidades por e-mail, SMS, WhatsApp ou mensagens.</label>
                    </div>
                    <div>
                        <input type="checkbox" required>
                        <label>Li e estou de acordo com as políticas da empresa e políticas de privacidade.</label>
                    </div>
                    <input type="submit" id="cadastrar" value="Salvar">
                </form>
            </div>
        </section>
        <script src="js/index.js"></script>
        <script src="js/script.js"></script>
    </body>
    <footer id="rodape">
        <h6 id="texto_rodape">© Copyright Edvanderson Abreu, Gabriel Pontes & Ricardo Alves</h6>
    </footer>
    <?php
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
    
        $sql = "insert into clientes(nome,cpf,senha) values ('$nome','$cpf','$senha')";
        
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
    ?>
</html>