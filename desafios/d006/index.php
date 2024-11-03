<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

        $dividendo = $_GET['v1'] ?? 0;
        $divisor = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?php echo $dividendo ?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?php echo $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da divisão</h2>
        <?php
            if ($divisor == 0) {
                $quociente = 0;
                $resto = 0;
            }
 
            else {
                $quociente = intdiv($dividendo,$divisor);
                $resto = $dividendo % $divisor;
            }
        ?>

        <table class = divisao>
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>

    </section>
</body>
</html>