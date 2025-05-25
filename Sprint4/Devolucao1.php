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
  <title>Devolução | Biblioteca Sesi</title>
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
    <h1 class="titulo">Devolução</h1>

    <form action="devolucao.php" method="post" class="form-devolucao">
      <div class="formato4">
        <p>Devolução do Livro 🖍️</p>

        <label>ISBN</label>
        <div class="campo">
          <input list="isbn" name="isbn" required>
          <datalist id="isbn">
            <?php
            include "conexao.php";

            $sql = "SELECT isbn FROM emprestimo";
            $resul = $con->query($sql);

            if ($resul->num_rows > 0) {
              while ($row = $resul->fetch_assoc()) {
                echo "<option value='" . $row['isbn'] . "'>" . $row['isbn'] . "</option>";
              }
            } else {
              echo "<option value='' disabled>Não há livros emprestados</option>";
            }


            ?>
          </datalist>
        </div>

        <div class="campo">
          <label for="num_livros" class="form-label">Nº de Livros</label>
          <input type="number" id="num_livros" name="num_livros" required class="form-input" min="1">
        </div>

        <button type="submit" class="form-button">Enviar</button>
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

          <a href="../menu.php">Menu</a>
          <a href="../Cadastro_De_Cliente.php">Cadastro de Cliente</a>
        </div>

        <div class="informacoes">
          <a href="../Emprestimo1.php">Empréstimo</a>
          <a href="../Devolucao1.php">Devolução</a>
        </div>


        <div class="redes-sociais">
          <p>CONTATOS</p>
          <a href="mailto:support@biblioteca.com">@SuporteBibliotecaSesi@gmail.com</a>
          <div class="social-icons">
            <a href="#"><img src="../img/download-removebg-preview1.png" alt="Facebook"></a>
            <a href="#"><img src="../img/download__1_-removebg-preview.png" alt="Instagram"></a>
            <a href="#"><img src="../img/x.png" alt="Twitter"></a>
            <a href="#"><img src="../img/likendin.png" alt="Telegram"></a>
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