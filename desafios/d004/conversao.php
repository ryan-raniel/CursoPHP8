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
        <h1>Conversor de Moedas</h1>
            <?php 
            // Cotação vinda da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Quantos $$ você tem?
            $real = $_REQUEST["din"] ?? 0;

            // Equivalência em dólar
            $dolar = $real / $cotacao;

            // Mostar o resultado simples
            // echo "Seus r\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

            // Formatação de moedas com internacionalização!
            // Biblioteca intl (Internallization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p> Seus " . numfmt_format_currency($padrao, $real, "BRL") . " Equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            ?>
            <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>