<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // ex1

        // $num = 010;    // 0x numero HEXADECIMAL
        //                // 0b numero BINARIO
        //                // 0  numero Octal
        // echo "O valor da variável é $num";
    
        // ex2

        // $v = "Gustavo";
        // var_dump($v);

        // ex3

        // $num = 3e2; // 3 x 10^2
        // echo "O valor é $num";
        // var_dump($num) // potencias são consideradas do tipo float

        // ex4

        // $num = (int) "950"; // coerção = forca ao php mudar o tipo primitivo
        // var_dump($num);

        // ex5

        // $casado = false;  // true boolean = 1    false boolean = vazio 
        // var_dump($casado);
        // print "O valor para casado é $casado";

        // ex6

        // $vet = [6, 2.5 , "Maria", 3, false];
        // var_dump($vet); // tipo primitivo array

        // ex7

        // class Pessoa { // tipo primitivo object
        //     private string $nome;
        // }
        // $p = new Pessoa;
        // var_dump($p);

    ?>
</body>
</html>