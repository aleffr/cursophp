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
        $salarioMinimo = 1412;
        $salario = $_GET['salario'] ?? 0;

        
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu slário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" step="0.01" value="<?=$salario?>">
            <?="<p>Considerando o salário mínimo de <strong>". numfmt_format_currency($padrao,$salarioMinimo,"BRL") ."</strong></p>"?>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $quantSalarioMin = intdiv($salario,$salarioMinimo);
            $resto = $salario - $quantSalarioMin * $salarioMinimo; //<--> para manter os valores decimais da diferença, mas pode ser feito com operador % - módulo
            
            echo "<p>Quem recebe um salário de ". numfmt_format_currency($padrao,$salario,"BRL") ." ganha <strong>$quantSalarioMin salários mínimos</strong> +  ". numfmt_format_currency($padrao,$resto,"BRL") ."</p>";
        ?>
    </section>
</body>
</html>