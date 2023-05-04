<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
<h1>Exercicio 02</h1>
<hr>
<?php
// Array associativo
$dados = [
    // chave => valor 
    "usuario" => "Chapolin.colorado",
    "senha" => "qualquercoisa",
    "idade" => 18,
    "cidade" => "São Paulo"
];
?>
<h2>Saí de dados</h2>
<ol>
    <li> <?=$dados["usuario"]?> </li>
    <li> <?=["idade"]?> anos </li>
    <li> <?=["cidade"]?> </li>
</ol>
</body>
</html>