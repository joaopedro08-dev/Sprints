<?php

session_start();

if (!isset($_SESSION['cpf'])) {
    header("Location: index.html");
    exit();
}

$nome = $_POST['nome'];
$data = $_POST['dt_de_nasc'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];

include "conexao.php";

$sql = "INSERT INTO `clientes` (`nome`,`dt_de_nasc`, `cpf`, `email`, `telefone`, `estado`, `endereco`, `cep`) VALUES ('$nome','$data', '$cpf', '$email', '$telefone', '$estado', '$endereco', '$cep')";

if (mysqli_query($con, $sql)) {
?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro com Sucesso | Biblioteca Sesi</title>
        <link rel="icon" href="Img/livro.png">
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>
        <header class="cabecalho-principal">
            <nav class="navegacao">
                <a href="menu.php" class="logo">Biblioteca Sesi</a>
                <div class="links-nav">
                    <a href="menu.php">Início</a>
                    <a href="consulta_livro.php">Livros</a>
                    <a href="consulta_cliente.php">Clientes</a>
                    <a style="text-decoration: none; color: white" href="sair.php"><b>Sair</b></a>
                </div>
            </nav>
        </header>
        <div class="success-container">
            <svg class="success-icon" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
            </svg>
            <h1>Cadastro realizado com sucesso!</h1>
            <a href="menu.php" class="home-link">Retornar</a>
        </div>
        <footer class="rodape-principal">
            <div class="container">
                <div class="logo">
                    <p>Biblioteca Sesi</p>
                </div>

                <div class="rodape-links">
                    <div class="informacoes">

                        <a href="menu.php">Menu</a>
                        <a href="Cadastro_De_Cliente.php">Cadastro de Cliente</a>
                    </div>

                    <div class="informacoes">
                        <a href="Empréstimo.php">Empréstimo</a>
                        <a href="devolução.php">Devolução</a>
                    </div>


                    <div class="redes-sociais">
                        <p>CONTATOS</p>
                        <a href="mailto:support@biblioteca.com">bibliotecasesi.suporte@gmail.com</a>
                        <div class="social-icons">
                            <a href="#"><img src="img/download-removebg-preview1.png" alt="Facebook"></a>
                            <a href="#"><img src="img/download__1_-removebg-preview.png" alt="Instagram"></a>
                            <a href="#"><img src="img/x.png" alt="Twitter"></a>
                            <a href="#"><img src="img/likendin.png" alt="Telegram"></a>
                        </div>
                    </div>
                </div>

                <div class="aviso-legal">
                    <p>A Biblioteca e quaisquer de seus serviços não são destinados...</p>
                </div>

                <div class="endereco">
                    <p>Av. Paulista, 1313<br>CEP: 01311-923(FIESP)</p>
                </div>

                <p class="copyright">© 2024 Biblioteca SESI. Todos os direitos reservados</p>
            </div>
        </footer>

        <!--VLibras-->
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Falha no Registro | Biblioteca Sesi</title>
        <link rel="icon" href="Img/livro.png">
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>
        <header class="cabecalho-principal">
            <nav class="navegacao">
                <a href="menu.php" class="logo">Biblioteca Sesi</a>
                <div class="links-nav">
                    <a href="menu.php">Início</a>
                    <a href="consulta_livro.php">Livros</a>
                    <a href="consulta_cliente.php">Clientes</a>
                    <a style="text-decoration: none; color: white" href="sair.php"><b>Sair</b></a>
                </div>
            </nav>
        </header>

        <div class="success-container">
            <svg class="error-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10" stroke="#e74c3c" stroke-width="2" />
                <path d="M15 9L9 15M9 9L15 15" stroke="#e74c3c" stroke-width="2" stroke-linecap="round" />
            </svg>
            <div class="error-message">Falha ao cadastrar</div>
            <a href="Cadastro_De_Cliente.php"><button class="try-again-button">Tentar novamente</button></a>
        </div>

        <footer class="rodape-principal">
            <div class="container">
                <div class="logo">
                    <p>Biblioteca Sesi</p>
                </div>

                <div class="rodape-links">
                    <div class="informacoes">

                        <a href="menu.php">Menu</a>
                        <a href="Cadastro_De_Cliente.php">Cadastro de Cliente</a>
                    </div>

                    <div class="informacoes">
                        <a href="Emprestimo1.php">Empréstimo</a>
                        <a href="Devolucao1.php">Devolução</a>
                    </div>


                    <div class="redes-sociais">
                        <p>CONTATOS</p>
                        <a href="mailto:support@biblioteca.com">bibliotecasesi.suporte@gmail.com</a>
                        <div class="social-icons">
                            <a href="#"><img src="img/download-removebg-preview1.png" alt="Facebook"></a>
                            <a href="#"><img src="img/download__1_-removebg-preview.png" alt="Instagram"></a>
                            <a href="#"><img src="img/x.png" alt="Twitter"></a>
                            <a href="#"><img src="img/likendin.png" alt="Telegram"></a>
                        </div>
                    </div>
                </div>

                <div class="aviso-legal">
                    <p>A Biblioteca e quaisquer de seus serviços não são destinados...</p>
                </div>

                <div class="endereco">
                    <p>Av. Paulista, 1313<br>CEP: 01311-923(FIESP)</p>
                </div>

                <p class="copyright">© 2024 Biblioteca SESI. Todos os direitos reservados</p>
            </div>
        </footer>

        <!--VLibras-->
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>

    </body>

    </html>
<?php
}
?>