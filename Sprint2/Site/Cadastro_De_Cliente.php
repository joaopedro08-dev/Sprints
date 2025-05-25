<?php

$nome = $_POST["nome"];
$nascimento = $_POST["dt_de_nasc"];
$cpf = $_POST["cpf"];
$email = $_POST["e-mail"];
$tel = $_POST["tel"];
$estado = $_POST["estado"];
$endereço = $_POST["endereço"];
$cep = $_POST["cep"];

echo "<h2>Cliente cadastrado com sucesso!</h2>
<h3>Dados do Novo Cliente:</h3>
<b>Nome:</b> $nome<br> 
<b>CPF:</b> $cpf<br> 
<b>Telefone:</b> $tel<br> 
<b>E-mail:</b> $email<br> 
<b>Endereço:</b> $endereço<br><br>
<a href='menu.html'><button>Retornar a página inicial</button></a>";
