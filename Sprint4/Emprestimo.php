<!--PHP ALTERADO-->
<?php
session_start();

if (!isset($_SESSION['cpf'])) {
    // Redireciona para a página de login caso o CPF não seja encontrado na sessão
    header("Location: index.html");
    exit();
}

include "conexao.php";


//Observação: Inicialmente não era pra colocar função strtotime já que não aprendemos a usar tipos funções no php como date, portanto colocamos o strtotime para devolução em 31 dias
$dias_devolver = 31;
$data_emprestimo = date('Y-m-d');
$data_devolucao = date("Y-m-d", strtotime("+$dias_devolver days"));
$isbn = $_POST['isbn'];
$cpf_cliente = $_POST['cpf1'];
$cpf_usuario = $_POST['cpf2'];
$num_livros = $_POST['num_livros'];

// Verificar a quantidade de livros em estoque
$sql_estoque = "SELECT numero_copias FROM livros WHERE isbn = '$isbn'";
$result_estoque = $con->query($sql_estoque);

if ($result_estoque->num_rows > 0) {
    $row = $result_estoque->fetch_assoc();
    $estoque_atual = $row['numero_copias'];

    // Verificar se há livros suficientes para o empréstimo, assim, evitando que ocorra empréstimos de uma quantidade inexistente
    if ($estoque_atual >= $num_livros) {
        // Atualizar o estoque (subtrair os livros emprestados)
        $novo_estoque = $estoque_atual - $num_livros;
        $sql_update_estoque = "UPDATE `livros` SET `numero_copias` = $novo_estoque WHERE `isbn` = '$isbn'";

        if ($con->query($sql_update_estoque) === TRUE) {
            // Inserir os dados do empréstimo na tabela 'emprestimo'
            $sql_emprestimo = "INSERT INTO `emprestimo` (`data_emprestimo`, `data_devolucao`, `isbn`, `cpf_cliente`, `cpf_usuario`, `num_livros`) 
            VALUES ('$data_emprestimo', '$data_devolucao', '$isbn', '$cpf_cliente', '$cpf_usuario', $num_livros);";


            //Validação final como sucesso
            if ($con->query($sql_emprestimo) === TRUE) {
?>
                <!DOCTYPE html>
                <html lang="pt-br">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Cadastro Do Empréstimo</title>
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
                    <div class="success-container">
                        <svg class="success-icon" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                        <h1>Empréstimo Realizado!</h1>
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

                </body>

                </html>
<?php


            } else {

                echo "Erro ao registrar empréstimo: " . $con->error;
                header("Location: php_emp_erro/4_registrar_emprestimo.html");
                exit();
            }
        } else {
            echo "Erro ao atualizar o estoque: " . $con->error;
            header("Location: php_emp_erro/3_atualiza_estoque.html");
            exit();
        }
    } else {
        echo "Não há livros suficientes no estoque para este empréstimo.";
        header("Location: php_emp_erro/2_insuficiente.html");
        exit();
    }
} else {
    echo "Livro não encontrado no estoque.";
    header("Location: php_emp_erro/1_nao_encontrado.html");
    exit();
}

//Nesses 'else' colocar um location para um arquivo de erro, especificando os tipos de erros que estão dentro desses 'echo';
?>