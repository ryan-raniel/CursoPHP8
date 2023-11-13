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
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php 
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);
                // rand() = 1951 - Linear congrential Generator
                // mt_rand() = 1997 - Mersenne Twister
                // random_int() gera números aleatórios criptocraficamente seguros
                echo "Gerando um número aleatorio entre $min e $max... \n";
                echo "O número gerado foi $num";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>