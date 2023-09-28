<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variaveis e constantes</title>
</head>
<body>
    <?php 
        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        const PAIS = "BRASIL"; //CONSTANTS
        //
        //
        //
        // $nome = "Rafael";   VARIABLE
        // $sobrenome = "Silva"; VARIABLE
        //
        //
        //
        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS ;

        //
        //

        const _TX = 850;

        echo "Resultado = " . _TX; 

        // camelCase and SnakeCase 
        
        $nomeCompletoCliente = "Camel Case";

        $telefone_contato_fornecedor = "Snake Case";

        $nomecursosuperior = "";



    ?>
</body>
</html>