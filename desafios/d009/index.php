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
            $v1 = $_GET['v1'] ?? 0;
            $v2 = $_GET['v2'] ?? 0;
            $p1 = $_GET['p1'] ?? 0;
            $p2 = $_GET['p2'] ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="idv1" step="0.001" value="<?=$v1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="idp1" step="0.001" value="<?=$p1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="idv2" step="0.001" value="<?=$v2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="idp2" step="0.001" value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $media = ($v1 + $v2) / 2;
            $somaV = $v1*$p1 + $v2*$p2;
            $somaP = $p1 + $p2;

            $mediaP = ($somaP == 0) ? 0 : $somaV / $somaP;

            echo "<p>Analisando os valores <strong>$v1 e $v2</strong>:</p>";
            echo "<ul>";
            echo "<li>A <strong>Média Aritmética Simples</strong> entre as valores é igual a ". number_format($media,2,",",".")."</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com os pesos $p1 e $p2 é igual a ". number_format($mediaP,2,",",".")."</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>