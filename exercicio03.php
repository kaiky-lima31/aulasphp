<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
 <h1>Exercicio 03</h1>
 <hr>
 
<?php 
$salario = 1200.00;

if($salario < 1500) {
    $novoSalario = $salario * 1.15;
} elseif($salario <= 3000){
    $novoSalario = $salario * 1.10;
} else {
    $novoSalario = $salario * 1.05;
}
?>
<p>O salario antido era de <?=$salario?> <br>
Após o reajuste o salario ficou de <?=$novoSalario?><p>
</body>
</html>