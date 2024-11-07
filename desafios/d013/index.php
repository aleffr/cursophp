<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 57px;
            margin: 7px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_REQUEST["saque"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="saque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="saque" id="saque" value="<?=$saque?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100,R$50, R$10 e R$5</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($saque,2,",",".")?> realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas;</p>
        <?php
            $sobra = $saque;

            $cem = (int)($sobra / 100);
            $sobra = $sobra % 100;

            $ciquenta = (int)($sobra / 50);
            $sobra %= 50;

            $dez = (int)($sobra / 10);
            $sobra %= 10;

            $cinco = (int)($sobra / 5);
            $sobra %= 5;

        ?>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$ciquenta?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$dez?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$cinco?></li>
        </ul>

    </section>
</body>
</html>