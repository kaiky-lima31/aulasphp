<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamento usando método POST</h1>
    <hr>
    
<?php

if( empty($_POST["nome"] || empty($_POST["email"])) ) {
?>
    <p style = "color:brown;" > Voçê deve preencher nome e e-mail</p>
<?php
} else {
/* Array SUPERGLOBAL $_GET[]
É um array já existente na linguagem, responsavel
por armazenar dados transmitidos via método GET.
Cada dado, fica em uma chave associativa dentro do array.
Esta chave é o nome do campo do formulário */

// Capturando individualmente os dados dos campos do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
?>

<h2>Dados recebidos</h2>
<ul>
    <li>Nome: <?=$nome?> </li>
    <li>E-mail: <?=$email?> </li>

    <!-- Sobre o !
    Em programção o símbolo de exclamação ! siginifica 
    inversão de lógica ou sentido.

    Exemplos:
    !true -> não verdadeiro
    !false -> não falso
    !empty -> não vazio-->

    <!-- Verificando se o campo NÃO ESTÁ VAZIO -->
    <?php if( !empty($assunto)){ ?>
    <!-- Se não está, então mostramos o assunto escolhido -->
    <li>Assunto: <?=$assunto?> </li>
    <?php } ?>

    <!-- Verificando se o campo mensagem NÃO ESTÁ VAZIO -->
    <?php if( !empty($mensagem)){ ?>
    <!-- Se não está, então mostramos a mensagem digitada -->
    <li>Mensagem: <?=$mensagem?> </li>
    <?php } ?>

</ul>
<?php
} // Final do if/else de nome e e-mail
?>
</body>
</html>