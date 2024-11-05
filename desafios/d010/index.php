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
            $anoNasc = $_GET['anoNasc'] ?? 2000;
            $anoAtual = $_GET['anoAtual'] ?? date('Y');
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="idanoNasc" min="1900" max="<?=date('Y')?>" value="<?=$anoNasc?>">
            <label for="anoAtual">Quer saber sua idade em que ano? (atualmente estamos em <?=date('Y')?>)</label>
            <input type="number" name="anoAtual" id="idanoAtual" value="<?=$anoAtual?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            //$idade = date_diff($anoNasc,$anoAtual);
            $idade = $anoAtual - $anoNasc;
            echo "<p>Quem nasceu em $anoNasc var ter <strong>$idade anos</strong> em $anoAtual</p>";
            
        ?>
    </section>
</body>
</html>