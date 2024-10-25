<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
        
        $inicio = date("m-d-Y", strtotime("-7 days")); // Formato correto Y-m-d
        $fim = date("m-d-Y"); // Formato correto Y-m-d
        
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;
        
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        
        echo "A cotação de hoje está: " . numfmt_format_currency($padrao,$cotacao,"BRL");
        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <p>
            Com base nos dados do <strong><a href="https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='10-14-2024'&@dataFinalCotacao='10-21-2024'&$top=100&$orderby=dataHoraCotacao%20desc&$format=text/html&$select=cotacaoCompra,dataHoraCotacao" target="_blank">Banco Central do Brasil</a></strong>            
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>
</html>