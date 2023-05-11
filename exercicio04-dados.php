<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
?>

<h2>Dados Enviados</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Fabricante <?=$fabricante?> </li>
    <li>Descrição <?=$descricao?> </li>
    <li>Preço <?=$preco?> </li>
</ul>

</body>
</html>