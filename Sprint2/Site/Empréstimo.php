<?php

$cod = $_POST["cod_emprestimo"];
$data_emprestimo = $_POST["data_emprestimo"];
$data_devolucao = $_POST["data_devolucao"];
$isbn = $_POST["isbn"];
$cpf_cliente = $_POST["cpf_cliente"];
$cpf_usuario = $_POST["cpf_usuário"];
$num_livros = $_POST["num_livros"];

echo "<h2>Empréstimo realizado com sucesso!</h2>
<h3>Dados do Novo Empréstimo:</h3>
<b>CPF CLIENTE:</b> $cpf_cliente<br> 
<b>CPF USUÁRIO:</b> $cpf_usuario<br> 
<b>ISBN LIVRO:</b> $isbn<br> 
<a href='menu.html'><button>Retornar a página inicial</button></a>";
