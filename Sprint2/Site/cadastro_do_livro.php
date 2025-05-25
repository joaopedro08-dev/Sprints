<?php

$isbn = $_POST["isbn"];
$data = $_POST["dt_cadastro"];
$copias = $_POST["copias"];
$public = $_POST["ano_public"];
$categoria = $_POST["categoria"];
$autor = $_POST["autor"];
$idioma = $_POST["idioma"];
$titulo = $_POST["titulo"];
$editora = $_POST["editora"];
$edicao = $_POST["edição"];
$volume = $_POST["volume"];
$pg = $_POST["pg"];

echo "<h2>Livro cadastrado com sucesso!</h2>
<h3>Dados do Novo Livro:</h3>
<b>Nome:</b> $titulo<br> 
<b>Autor:</b> $autor<br> 
<b>Número de cópias:</b> $copias<br> 
<b>Ano de Publicação:</b> $public<br> 
<b>Categoria:</b> $categoria<br>
<b>Editora:</b> $editora<br><br>
<a href='menu.html'><button>Seguir para a página inicial</button></a>";