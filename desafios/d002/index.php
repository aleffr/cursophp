<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
       <h1>Trabalhando com números aleatórios</h1>
       <?php 
            $min = 0;
            $max = 100;
            $resultado = mt_rand(0, 100);
            echo "<p>Gerando um número aleatório entre $min e $max...</p>";
            echo "<p>O valor gerador foi <strong>$resultado</strong></p>";
       ?>
       <button onclick="location.reload()"> &#x1F504 Gerar outro</button>
       
</main>
</body>
</html>