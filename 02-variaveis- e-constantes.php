<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
<h1>Usando variáveis e constantes</h1>
<hr>

<h2>Variáveis</h2>

<?php
// Variáveis
$curso = "Programador Web";
$ano = 2023;
$preco = 1278.75;
$area = 'Back-End';

// Saída de Dados
echo "<h2>Exemplos de saída usando variáveis</h2>";
echo '<p>$curso</p>'; // trata como texto
echo "<p>$curso</p>"; // interpolaçâo


/* Ao usar variaveis dentro
de strings/textos, é necessaria
as aspas duplas "" para que o
recurso seja interpretado. */

// Saída usando concatenação (ponto .)
echo "<p><i> \"teste\" ".$curso."</i></p>";
?>

<!-- Saida ABREVIADA/SIMPLIFICADA
usando "shrothand tags" do PHP -->
<h2>Saída usando versão simplificada do PHP</h2>

<!-- Estamos em 2023 estudando Back-End -->
<p>Estamos em  <?=$ano?> estudando <?=$area?> </p>

<!-- USANDO PHP SINTAXE TRADICIONAL
(mais verbosa e suscetivel a erros) -->
<?php
echo "<p>Estamos em $ano estudando $area</p>";
?>

<h2>Constantes</h2>
<?php
// Sintaxe tradicional 
define("AUTOR", "Kaiky Lima de Melo");
define("JUROS", 10);


// Sintaxe mais recente 
const EMPRESA = "ABC Tecnologia";
?>
<p>Autor do site: <?=AUTOR?></p>
<p>Taxa de juros: <?=JUROS?>% em <?=$ano?> </p>
<p>Prestador de serviços: <?=EMPRESA?></p>



</body>
</html>