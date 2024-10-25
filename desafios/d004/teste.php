<pre>
    <?php 
        
        $inicio = date("m-d-Y", strtotime("-7 days")); // Formato correto Y-m-d
        $fim = date("m-d-Y"); // Formato correto Y-m-d
        
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'10-21-2024\'&@dataFinalCotacao=\'10-21-2024\'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        echo "A cotação foi $cotacao";
    ?>

</pre>