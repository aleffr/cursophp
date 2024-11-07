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
        $total = $_REQUEST['total'] ?? '0';
        ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $sobra = $total;
            //Total Semanas
            $semanas = (int)($total / 604800);
            $sobra = $sobra % 604800;
            //Total Dias
            $dias = (int)($sobra / 86400);
            $sobra = $sobra % 86400;
            //Total Horas
            $horas = (int)($sobra / 3600);
            $sobra = $sobra % 3600;
            //Total Minutos
            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;
            //Total Segundos
            $segundos = $sobra;

        ?>
        <p>Analisando o valor que você digitou, <strong><?=$total?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>

    </section>
</body>
</html>