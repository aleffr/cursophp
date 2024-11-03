<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <?php 
            $num = $_GET['num'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="idNum" step="0.001" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $quad = sqrt($num);
            $cubic = $num ** (1/3);

            echo "<p>Analisando o <strong>número $num</strong></p>";
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <strong>". number_format($quad,3,",",".")."</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>". number_format($cubic,3,",",".")."</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>