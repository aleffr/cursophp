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
        $saque = $_REQUEST["saque"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="saque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="saque" id="saque" value="<?=$saque?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=$saque?>,00 realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas;</p>
        <?php
            $sobra = $saque;
            //Total Semanas
            $cem = (int)($sobra / 100);
            $sobra = $sobra % 100;
            //Total Dias
            $ciquenta = (int)($sobra / 50);
            $sobra = $sobra % 50;
            //Total Horas
            $dez = (int)($sobra / 10);
            $sobra = $sobra % 10;
            //Total Minutos
            $cinco = (int)($sobra / 5);
            $sobra = $sobra % 5;
            //Total Segundos
            $segundos = $sobra;
        ?>
        <ul>
            <li>Notas de Cem: <?=$cem?></li>
            <li>Notas de Cinquenta: <?=$ciquenta?></li>
            <li>Notas de Dez: <?=$dez?></li>
            <li>Notas de Cinco: <?=$cinco?></li>
            <li><?=$segundos?> segundos</li>
        </ul>

    </section>
</body>
</html>