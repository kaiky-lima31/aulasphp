<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Exercicio 1</h1>
    <hr>


<?php
const PESSOA = "Kaiky Lima";
$curso = "Programador"; 
$cargaHoraria = 200;
$limiteDeFaltas = $cargaHoraria / 4;

?>

<p>O <b><?=PESSOA?></b> faz o curso de 
<b><?=$curso?></b> com a carga horária de 
<b><?=$cargaHoraria?> horas</b>, com limite de faltas de 
<b><?=$limiteDeFaltas?></b>
</p>




</body>
</html>