<?php
session_start();

if (!isset($_SESSION['cpf'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Sesi</title>
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
    <div class="container-centralizado" style="display: flex; justify-content: center; margin: 20px;">
        <table style="border-collapse: collapse; width: 100%; max-width: 800px; border: 1px solid #ccc;">
            <thead>
                <tr>
                    <th> ISBN</th>
                    <th> Número de Cópias</th>
                    <th> Título</th>
                    <th> Editora</th>
                    <th> Data de Publicação</th>
                    <th> Número da Edição</th>
                    <th> Número de Páginas</th>
                    <th> Volume</th>
                    <th> Categoria</th>
                    <th> Idioma</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "conexao.php";
                $sql = "SELECT * FROM livros";
                $dados = mysqli_query($con, $sql);

                while ($linha = mysqli_fetch_array($dados)) {
                    $isbn = $linha['isbn'];
                    $numero_copias = $linha['numero_copias'];
                    $titulo = $linha['titulo'];
                    $editora = $linha['editora'];
                    $ano_publicacao = $linha['ano_publicacao'];
                    $numero_edicao = $linha['numero_edicao'];
                    $numero_paginas = $linha['numero_paginas'];
                    $numero_volume = $linha['numero_volume'];
                    $categoria = $linha['categoria'];
                    $idioma = $linha['idioma'];

                    echo "<tr>
                            <td>$isbn</td>
                            <td>$numero_copias</td>
                            <td>$titulo</td>
                            <td>$editora</td>
                            <td>$ano_publicacao</td>
                            <td>$numero_edicao</td>
                            <td>$numero_paginas</td>
                            <td>$numero_volume</td>
                            <td>$categoria</td>
                            <td>$idioma</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="centralizar" style="margin-top: 20px;">
            <a href="menu.php" class="home-link" style="text-decoration: none; color: white;">Voltar</a>
        </div>
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