<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<h1>Loops (ou laços de repetição) </h1>
<hr>

<?php
/* Loops tradicionais
while
for
do/while */
?>

<h2>while (enquanto)</h2>
<?php
$i = 1; // variavel de controle

while($i <= 5){
?>
   <p>Senac Penha - PHP (i vale <?=$i?>)</p>
<?php
    $i++;
}
?>

<hr>


<h2>do/while</h2>
<ul>
<?php
$j =1;

do {
?>
    <li>PHP</li>
<?php
$j++;
} while($j <= 5) 
?>
</ul>

<hr>

<h2>for</h2>
<?php
$bandas = ["Pink Flotd", "Savatage", "Slayer"];
?>

<section>
    <h3>Bandas</h3>
<?php for( $k = 0; $k < count($bandas); $k++ ) {?>
    <p> <?=$bandas[$k]?> </p>
<?php } ?>
</section>

<h2>Exercicio: lista de meses</h2>
<p>Crie um array contendo a lista de todos os 
meses do ano. </p>
<p>Monte uma <b>lista ordenada</b> e ,
usando um <b>LOOP</b>, faça com 
que ela mostree o nome de cada vez</p>

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>

<section>
    <h3>Calendário</h3>
<ol>
    
<?php for( $k = 0; $k < count($meses); $k++ ) {?>
    <li> <?=$meses[$k]?> </li>
<?php } ?>
</ol>

<!-- Para cada BANDA dentro do
array BANDAS, mostre um parágrafo.
Foreach -> para cada,
as -> como. -->
<h2>foreach</h2>
<?php foreach ($bandas as $bandas) {?>
    <p>Banda: <b><?=$bandas?></b> </p>
<?php } ?>
</section>
</body>
</html>