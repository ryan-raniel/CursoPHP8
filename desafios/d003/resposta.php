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
            // Cotação copiada do google
            $cotação = 5.17;

            // Quantos $$ você tem?
            $real = $_REQUEST["din"] ?? 0;

            // Equivalência em dólar
            $dolar = $real / $cotação;

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