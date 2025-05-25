<?php
session_start();

if (!isset($_SESSION['cpf'])) {
    // Redireciona para a página de login caso o CPF não seja encontrado na sessão
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial | Biblioteca SESI</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="img/livro.png">
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

    <main class="main">
        <section class="secao-bem-vindo">
            <h1 class="titulo-bem-vindo">Bem-vindo à Biblioteca Sesi! 📚</h1>
            <p>
                Aqui você encontrará uma vasta coleção de livros, artigos e recursos acadêmicos, disponíveis a qualquer
                hora e em qualquer lugar.
            </p>
        </section>

        <div class="container-cards">
            <div class="card">
                <h3>Cadastro de Cliente</h3>
                <p>Faça o cadastro de novos clientes.</p>
                <a href="Cadastro_De_Cliente.php" class="btn">Cadastrar</a>
            </div>


            <div class="card">
                <h3>Adicionar livros ao estoque</h3>
                <p>Gerencie o estoque de livros da biblioteca.</p>
                <a href="cadastro_do_livro.php" class="btn">Adicionar</a>
            </div>


            <div class="card">
                <h3>Empréstimo de livros</h3>
                <p>Faça o empréstimo de livros de forma prática.</p>
                <a href="Emprestimo1.php" class="btn">Emprestar</a>
            </div>

            <div class="card">
                <h3>Devolução de livros</h3>
                <p>Gerencie a devolução de livros com facilidade.</p>
                <a href="Devolucao1.php" class="btn">Devolver</a>
            </div>

            <div class="card">
                <h3>Consulta de Clientes</h3>
                <p>Ver clientes cadastrados.</p>
                <a href="consulta_cliente.php" class="btn">Abrir</a>
            </div>

            <div class="card">
                <h3>Consulta de Livros</h3>
                <p>Ver livros em estoque (cadastrados).</p>
                <a href="consulta_livro.php" class="btn">Abrir</a>
            </div>

            <div class="card">
                <h3>Consulta de Empréstimos</h3>
                <p>Ver histórico de empréstimos.</p>
                <a href="consulta_emprestimos.php" class="btn">Abrir</a>
            </div>

        </div>
        <br><br>
        <section class="secao-bem-vindo">
            <h2>Sobre nós...</h2>
            <p>
                Bem-vindo à Biblioteca Sesi, um espaço dedicado ao prazer da leitura e ao conhecimento acessível a
                todos.
                Aqui,
                você encontrará uma vasta coleção de livros digitais abrangendo gêneros variados. Nossa missão é
                oferecer um
                ambiente virtual onde a leitura e o aprendizado possam prosperar sem limitações físicas.
            </p>
        </section>
    </main>
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