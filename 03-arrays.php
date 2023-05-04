<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<h1> Arrays (vetores ou matrizes)</h1>
<hr>

<h2>Array com índice numérico</h2>
<?php
// Declarando arrays
$bandas = ["Rush", "slayer", "Iron Maiden"];
$cursos = array("HTML5", "PHP", "Design", "JS");

const UNIDADE_SENAC = ["Penha", "Itaquera"];
define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
?>

<h3>Saída de dados de arrays</h3>
<ul>
    <li>Banda que mais gosto: <?=$bandas[0]?> </li>
    <li>Assunto estudado: <?=$cursos[1]?> </li>
    <li>Estamos no Senac: <?=UNIDADE_SENAC[0]?> </li>
    <li>O Sesc <?=UNIDADES_SESC[1]?> é uma colonia de férias. </li>
</ul>

<h2>Array Associativo</h2>
<?php
// chaves associativas
$livro = [
    "titulo" => "Senhor do Anéis",
    "autor" => "J.R.R Tolkien",
    "ano" => 1954  
]
?>
<p>Livro: <?=$livro["titulo"]?></p>
<p>Escrito por: <?=$livro["autor"]?>
em <?=$livro["ano"]?>.</p>

<?php
echo $livro["titulo"];
echo "<p>{$livro["titulo"]}</p>"
?>
<h2>Analisando extruturas de arrays
usando print_setdump()</h2>

<!-- Comandos sem formatação -->
<?=print_r($bandas)?>
<br> <br>
<?=var_dump($bandas)?>

<!-- Com formatação usando tag <pre> -->
<pre><?=print_r($bandas)?></pre>
<pre><?=var_dump($bandas)?></pre>


</body>
</html>