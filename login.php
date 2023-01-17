<?php
    include_once("conexao.php");

    if(isset($_POST['cpf']) || isset($_POST['senha'])){

        if(strlen($_POST['cpf']) == 0){
            echo "Preencha seu CPF";
        }else if(strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
        } else{
            
            $cpf = $conexao -> real_escape_string($_POST['cpf']);
            $senha = $conexao -> real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM clientes WHERE cpf ='$cpf' AND senha ='$senha' ";
            $sql_query = $conexao -> query($sql_code) or die("Falha na execução do código SQL". $conexao->error);

            $quantidade = $sql_query -> num_rows;
            
            if($quantidade == 1){
                $usuario = $sql_query -> fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['nome'] = $usuario['nome'];
                header("Location: processa.php");
            }else{
                echo "CPF ou Senha incorreto!";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css">
        <link rel="icon" href="assets/icone-pagina.png"> 
        <title>Store - Login</title>
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
        <h2 id="titulo">Fazer Login</h2>
        <section>
            <div id="container">
                <form method="POST" action="">
                    <div class="sessoes">
                        <label for="login">CPF</label>
                        <input class="inputs" type="text" name="cpf" id="login">
                    </div>
                    <div class="sessoes">
                        <label for="senha">Senha</label>
                        <input class="inputs" type="password" name="senha" id="senha">
                    </div>
                    <h5 id="lembra_senha">Esqueçeu a senha?</h5>
                    <input id="botao" type="submit" value="Entrar">
                </form>
            </div>
        </section>
        <script src="js/index.js"></script>
    </body>
    <footer id="rodape">
        <h6 id="texto_rodape">© Copyright Edvanderson Abreu, Gabriel Pontes & Ricardo Alves</h6>
    </footer>
</html>