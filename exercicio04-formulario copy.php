<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exercicío 4</h1>
    <hr>
    <form autocomplete="off" action="exercicio-dados.php" method="post">
<p>
        <label for="nome">Nome do produto:</label>
        <input type="text" id="nome" name="nome" required>
</p>

<p>
        <label for="fabricante">Fabricante:</label>
        <select id="fabricante" name="fabricante" required>
            <option value="Casas Bahia">Casas Bahia</option>
            <option value="Eletrolux">Eletrolux</option>
            <option value="Consul">Consul</option>
            <option value="Sansumg">Sansumg</option>
        </select>
</p>

<p>
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" min="100" max="300" step="0.01" required>
</p>

<p>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>
</p>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>