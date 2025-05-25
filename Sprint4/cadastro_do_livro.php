<?php
session_start();

if (!isset($_SESSION['cpf'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de livros | Biblioteca SESI</title>
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
    <div class="corpo">
        <h2 class="titulo">Cadastro do Livro</h2>
        <form action="cadastro_do_livro1.php" method="post" class="form-cadastro-livro">
            <div class="formato6">
                <p>Cadastro de Livros</p>

                <div class="campo">
                    <label for="isbn" class="form-label">ISBN do Livro</label>
                    <input type="text" id="isbn" name="isbn" required class="form-input">
                </div>

                <div class="campo">
                    <label for="num_copias" class="form-label">Número de Cópias</label>
                    <input type="number" id="num_copias" name="num_copias" required class="form-input">
                </div>

                <div class="campo">
                    <label for="ano_publicacao" class="form-label">Ano de Publicação</label>
                    <input type="text" id="num_copias" name="ano_publicacao" required class="form-input">
                </div>

                <div class="campo">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" id="categoria" name="categoria" required class="form-input">
                </div>

                <div class="campo">
                    <label for="idioma" class="form-label">Idioma</label>
                    <input type="text" id="idioma" name="idioma" required class="form-input">
                </div>

                <div class="campo">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" id="titulo" name="titulo" required class="form-input">
                </div>

                <div class="campo">
                    <label for="editora" class="form-label">Editora</label>
                    <input type="text" id="editora" name="editora" required class="form-input">
                </div>

                <div class="campo">
                    <label for="num_edicao" class="form-label">Número de Edição</label>
                    <input type="number" id="num_edicao" name="numero_edicao" required class="form-input">
                </div>

                <div class="campo">
                    <label for="num_volume" class="form-label">Número de Volume</label>
                    <input type="text" id="num_volume" name="numero_volume" required class="form-input">
                </div>

                <div class="campo">
                    <label for="num_paginas" class="form-label">Número de Páginas</label>
                    <input type="text" id="num_paginas" name="numero_paginas" required class="form-input">
                </div>

                <button type="submit" class="form-button">Cadastrar</button>
            </div>
        </form>
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

<!--É necessário adionar nesse forms e, respectivamente, no BD, o autor do livro, que é uma informação crucial para consultas da biblioteca-->